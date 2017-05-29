<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:UTS Febri Sukmawati (SKA-15.A.2)||FORMULIR PENDAFTARAN:.</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	color: #0000FF;
}
body {
	background-color: #00FFFF;
}
-->
</style>
</head>

<body>
<p class="style1">DATA YANG ANDA INPUTKAN </p>
<p><?php echo"<table border=1>";
if (isset($_POST['send']))
{
echo"<th bgcolor = #FFFF00>";

echo"PENDAFTARAN PELANGGAN BARU <br>";
echo"</th>";

echo"<tr bgcolor = #FF0000>";
echo"<td>";

echo"Data Pribadi <br>";

echo"<tr>";
echo"<td>";
echo"Nama : ".$_POST["nama"]."<br>";
echo"Jenis Kelamin : ".$_POST["jk"]."<br>";
echo"e-mail : ".$_POST["mail"]."<br>";

echo"<tr bgcolor = #FF0000>";
echo"<td>";

echo"Data Alamat Pengiriman <br>";

echo"<tr>";
echo"<td>";
echo"Nama Negara : ".$_POST["negara"]."<br>";
echo"Kota : ".$_POST["kota"]."<br>";
echo"Alamat : ".$_POST["alamat"]."<br>";
echo"Kode Pos : ".$_POST["kodepos"]."<br>";
echo"</td>";

echo"<tr bgcolor = #FF0000>";
echo"<td>";

echo"Data No Kontak <br>";

echo"<tr>";
echo"<td>";
echo"No. Telepon : ".$_POST["telp"]."<br>";
echo"No. Handphone : ".$_POST["hp"]."<br>";
echo"No. Faksimili : ".$_POST["fax"]."<br>";
echo"</td>";
}
echo"</table>";
?></p>
<p>&nbsp; </p>
</body>
</html>
