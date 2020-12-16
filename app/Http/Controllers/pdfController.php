<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Auth;

class pdfController extends Controller
{
     public function getMaster(){
     	$biodatas = Biodata::where('user_id',Auth::user()->id)->get();
        return view('biodata.pdf',compact('biodatas'));
   		
    }
}
