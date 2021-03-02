<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function create()
    {
        return view("images.create")
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show(Image $image)
    {
        dd($image);
    }
}
