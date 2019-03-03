<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsModel;

class FrontEndController extends Controller
{
    public function index()
    {
        $products = ProductsModel::paginate(5);
        return view('index', compact('products'));
    }

    public function single($id)
    {
        $product = ProductsModel::find($id);
        return view('single', compact('product'));
    }
}
