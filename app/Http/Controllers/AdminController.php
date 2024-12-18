<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function add_coffee() {
        return view('admin.add_coffee');
    }

    public function upload_coffee(Request $request) {
        $data = new Coffee;
        $data->title = $request->title;
        $data->detail = $request->details;
        $data->price = $request->price;
        $image = $request->img;
        $filename = time().'.'.$image->getClientOriginalExtension();
        $request->img->move('coffee_img', $filename);
        $data->image = $filename;
        $data->save();

        return redirect()->back();
    }

    public function view_coffee() {
        $data = Coffee::all();

        return view('admin.show_coffee', compact('data'));
    }

    public function delete_coffee($id) {
        $data = Coffee::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_coffee($id) {

        $coffee = Coffee::find($id);
        return view('admin.update_coffee', compact('coffee'));
    }

    public function edit_coffee(Request $request, $id) {
        $data = Coffee::find($id);
        $data->title = $request->title;
        $data->detail = $request->details;
        $data->price = $request->price;
        
        if($request->hasFile('image')) {
            // Hapus gambar lama
            if ($data->image) {
                File::delete(public_path('coffee_img/' . $data->image));
            }
    
            // Upload gambar baru
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('coffee_img'), $imageName);
            $data->image = $imageName;
        }
    
        $data->save();
        return redirect('view_coffee');
    }
    
    
}
