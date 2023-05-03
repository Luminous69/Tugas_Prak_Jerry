<?php
$host="localhost";
$user="root";
$pass="";
$db="prak_jaringan";

$koneksi = mysqli_connect($host,$user,$pass,$db);

//tes koneksi
if($koneksi){
    echo"Koneksi Berhasil "."<br>";
}
else{
    echo"Koneksi Gagal ";
}
?>