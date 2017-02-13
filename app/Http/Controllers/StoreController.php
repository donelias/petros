<?php

namespace Petros\Http\Controllers;

use Illuminate\Http\Request;

use Petros\Http\Requests;
use Petros\Http\Controllers\Controller;
use Petros\Product;

class StoreController extends Controller
{
    //
    public function index()
    {
    	$products = Product::orderBy('id', 'desc')->paginate(20);
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }

    public function inicio()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
