<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait ImageUploadTrait {

    public function uploadImage(Request $request, $inputName, $path ){

        $image= $request->file($inputName);

        if($image){

            $imageName = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path($path),$imageName);

            return $path.'/'.$imageName;

           
        }
    }
    public function updateImage(Request $request, $inputName, $path, $oldPath=null ){

        $image= $request->file($inputName);

        if($image){

            $deletePath = public_path($oldPath);

                    if(file_exists($deletePath))
                    {
                        unlink($deletePath);
                    }

            $imageName = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path($path),$imageName);

            return $path.'/'.$imageName;

           
        }
    }
}
