<?php

include("koneksi.php");
if (isset($_POST['simpan'])) {
	$query_input_cuti = "insert into t_cuti(NIK,NAMA,JABATAN,HAKCUTI)values
	('" . $_POST['nik'] . "',
	 '" . $_POST['nama'] . "',
	'" . $_POST['jabatan'] . "',
	'" . $_POST['hakcuti'] . "')";
	$proses_data = mysqli_query($rumah,$query_input_cuti);
	if ($proses_data) {
		echo 'Input Data Berhasil ';
	} else {
		echo mysqli_error();
	}
}
?>
<form method="POST" action="">
	<table>
		<tr>
			<td>NIK</td>
			<td><input name="nik" type="text"></td>
		</tr>
		<tr>
			<td>Nama Karyawan</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td>Jabatan Karyawan</td>
			<td><input name="jabatan" type="text"></td>
		</tr>
		<tr>
			<td>Hak Cuti Karyawan</td>
			<td><input name="hakcuti" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
		<button><a href="cuti.php">tampilkan data</a></button>
	</table>
</form>