<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function brandImageUpload(Request $request)
    {

        $upload=$request->file('file');
        $originalName=$upload->getClientOriginalName();
        $filename=time().$originalName;
        Storage::disk('local')->putFileAs(
            'images',$upload,$filename
        );
        $image=new image();
        $image->name=$originalName;
        $image->path=$filename;
        $image->save();
        return \response()->json([
          'image_brandId'=>$image->id
        ]);

    }
}
