<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $title = "Welcome to my Laravel 8 course";
        
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        print_r(route('products'));
        //$description = "Created by Uche";
        //return view('products.index', 
        //compact('title', 'description'));
        //return view('products.index')->with('title', $title);
        //return view('products.index',)->with('data', $data);
        return view('products.index', [
            'data' => $data
        ]);
    }   

    public function about() {
        return 'About Us Page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
}
