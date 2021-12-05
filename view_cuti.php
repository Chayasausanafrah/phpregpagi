<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LIST CUTI</title>
  </head>
  <body>
    <h1><center>Laporan Cuti Karyawan</center></h1>

  </body>
<?php
include "koneksi.php";

?>
<table class="table table-bordered table-success table-striped">

<tr>

      <td><strong> NO </strong></td>
      <td><strong> NIK </strong></td>
      <td><strong> Nama </strong></td>
      <td><strong> Jenis Kelamin </strong></td>
      <td><strong> Departemen </strong></td>
      <td><strong> Jabatan </strong></td>
      <td><strong> Alamat </strong></td>
      <td><strong> No telpon </strong></td>
      <td><strong> Mulai Cuti</strong></td>
	<td><strong> Berakhir Cuti </strong></td>
      <td><strong> Sisa Cuti </strong></td>
	<td><strong> Keterangan </strong></td>
      <td><strong> Jenis Cuti </strong></td>

		
    </tr>
    <?php
    $no=1;
        $query=mysqli_query($koneksi,"select * from cuti_karyawan");
        while ($tampil=mysqli_fetch_array($query)){?>

    <tr>
      <td><?php echo $no++;?></td>
	<td><?php echo $tampil['nik'];?></td>
      <td><?php echo $tampil['nama_karyawan'];?></td>
      <td><?php echo $tampil['jenis_kelamin'];?></td>
	<td><?php echo $tampil['departemen'];?></td>
	<td><?php echo $tampil['jabatan'];?></td>
      <td><?php echo $tampil['Alamat'];?></td>
      <td><?php echo $tampil['no_telpn'];?></td>
      <td><?php echo $tampil['mulai_cuti'];?></td>
	<td><?php echo $tampil['berakhir_cuti'];?></td>
      <td><?php echo $tampil['sisa_cuti'];?></td>
      <td><?php echo $tampil['keterangan'];?></td>
      <td><?php echo $tampil['jenis_cuti'];?></td>
    </tr>

        <?php } ?>

</table>
<table class="d-grid gap-2">
	<tr>
	<td><a class="btn btn-primary" href="input_cuti.php" type="button" onclick="return confirm('yakin kembali?')">kembali</a>
	</tr>
</table>
</html>