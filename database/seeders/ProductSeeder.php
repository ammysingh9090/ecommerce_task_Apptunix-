<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $products = [
        [
            'name' =>  "demo 1",
            'description' =>  'demo description 1',
            'image' =>  'demo_1.jpg',
            'price' =>  100,
        ],
        [
            'name' =>  "demo 2",
            'description' =>  'demo description 2',
            'image' =>  'demo_2.jpg',
            'price' =>  200,
        ],
        [
            'name' =>  "demo 3",
            'description' =>  'demo description 3',
            'image' =>  'demo_3.jpg',
            'price' =>  300,
        ],
        [
            'name' =>  "demo 4",
            'description' =>  'demo description 4',
            'image' =>  'demo_3.jpg',
            'price' =>  400,
        ],
        [
            'name' =>  "demo 4",
            'description' =>  'demo description 4',
            'image' =>  'demo_3.jpg',
            'price' =>  500,
        ],
        [
            'name' =>  "demo 5",
            'description' =>  'demo description 5',
            'image' =>  'demo_2.jpg',
            'price' =>  600,
        ],

        [
            'name' =>  "demo 6",
            'description' =>  'demo description 6',
            'image' =>  'demo_2.jpg',
            'price' =>  700,
        ],
    ];

    foreach($products as $product){
        if( !(Product::where('name', $product['name'])->exists()) ){
            Product::create($product);
        }
    }
    }
}
