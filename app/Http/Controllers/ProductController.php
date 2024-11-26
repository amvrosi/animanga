<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Genre;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Faker;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function manga()
    {
        $products = Product::where('type', 'like', 'manga')->get();
        return view('product.index', compact('products'));
    }

    /**
     * Display a listing of the resource.
     */
    public function merch()
    {
        $products = Product::where('type', 'like', 'merch')->get();
        return view('product.index', compact('products'));
    }

    public function search(SearchRequest $request){
        $searched = $request->searched;
        $products = Product::where('title', 'ilike', "%{$searched}%")->get();
        return view('product.search', compact('products', 'searched'));
    }

    public function genre(Genre $genre)
    {
        $products = $genre->products;
        return view('product.genre', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $faker = Faker\Factory::create();
        $nums = array();
        while(sizeof($nums) < 4){
            $num = $faker->numberBetween(1, 10);
            (!in_array($num, $nums)) ? array_push($nums, $num) : '';
        }
        $f = [
            'author' => $faker->name,
            'translator' => $faker->name,
            'vydavnytstvo' => $faker->company,
        ];
        return view('product.show', compact('product', 'f', 'nums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
