<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Jasa;

class HomeController extends Controller
{
    //

    public function index(){
        $products = Product::all();
        $jasa = Jasa::all();

        return view('welcome', compact('products','jasa'));
    }
    
}
