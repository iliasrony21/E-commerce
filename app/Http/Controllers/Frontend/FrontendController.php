<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        $products = Product::all();
        return view('welcome',compact('products'));
    }
}
