<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\Storage;

class FolderController extends Controller
{
    public function create()
    {
        return view("folders.create");
    }

    public function store(Request $request)
    {
        $folder_name = $request->input("folder_name");

        if(Storage::disk('s3')->exists($folder_name))
        {
            return [
                "msg"=>"Folder is already exists"
            ];
        }
        
        $folderCreate = Storage::disk('s3')->makeDirectory($folder_name);

        if($folderCreate)
        {
            $folder = Folder::create([
                "name"=>$folder_name,
                "path"=>$folder_name
            ]);
        }else{
            return [
                "msg"=>"Folder not created.Something went wrong"
            ];
        }

    }

    public function show(Folder $folder)
    {

    }
}
