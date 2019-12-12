<?php
include('koneksi.php');
$cuti = mysqli_query($rumah,"select * from t_cuti");

?>
<table border="1">
    <tr>
        <td>NIK</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Hak Cuti</td>
    </tr>
    <?php
    while ($cutii = mysqli_fetch_array($cuti)) { ?>
        <tr>
            <td><?php echo $cutii['NIK']; ?></td>
            <td><?php echo $cutii['NAMA']; ?></td>
            <td><?php echo $cutii['JABATAN']; ?></td>
            <td><?php echo $cutii['HAKCUTI']; ?></td>
        </tr>
    <?php } ?>

</table>