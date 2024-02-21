<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "db_aplikasipengaduan";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
    die(mysql_error($koneksi));
}

?>