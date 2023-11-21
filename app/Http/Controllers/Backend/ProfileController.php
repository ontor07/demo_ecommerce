<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }
    public function profileUpdate(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();

        if($request->hasFile('image')){

            $path = public_path().'/backend/assets/uploads/'.$user->image;
                    if(file_exists($path))
                    {
                        unlink($path);
                    }
         
            $image= $request->image;
            $imageName = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/uploads',$imageName);

            $path = $imageName;

            $user->image = $path;
        }

        $request->validate([
            'name'=> ['required','max:100'],
            'email'=> ['required', 'email', 'unique:users,email,'.Auth::user()->id],
        ]);

       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        toastr()->success('Profile Updated Successfully');
         return redirect()->back();
    }

    // Update Password
    public function updatePassword(Request $request){
        // dd($request->all());
        $request->validate([
            'current_password'=> ['required', 'current_password'],
            'password'=> ['required', 'confirmed', 'min:8']
        ]);

        $request->user()->update([
            'password'=> bcrypt($request->password)
        ]);
        toastr()->success('Password Updated Successfully');
        return redirect()->back();
    }
}
