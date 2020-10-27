<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public static function createView()
    {
        return view('productTest');
    }
    public static function createProduct($name,$desc,$imgPath,$stock,$link)
    {
        $product = new Product($name,$desc,$imgPath,$stock,$link);
        echo($product->getName());
        $product->addProductToDB();
    }
}
