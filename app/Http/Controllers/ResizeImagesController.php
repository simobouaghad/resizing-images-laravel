<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ResizeImagesController extends Controller
{
    public function resizeImage()
    {
        return view('resize_image');
    }

    public function uploadImage(Request $request)
    {
        $image = $request->file;

        $fileName = $image->getClientOriginalName();
        $resize_image = Image::make($image->getRealPath())->resize(1200, 1200);
        $resize_image->save(public_path('images/' . $fileName));

        return "File resized successfully";
    }
}
