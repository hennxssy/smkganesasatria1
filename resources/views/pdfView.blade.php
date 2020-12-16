<!DOCTYPE html>
<html>
<head>

<title>Student Invoice</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
body{background:none}
#header{background:#0000ff}
#footer{background:#ffffff}
#header{font-family:Arial}
#header{font-size:20px}
#footer .text{color:#ffffff}
#footer a, #footer a:link, #footer a:visited{color:#ffffff}
#header{font-weight:normal}
#header{font-style:italic}
.style1 {
  font-size: 16px;
  font-weight: bold;
}
.style6 {
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
}
.style7 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 10px;
}
.style9 {font-size: 12px}
.style11 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  font-weight: bold;
}
.style12 {color: #FF0000}
.style14 {
  font-size: 14px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<title>Kartu Peserta</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="imagetoolbar" content="false">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="rating" content="general">
<meta http-equiv="CHARSET" content="ISO-8859-1">
<meta http-equiv="CONTENT-LANGUAGE" content="english">
<meta http-equiv="VW96.OBJECT TYPE" content="Document">
<meta name="RATING" content="General">
<meta name="ROBOTS" content="index,follow">
<meta name="REVISIT-AFTER" content="2 days">
</head>
<body>
<div align="center">
<br /><br />
<table width="450" border="2" align="center" cellspacing="0" bordercolor="#000000">
    <tr><td><div align="center" class="style1 style14">KARTU PESERTA</div></td></tr>
    <tr>
      <td>
        <table>
           @foreach($biodatas as $biodata)
            <tr height="20">
              <td width="140" class="style6"><strong>&nbsp;&nbsp;NISN</strong></td>
              <td width="12">:</td>
                  <td type="text" class="style6" name="nisn" value="" required>{{ $biodata->nisn }}</td>
            </tr>
            <tr height="20">
              <td width="140" class="style6"><strong>&nbsp;&nbsp;Nama Lengkap</strong></td>
              <td width="12">:</td>
                  <td width="348" class="style6">{{ $biodata->nm_depan }} {{ $biodata->nm_belakang }}</td>
            </tr>
            <tr height="20">
              <td width="140" class="style6"><strong>&nbsp;&nbsp;Tempat Lahir</strong></td>
              <td width="12">:</td>
                  <td width="348" class="style6">{{ $biodata->tempat_lahir }}</td>
            </tr>
            <tr>
              <td height="20" class="style6"><strong>&nbsp;&nbsp;Tanggal Lahir</strong></td>
              <td>:</td>
                  <td class="style6">{{ $biodata->tgl_lahir }}</td>
            </tr>
             <tr>
               <td height="20" class="style6"><strong>&nbsp;&nbsp;Agama</strong></td>
               <td>:</td>
                  <td class="style6">{{ $biodata->agama }}</td>
            </tr>
            <tr>
              <td height="20" class="style6"><strong>&nbsp;&nbsp;Jenis Kelamin</strong></td>
              <td>:</td>
                  <td class="style6">{{ $biodata->jns_kelamin }}</td>
            </tr>
            <tr>
              <td height="20" class="style6"><strong>&nbsp;&nbsp;Asal Sekolah</strong></td>
              <td>:</td>
                  <td class="style6">{{ $biodata->asal_sekolah }}</td>
            </tr>
            <tr><td>&nbsp;</td></tr>
             <tr>
              <td colspan="3" valign="middle" class="style6 style7">
                <table width="100%" border=0>
                  <tr><td width="35%" class="style6" align="center"><b>
                  Pendaftar
                  <br><br><br><br><br><br />
                  (............................)&nbsp;&nbsp;&nbsp;</b></td>
                  <td height="130" class="style6" width="30%">
                    <table width="100%">
                      <tr>
                      <td>&nbsp;</td>
                      <td><br>
                      <table width="50%" height="120" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr><td height="100" align="center" valign="middle">3 x 4</td>
                      </tr>
                      </table><br>
                      </td>
                      </tr>
                      </table>
                       @endforeach
                  </td>
              </tr>
                  </table>
              </td>
          </tr>
      </table>
  </td>
</tr>
</table>
</div>
</body>
