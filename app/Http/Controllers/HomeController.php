<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Coffee;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function my_home() {
    $data = Coffee::all();

        return view('home.index', compact('data'));
    }
    
    public function index() {
        if(Auth::id()) {
            $usertype = Auth::user()->usertype;
            if($usertype == 'user') {
                $data = Coffee::all();
                return view('home.index', compact('data'));
            } else {
                return view('admin.index');
            }
        }
        
    }

    public function add_cart(Request $request, $id) {
        if(Auth::id()) {
            $coffee = Coffee::find($id);
            $cart_title = $coffee->title;
            $cart_details = $coffee->detail;
            $cart_price = Str::remove('$', $coffee->price);
            $cart_image = $coffee->image;
    
            $data = new Cart;
            $data->title = $cart_title;
            $data->details = $cart_details;
            $data->price = $cart_price * $request->qty;
            $data->image = $cart_image;
            $data->quantity = $request->qty;
            $data->userid = Auth::user()->id;

            $data->save();
            return redirect()->back();
        } else {
            return redirect("login");
        }
    }
    
}
