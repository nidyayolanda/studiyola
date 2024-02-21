<?php
include 'koneksi.php';
$id_tanggapan = $_GET['id_tanggapan'];
$query = "delete from tanggapan where id_tanggapan='$id_tanggapan'";
mysqli_query($koneksi, $query);
header("location:tbltanggapan.php")
?>