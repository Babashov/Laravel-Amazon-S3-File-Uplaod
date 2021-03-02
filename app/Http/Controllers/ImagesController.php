<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
class ImagesController extends Controller
{
    public function create()
    {
        return view("images.create");
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('images','s3');
        $image = Image::create([
            "name"=>basename($path),
            "path"=>Storage::disk('s3')->url($path)
        ]);

        return $image;

    }

    public function show(Image $image)
    {
        $image_url = Storage::disk('s3')->response('images/'.$image->name);
        return $image_url;
    }
}
