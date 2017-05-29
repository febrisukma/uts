<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:UTS Febri Sukmawati (SKA-15.A.2)||FORMULIR PENDAFTARAN:.</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
.style10 {color: #00FFFF}
.style11 {
	color: #FFFF00;
	font-size: 10px;
}
.style12 {font-size: 18px}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="menampilkandata.php">
  <table width="200" border="2" align="center">
    <tr>
      <td><table width="523" border="0">
        <tr bgcolor="#00FFFF">
          <td colspan="4" bgcolor="#00FFFF"><div align="center" class="style12">PENDAFTARAN PELANGGAN BARU </div></td>
        </tr>
        <tr bgcolor="#FFFF00">
          <td colspan="4" bgcolor="#FF0000">Data Pribadi </td>
        </tr>
        <tr>
          <td width="120"><span class="style10">Nama Lengkap </span></td>
          <td colspan="3"><label>
          <input name="nama" type="text" id="nama" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">Jenis Kelamin </span></td>
          <td colspan="3"><label>
            </span>
            <span class="style10">
            <input name="jk" type="radio" value="Pria" />
            Pria </span>
            <span class="style10">
            <input name="jk" type="radio" value="Wanita" />
            Wanita</span></label></td>
        </tr>
        <tr>
          <td><span class="style10">e-mail</span></td>
          <td colspan="3"><label>
            <input name="mail" type="text" id="mail" />
          </label></td>
        </tr>
        <tr bgcolor="#FFFF00">
          <td colspan="4" bgcolor="#FF0000">Data Alamat Pengiriman </td>
        </tr>
        <tr>
          <td><span class="style10">Nama Negara </span></td>
          <td colspan="3"><label>
            <input name="negara" type="text" id="negara" value="Indonesia" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">Kota</span></td>
          <td colspan="3"><label>
            <input name="kota" type="text" id="kota" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">Alamat</span></td>
          <td colspan="3"><label>
            <textarea name="alamat" id="alamat"></textarea>
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">Kode Pos </span></td>
          <td colspan="3"><label>
            <input name="kodepos" type="text" id="kodepos" maxlength="5" />
            <span class="style11"> *(diisi min/max 5 digit) </span></label></td>
        </tr>
        <tr bgcolor="#FFFF00">
          <td colspan="4" bgcolor="#FF0000">Data No Kontak </td>
        </tr>
        <tr>
          <td><span class="style10">No. Telepon </span></td>
          <td colspan="3"><label>
            <input name="telp" type="text" id="telp" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">No. Handphone </span></td>
          <td colspan="3"><label>
            <input name="hp" type="text" id="hp" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10">No. Faksimili </span></td>
          <td colspan="3"><label>
            <input name="fax" type="text" id="fax" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10"></span></td>
          <td colspan="3"><label>
            <input type="submit"/ name="send" value="Send" />
            <input name="reset" type="reset" id="reset" value="Reset" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style10"></span></td>
          <td width="355">&nbsp;</td>
          <td width="23">&nbsp;</td>
          <td width="7">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
