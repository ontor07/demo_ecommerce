<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      


        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'title' => ['required', 'max:200'],
            'order_by' => ['required'],
        ]);
        //  dd($request->all());
         $data = array(

            'image'=>$request->image,
            'type'=>$request->type,
            'title'=>$request->title,
            'starting_prize'=>$request->starting_prize,   
            'btn_url'=>$request->btn_url,   
            'order_by'=>$request->order_by,     
            'status'=>$request->status,   
            
            
        );

        // Handel file upload 
        $data['image'] = $this->uploadImage($request, 'image', 'uploads/slider');
        // Handel file upload 

        // $image= $request->file('image');

        // if($image){

        //     $imageName = rand().'.'.$image->getClientOriginalExtension();
        //     $image->move(public_path().'/uploads/slider',$imageName);

        //     $data['image'] = $imageName;
        // }

        $insert = Slider::create($data);

        if($insert)
        {
            toastr()->success('Data has been saved successfully!');
            return redirect(route('admin.slider.index'));
        }
        else
        {
            toastr()->error('An error has occurred please try again later.');
            return redirect(route('admin.slider.index'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
