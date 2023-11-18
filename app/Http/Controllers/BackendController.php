<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BackendController extends Controller
{
    public function change_lang(Request $request)
    {
        // return $request->lang;
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
    public function login (Request $request)
    {
        return view('admin.auth.login');
    }
}
