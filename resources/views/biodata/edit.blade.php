<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>	
<head>
<title>Registrasi Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Patronage Appointment form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

<link rel="stylesheet" href="{{asset('create/css/jquery-ui.css')}}" type="text/css" media="all">
<link href="{{asset('create/css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
<link href="{{asset('create/css/style.css')}}" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
<!--//webfonts-->

</head>
<body>


   
 <div class="w3_frm">

 <h3>Registrasi Form</h3>
  <form action="{{route('biodata.update', $biodata->id)}}" method="POST">
  		{{csrf_field()}}
  		<div class="w3l_nm">
		<div class="agile_fx">

		<label class="w3ls-opt">NISN<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="nisn" value="{{ $biodata->nisn }}" placeholder="NISN" required=" "/>
		</div>
		</div>
	</div>

		<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">FULL NAME<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">

			<input type="text" name="nm_depan" value="{{ $biodata->nm_depan }}" placeholder="first name" required=" "/>
		</div>
		<div class="w3ls-name">
			<input type="text" name="nm_belakang" value="{{ $biodata->nm_belakang }}" placeholder="last name" required=""/>
		</div>
		</div>
	</div>

	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Tempat Lahir<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="tempat_lahir" value="{{ $biodata->tempat_lahir }}" placeholder="Birth Place" required=" "/>
		</div>
		</div>
	</div>


	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Tanggal Lahir<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">
		
			<div class="book-pag-frm1 agileits w3layouts">
<input class="date agileits w3layouts" name="tgl_lahir" id="datepicker2" type="datepicker" value="{{ $biodata->tgl_lahir }}"  required="">
		</div>
		</div>
		</div>
	</div>

			<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Jenis Kelamin<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3_sd4">
			<select type="text" name="jns_kelamin" >	
									<option name="jns_kelamin" value="Laki-Laki"> Laki-Laki </option>
									<option name="jns_kelamin" value="Perempuan"> Perempuan </option>
				</select>
			</div>
		</div>
	</div>

	<div class="w3l_nm">
		<div class="agile_fx">

		<label class="w3ls-opt">Agama<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="agama" value="{{ $biodata->agama }}" placeholder="Religion" required=" "/>
		</div>
		</div>
	</div>

	<div class="w3l_nm">
		<div class="agile_fx">

		<label class="w3ls-opt">Nama Orang Tua<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="nm_ortu" value="{{ $biodata->nm_ortu }}" placeholder="Parent's Name" required=" "/>
		</div>
		</div>
	</div>
	
	<div class="wthree_loc">
	<div class="w3ls_ad">
		<label class="w3ls-opt"> Alamat <span class="w3ls-star"> * </span> </label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="alamat" value="{{ $biodata->alamat }}" placeholder="Address" required=" "/>
		</div>
		<div class="w3ls-name1">
		<div class="w3_sd3">
			<input type="text" name="kota" value="{{ $biodata->kota }}" placeholder="City" required=""/>
			</div>
			<div class="w3_sd4">
			<input type="text" name="provinsi" value="{{ $biodata->provinsi }}" placeholder="Province" required=""/>
			</div>
		</div>
		<div class="w3ls-name1">
		<div class="w3_sd3">
			<input type="text" name="kode_pos" value="{{ $biodata->kode_pos }}" placeholder="Zip Code" required=""/>
			</div>
		<div class="w3_sd4">
			<select type="text" name="negara">
								<option name="negara" value="Country"> Country </option>
								<option name="negara" value="India"> India </option>
								<option name="negara" value="United states"> United states </option>
								<option name="negara" value="Afghanisthan"> Afghanistan </option>
								<option name="negara" value="China"> China </option>
								<option name="negara" value="Indonesia"> Indonesia </option>
								<option name="negara" value="England"> England </option>
								<option name="negara" value="Others"> Others </option>
				</select>
			</div>
		</div>
		</div>
		</div>

		<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">EMAIL<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="email" name="email" value="{{ $biodata->email }}" placeholder="Email" required=" "/>
		</div>
		</div>
	</div>

	<div class="w3l_nm">
		<div class="agile_fx">

		<label class="w3ls-opt">No HP<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="hp_siswa" value="{{ $biodata->hp_siswa }}" placeholder="No Handphone" required=" "/>
		</div>
		</div>
	</div>


	<div class="w3l_nm">
		<div class="agile_fx">
		<label class="w3ls-opt">Sekolah Asal<span class="w3ls-star"> * </span></label>
		</div>
		<div class="wthree_fl">
		<div class="w3ls-name">	
			<input type="text" name="asal_sekolah" value="{{ $biodata->asal_sekolah }}" placeholder="Origin School" required=" "/>
		</div>
		</div>
	</div>

		
	
<div class="clear"></div>
	<div class="w3ls-btn">
		<input  type="submit" value="UPDATE">
	</div>
</form>

	
	</div>

<script type="text/javascript" src="{{asset('create/js/jquery-2.1.4.min.js')}}"></script>

		Necessary-JavaScript-Files-&-Links 
			Date-Picker-JavaScript 
				<script src="{{asset('create/js/jquery-ui.js')}}"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
					});
				</script>
				<script type="text/javascript" src="{{asset('create/js/wickedpicker.js')}}"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>

			<!-- //Date-Picker-JavaScript 
		<!-- //Necessary-JavaScript-Files-&-Links

</body>
</html>