<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\DataTables\MenuDataTable;
use Illuminate\Http\Request;
use App\Models\menu;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MenuDataTable $dataTable)
    {   
        return $dataTable->render('admin.menu.index');
        $i=1;
        $menu= menu::all();
        // return view('',compact('menu','i'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent= menu::where('type',1)->get();
        return view('admin.menu.create',compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = array(

            'parent_id'=>$request->parent_id,
            'menu_name_en'=>$request->menu_name_en,
            'menu_name_bn'=>$request->menu_name_bn,
            'order_by'=>$request->order_by,   
            'route_name'=>$request->route_name,   
            'icon'=>$request->icon,   
            'type'=>$request->type,   
            'status'=>$request->status,   
            'status'=>$request->status,   
            
        );
        $insert = menu::create($data);

        if($insert)
        {
            toastr()->success('Data has been saved successfully!');
            return redirect(route('admin.menu.create'));
        }
        else
        {
            toastr()->error('An error has occurred please try again later.');
            return redirect(route('admin.menu.create'));
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
        $data= menu::where('id',$id)->first();
        $parent= menu::where('type',1)->get();
        return view('admin.menu.edit',compact('data','parent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = array(

            'parent_id'=>$request->parent_id,
            'menu_name_en'=>$request->menu_name_en,
            'menu_name_bn'=>$request->menu_name_bn,
            'order_by'=>$request->order_by,   
            'route_name'=>$request->route_name,   
            'icon'=>$request->icon,   
            'type'=>$request->type,   
            'status'=>$request->status,   
            'status'=>$request->status,   
            
        );

        $update = menu::find($id)->update($data);
        if($update)
        {
            toastr()->success('Data has been Updated successfully!!');
            return redirect(route('admin.menu.index'));
        }
        else
        {
            toastr()->error('An error has occurred please try again later.');
            return redirect(route('admin.menu.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         menu::where('id',$id)->delete();
        
        return response(['status' =>'success', 'message' => 'Deleted Successfully']);
    }
}
