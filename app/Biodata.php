<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table='biodatas';
    protected $fillable=['user_id','nisn','nm_depan','nm_belakang','tempat_lahir','tgl_lahir','jns_kelamin','agama','nm_ortu','alamat','kota','provinsi','kode_pos','negara','email','hp_siswa','asal_sekolah','is_finished'];
    protected $primaryKey = 'id';
    public $timestamps = true;


    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
