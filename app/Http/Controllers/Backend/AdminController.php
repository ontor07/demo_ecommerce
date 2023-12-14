<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\menu;

class AdminController extends Controller
{
    public function dashboard()
    {
        $menu = menu::get(); 
        return view ('admin.dashboard',compact('menu'));
    }
}
