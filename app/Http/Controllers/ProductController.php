<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food_beverage()
    {
        return view('products.food-beverage');
    }

    public function beauty_health()
    {
        return view('products.beauty-health');
    }

    public function home_care()
    {
        return view('products.home-care');
    }

    public function baby_kid()
    {
        return view('products.baby-kid');
    }
}
