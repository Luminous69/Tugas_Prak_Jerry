<?php
include("koneksi.php");
$sql="select * from mahasiswa";
$proses=mysqli_query($koneksi,$sql);
$isi = mysqli_fetch_assoc($proses);
    echo "NIM                       :".$isi['nim']."<br>";
    echo "Nama                      :".$isi['nama']."<br>";
    echo "Jenis Kelamin             :".$isi['jenkel']."<br>";
    echo "Tempat Tanggal Lahir      :".$isi['lahir']."<br>";
    echo "Nomor HP                  :".$isi['hp']."<br><br>";

?>