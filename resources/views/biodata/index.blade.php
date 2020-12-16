@extends('biodata.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h1>BIODATA DIRI</h1></div>
 
                <div class="panel-body">
				
                  <table class="table ">
				  	@foreach($biodatas as $biodata)
				    <tr>
				    <th>Nisn</th>
				    <th> : </th>
					<td>{{ $biodata->nisn }}</td>
					</tr>
					<tr>
					<th>Nama Depan</th>
					<th> : </th>
					<td>{{ $biodata->nm_depan }}</td>
					</tr>
					<tr>
					<th>Nama Belakang</th>
					<th> : </th>
					<td>{{ $biodata->nm_belakang }}</td>
					</tr>
					<tr>
					<th>Tempat Lahir</th>
					<th> : </th>
					<td>{{ $biodata->tempat_lahir }}</td>
					</tr>
					<tr>
					<th>Tanggal Lahir</th>
					<th> : </th>
					<td>{{ $biodata->tgl_lahir }}</td>
					</tr>
					<tr>
					<th>Jenis Kelamin</th>
					<th> : </th>
					<td>{{ $biodata->jns_kelamin }}</td>
					</tr>
					<tr>
					<th>Agama</th>
					<th> : </th>
					<td>{{ $biodata->agama }}</td>
					</tr>
					<tr>
					<th>Nama Orangtua</th>
					<th> : </th>	
					<td>{{ $biodata->nm_ortu }}</td>
					</tr>
					<tr>
					<th>Alamat</th>
					<th> : </th>	
					<td>{{ $biodata->alamat }}</td>
					</tr>
					<tr>
					<th>Kota</th>
					<th> : </th>	
					<td>{{ $biodata->kota }}</td>
					</tr>
					<tr>
					<th>Provinsi</th>
					<th> : </th>
					<td>{{ $biodata->provinsi }}</td>
					</tr>
					<tr>
					<th>Kode Pos</th>
					<th> : </th>
					<td>{{ $biodata->kode_pos }}</td>
					</tr>
					<tr>
					<th>Negara</th>
					<th> : </th>
					<td>{{ $biodata->negara }}</td>
					</tr>
					<tr>
					<th>Email</th>
					<th> : </th>
					<td>{{ $biodata->email }}</td>
					</tr>
					<tr>
					<th>No Handphone</th>
					<th> : </th>
					<td>{{ $biodata->hp_siswa }}</td>
					</tr>
					<tr>
					<th>Asal Sekolah</th>
					<th> : </th>
					<td>{{ $biodata->asal_sekolah }}</td>
					</tr>
					<tr>
					<th>
					<th>
					<th>
					<br>
					<a href="{{route('biodata.edit', $biodata->id)}}" class="btn btn-primary">Edit</a>
					<a href="{{route('biodata.delete', $biodata->id)}}" class="btn btn-danger">Delete</a>
					</th>
					</th>
					</th>
				  </tr>
				  @endforeach
				  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection