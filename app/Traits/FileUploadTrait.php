<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{
    function uploadImage(Request $request, $inputName, $oldPath = null, $path = '/uploads')
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $fileName);
            if ($oldPath && File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }
            return $path . '/' . $fileName;
        }
        return $oldPath;
    }
}
