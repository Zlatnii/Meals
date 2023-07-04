<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;



use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function changeLang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }


}
