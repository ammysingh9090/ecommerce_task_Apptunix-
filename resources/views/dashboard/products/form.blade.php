@extends('dashboard.main')

@section('content')

    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0"> {{ (isset($product)) ? 'Edit Product' : 'Add Product' }} </h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="col-12 text-right">
                                        <a class="btn btn-primary btn-sm custom-back-btn"
                                            href="{{ route('products.index') }}">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="{{  (isset($product)) ? route('products.update',[$product->id]) : route('products.store') }}" enctype="multipart/form-data">
                                {{ (isset($product)) ? method_field('PUT') : ''}}
                                @csrf
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">Name <span
                                                        class="text-danger"> *</span></label>
                                                <input type="text" id="input-first-name" required="" name="name"
                                                    maxlength="50" class="form-control" placeholder="Product Name"
                                                    value="{{ old('name') ?? ($product->name ?? '') }}">
                                            </div>
                                            @if ($errors->has('name'))
                                                <span class="error text-red">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="price"> Price <span
                                                        class="text-danger"> *</span></label>
                                                <input type="number" id="price" class="form-control"
                                                    name="price" placeholder="Cost Price"
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    maxlength="15" min="0"
                                                    onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))"
                                                    value="{{ old('price') ?? ($product->price ?? '') }}">
                                            </div>
                                            @if ($errors->has('price'))
                                                <span class="error text-red">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-description">Description
                                                    <span class="text-danger"> *</span></label>
                                                <textarea id="input-description" required="" name="description" class="form-control" maxlength="500"
                                                    placeholder="Description">
                                                  {{ old('description') ?? ($product->description ?? '') }}
                                                </textarea>
                                            </div>
                                            @if ($errors->has('description'))
                                                <span class="error text-red">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="image"> Image <span
                                                        class="text-danger"> *</span></label>
                                                <input type="file" id="image" class="form-control"
                                                    name="image" placeholder="Image" />
                                             </div>
                                                @if ($errors->has('image'))
                                                <span class="error text-red">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-lg-6" id="add_button">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $product->id ?? null }}">
                                                <button class="btn btn-primary"> {{ (isset($product)) ? 'Update' : 'Add' }} </button>
                                             </div>
                                        </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

