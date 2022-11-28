<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $products = Product:: latest()
        ->where('status',1)->paginate(10);
        return view('frontend.index',compact('products'));
    }
}
