<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageControllerOne extends Controller
{
    public function uploadImageView1()
    {
        return view("uploadimage1");
    }

    public function uploadImage1(Request $request)
    {
        $request->validate([
            'image' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('images', $imageName, 'public'); // store in storage/app/public/images

        return redirect()->back()
            ->with('success', 'Image uploaded successfully')
            ->with('path', $path); // this will be 'images/filename.ext'
    }
}
