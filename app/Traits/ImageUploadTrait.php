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
}
