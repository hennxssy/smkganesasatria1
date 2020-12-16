<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = Biodata::where('user_id',Auth::user()->id)->get();
        return view('biodata.index',compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $userBiodata = Biodata::where('user_id',Auth::user()->id)->first();
        $userBiodata->nm_depan = $request['nm_depan'];
        $userBiodata->nm_belakang = $request['nm_belakang'];
        $userBiodata->tempat_lahir = $request['tempat_lahir'];
        $userBiodata->tgl_lahir = $request['tgl_lahir'];
        $userBiodata->jns_kelamin = $request['jns_kelamin'];
        $userBiodata->agama = $request['agama'];
        $userBiodata->nm_ortu = $request['nm_ortu'];
        $userBiodata->alamat = $request['alamt'];
        $userBiodata->kota = $request['kota'];
        $userBiodata->provinsi = $request['provinsi'];
        $userBiodata->kode_pos = $request['kode_pos'];
        $userBiodata->negara = $request['negara'];
        $userBiodata->email = $request['email'];
        $userBiodata->hp_siswa = $request['hp_siswa'];
        $userBiodata->asal_sekolah = $request['asal_sekolah'];
        $userBiodata->save();

        return redirect('/index/pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit')->with('biodata', $biodata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $biodata                  = Biodata::find($id);
        $biodata->nisn         = $request->input('nisn');
        $biodata->nm_depan      = $request->input('nm_depan');
        $biodata->nm_belakang   = $request->input('nm_belakang');
        $biodata->tempat_lahir  = $request->input('tempat_lahir');
        $biodata->tgl_lahir    = $request->input('tgl_lahir');
        $biodata->jns_kelamin   = $request->input('jns_kelamin');
        $biodata->agama         = $request->input('agama');
        $biodata->nm_ortu       = $request->input('nm_ortu');
        $biodata->alamat       = $request->input('alamat');
        $biodata->kota        = $request->input('kota');
        $biodata->provinsi     = $request->input('provinsi');
        $biodata->kode_pos    = $request->input('kode_pos');
        $biodata->negara       = $request->input('negara');
        $biodata->email        = $request->input('email');
        $biodata->hp_siswa     = $request->input('hp_siswa');
        $biodata->asal_sekolah = $request->input('asal_sekolah');
        $biodata->save();
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect('/index/pendaftaran');
    }
}
