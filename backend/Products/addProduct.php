<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addProduct extends Controller
{
    public static function returnView() {
        return view('addProduct');
    }
}