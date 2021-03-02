<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    public function create()
    {
        return view("folder.create");
    }

    public function store(Request $request)
    {
        
    }

    public function show(Folder $folder)
    {
        
    }
}
