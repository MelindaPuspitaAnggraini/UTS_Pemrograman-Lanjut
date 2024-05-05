<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$hobi = $_POST['hobi'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES('','$nama','$hobi','$alamat')");

header("location:index.php");

?>