<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class WebsiteController extends Controller
{
    public function home()
    {
      $products = Product::latest()->get();
    $setting = Setting::first();
    return view('website.home', compact('products', 'setting'));
    }
}
