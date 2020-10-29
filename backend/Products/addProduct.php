<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class addProduct extends Controller
{
    public static function returnView() {
        return view('addProduct');
    }
    public static function createObjectFromForm(Request $request) {
        $product = new Product($request);
    }
}