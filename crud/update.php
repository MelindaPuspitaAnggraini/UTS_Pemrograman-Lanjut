<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$hobi = $_POST['hobi'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update siswa set Nama='$nama', hobi='$hobi', alamat='$alamat' where id='$id'");

header("location:index.php");

?>