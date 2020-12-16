<?php

namespace App\Http\Controllers;

use App\Biodata;
use Auth;
use Illuminate\Http\Request;

class FrontEndHomeController extends Controller
{
    public function getMaster()
    {
        return view('frontEnd.master');
    }

    public function getPage()
    {
        $biodatas = Biodata::find(Auth::user()->id);
        return view('midEnd.master', compact('biodatas'));
    }

    public function getPage1()
    {

        $biodatas = Biodata::where('user_id', Auth::user()->id)->get();
        return view('biodata.create', compact('biodatas'));
    }
}
