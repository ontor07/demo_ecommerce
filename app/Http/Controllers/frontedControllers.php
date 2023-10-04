<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontedControllers extends Controller
{
    public function home()
    {
        return view ('fronted.index');
    }
}
