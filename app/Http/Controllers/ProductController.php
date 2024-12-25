<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function my_product() {
        $data = Coffee::all();
        return view('product.index', compact('data'));
    }
}
