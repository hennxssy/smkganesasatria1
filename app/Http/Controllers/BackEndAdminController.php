<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndAdminController extends Controller
{
    public function getMaster(){
    	return view('backEndAdmin.dashboard.index');
    }
}
