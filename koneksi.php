<?php
$user="root";
$server="localhost";
$password="";
$database="uts3";

$rumah=mysqli_connect($server,$user,$password);
if($rumah){
	echo 'Terhubung ';
}else{
	echo 'Cek Lagi';
}

$db=mysqli_select_db($rumah,$database);
if($db){
	echo 'Database Berhasil Terhubung ';
}else{
	echo 'Cek Lagi';
}
?>