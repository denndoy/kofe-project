<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function my_booktable() {
        return view('booktable.index');
    }
}
