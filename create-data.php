<?php
include_once("konfigurasi.php");

$sql = "INSERT INTO mhs(nim, nama, alamat, tgl_lahir, jeniskel) VALUES('2401010774', 'Cakra', 'Jl. Hayam Wuruk', '2006-04-26', 'P')";

$res = mysqli_query($koneksi, $sql);

if (!$res) {
    die("Penambahan data gagal");
}

echo "Penambahan data sukses";

mysqli_close($koneksi);
?>