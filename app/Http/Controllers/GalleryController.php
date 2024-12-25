<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function my_gallery() {
        return view('gallery.index');
    }
}
