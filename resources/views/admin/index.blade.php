@extends('backEnd2.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h1>DATA PESERTA</h1></div>
 
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
					<td>{{ $biodata->nm_depan }} {{ $biodata->nm_belakang }}</td>
					</tr>
					<tr>
					<th>
					<th>
					<th>
					<br>
					<a href="{{route('readUserData', $biodata->id)}}" class="btn btn-primary">Lihat</a>
					<a href="{{route('deleteUser', $biodata->id)}}" class="btn btn-danger">Delete</a>
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