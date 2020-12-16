<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Auth;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
        public function downloadPDF()

    {
        $biodatas = Biodata::where('user_id',Auth::user()->id)->get();
        $pdf = PDF::loadView('pdfView',compact('biodatas'));
        return $pdf->download('invoice.pdf');

    }

}
