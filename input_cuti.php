<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
  $nik=$_POST['nik'];
  $nama_karyawan=$_POST['nama_karyawan'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $departemen=$_POST['departemen'];
  $jabatan=$_POST['jabatan'];
  $Alamat=$_POST['Alamat'];
  $no_telpn=$_POST['no_telpn'];
  $mulai_cuti=$_POST['mulai_cuti'];
  $berakhir_cuti=$_POST['berakhir_cuti'];
  $sisa_cuti=$_POST['sisa_cuti'];
  $keterangan=$_POST['keterangan'];
  $jenis_cuti=$_POST['jenis_cuti'];
  
$query=mysqli_query($koneksi, "insert into cuti_karyawan (nik,nama_karyawan,jenis_kelamin,departemen,jabatan,Alamat,no_telpn,mulai_cuti,berakhir_cuti,sisa_cuti,keterangan,jenis_cuti)
value('$nik','$nama_karyawan','$jenis_kelamin','$departemen','$jabatan','$Alamat','$no_telpn','$mulai_cuti','$berakhir_cuti','$sisa_cuti','$keterangan','$jenis_cuti')");
if ($query){
    header("location:view_cuti.php");
}else{
    echo mysqli_eror();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>FORM CUTI KARYAWAN</title>
</head>
<body style="background-color:Burlywood; color:black">
    <div class="container">
    <h2 align="center"><b>ISI FORM INPUT</b></h2>
    <form method="POST" >
    <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
            <td>NIK</td>
		<td><input type="text" name="nik" placeholder="Masukan NIK Anda" class="form-control"></td>
    </tr>
    <tr>
            <td>Nama Karyawan</td>
		<td><input type="text" name="nama_karyawan" placeholder="Masukan Nama Anda" class="form-control"></td>
      </tr>
      <tr>
            <td>Jenis Kelamin</td>
            <td>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            </td> 
      </tr>
      <tr>
            <td>Departemen</td>
            <td>
		<select name="departemen">
			<option value="">-----Pilih-----</option>
			<option value="HRD">HRD</option>
			<option value="Produksi">Produksi</option>
			<option value="Marketing">Marketing</option>
            </select>
            </td>
      </tr>
      <tr>
            <td>Jabatan</td>
            <td>
		<select name="jabatan">
			<option value="">-----Pilih-----</option>
			<option value="manager">manager</option>
			<option value="SPv">Spv</option>
			<option value="Leader">Leader</option>
                  <option value="Staff">Staf</option>
			<option value="Admin">Admin</option>
            </select>
            </td>
      </tr>
      <tr>
		<td>Alamat</td>
		<td><input type="text" name="Alamat" placeholder="Masukan Alamat Anda" class="form-control"></td>
	</tr>
      <tr>
		<td>No Tlpn</td>
		<td><input type="text" name="no_telpn" placeholder="Masukan No Telpon Anda" class="form-control"></td>
	</tr>
      <tr>
            <td>Mulai Cuti</td>
		<td><input type="date" name="mulai_cuti"></td>
      </tr>
      <tr>
            <td>Berakhir Cuti</td>
		<td><input type="date" name="berakhir_cuti"></td>
      </tr>
      <tr>
		<td>Sisa cuti</td>
		<td><input type="text" name="sisa_cuti" placeholder="Masukan Sisa Cuti Anda" class="form-control"></td>
	</tr>
      <tr>
            <td>Keterangan</td>
            <td>
		<select name="keterangan">
			<option value="">-----Pilih-----</option>
			<option value="Nikah">Nikah</option>
			<option value="Melahirkan">Melahirkan</option>
                  <option value="lainnya">Lainnya</option>
		</select>
      </td>
      <tr>
            <td> Jenis Cuti </td>
	      <td><select name="jenis_cuti"</td>
            <option value="">--Pilih--</option>
            <option value="tahunan">tahunan</option>
            <option value="khusus">khusus</option>
            </Select></td>
      </tr>
      <tr>
            <td><input type="submit" name="save" class="btn btn-danger"></td>
      </tr>	
</div>
</table>
</form> 