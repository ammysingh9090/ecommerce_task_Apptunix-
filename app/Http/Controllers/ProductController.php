<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index');
    }

    public function filter_list(Request $request)
    {
        $filter_product = Product::where('status', Product::ACTIVE);

        $products = $filter_product->when($request->keywords, function ($query) use ($request) {
            $query->where('name', 'LIKE', "%$request->keywords%");
        })->latest()->paginate(10)->withQueryString();

        $content = view('dashboard.products.filter_list', compact('products'))->render();
        return response()->json(['html' => $content]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:2|max:50|unique:products,name',
            'description'   => 'required|max:500',
            'price'         => 'required|integer',
            'image'         => 'required|mimes:jpeg,png'
        ]);

        $imageName = time() . '.' . $request->file('image')->clientExtension();
        $request->image->move(public_path('/images'), $imageName);
        $data = $request->except('_token');
        $data['image'] = $imageName;
        $data['status'] = Product::ACTIVE;

        $product = DB::transaction(function () use ($data) {
            return Product::create($data);
        });

        if ($product) {
            return redirect()->route('products.index')->with('success', 'Product added to cart successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.form', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'id'            => 'required|exists:products,id',
            'name'          => 'required|min:2|max:50|unique:products,name,' . $product->id,
            'description'   => 'required|max:500',
            'price'         => 'required|integer',
            'image'         => 'mimes:jpeg,png'
        ]);

        if (isset($request->image)) {
            $imageName = time() . '.' . $request->file('image')->clientExtension();
            $request->image->move(public_path('/images'), $imageName);
            $data = $request->except('_token', 'id', '_method');
            $data['image'] = $imageName;
        } else {
            $data = $request->except('_token', 'image', 'id', '_method');
        }
        $old_file = $product->image;
        $product = DB::transaction(function () use ($product, $data) {
            return $product->update($data);
        });

        if ($product) {
            if (isset($old_file)) {
                if (file_exists( $old_file) ) {
                    unlink( $old_file);
                }
            }
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
