@extends('admin.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h1>BIODATA PESERTA</h1></div>
 
                <div class="panel-body">
				
                  <table class="table ">
				    <tr>
				    <th>Nisn</th>
				    <th> : </th>
					<td><?php echo $biodatas->nisn; ?></td>
					</tr>
					<tr>
					<th>Nama Depan</th>
					<th> : </th>
					<td><?php echo $biodatas->nm_depan; ?></td>
					</tr>
					<tr>
					<th>Nama Belakang</th>
					<th> : </th>
					<td><?php echo $biodatas->nm_belakang; ?></td>
					</tr>
					<tr>
					<th>Tempat Lahir</th>
					<th> : </th>
					<td><?php echo $biodatas->tempat_lahir; ?></td>
					</tr>
					<tr>
					<th>Tanggal Lahir</th>
					<th> : </th>
					<td><?php echo $biodatas->tgl_lahir; ?></td>
					</tr>
					<tr>
					<th>Jenis Kelamin</th>
					<th> : </th>
					<td><?php echo $biodatas->jns_kelamin; ?></td>
					</tr>
					<tr>
					<th>Agama</th>
					<th> : </th>
					<td><?php echo $biodatas->agama; ?></td>
					</tr>
					<tr>
					<th>Nama Orangtua</th>
					<th> : </th>	
					<td><?php echo $biodatas->nm_ortu ?></td>
					</tr>
					<tr>
					<th>Alamat</th>
					<th> : </th>	
					<td><?php echo $biodatas->alamat; ?></td>
					</tr>
					<tr>
					<th>Kota</th>
					<th> : </th>	
					<td><?php echo $biodatas->kota; ?></td>
					</tr>
					<tr>
					<th>Provinsi</th>
					<th> : </th>
					<td><?php echo $biodatas->provinsi; ?></td>
					</tr>
					<tr>
					<th>Kode Pos</th>
					<th> : </th>
					<td><?php echo $biodatas->kode_pos; ?></td>
					</tr>
					<tr>
					<th>Negara</th>
					<th> : </th>
					<td><?php echo $biodatas->negara; ?></td>
					</tr>
					<tr>
					<th>Email</th>
					<th> : </th>
					<td><?php echo $biodatas->email; ?></td>
					</tr>
					<tr>
					<th>No Handphone</th>
					<th> : </th>
					<td><?php echo $biodatas->hp_siswa; ?></td>
					</tr>
					<tr>
					<th>Asal Sekolah</th>
					<th> : </th>
					<td><?php echo $biodatas->asal_sekolah; ?></td>
					</tr>
					<tr>
					<th>
					<th>
					<th>
					<br>
					<a href="{{route('deleteUser', $biodatas->id)}}" class="btn btn-danger">Delete</a>
					</th>
					</th>
					</th>
				  </tr>
				  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection