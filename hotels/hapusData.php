<?php
include 'koneksi.php';

//menyinpan data id kedalam variabel
$id    = $_GET['id'];

//query SQL untuk delete data
$query="DELETE from hotels where id='$id'";
mysqli_query($koneksi, $query);

//menggalihkan ke halaman tabel
header("location:hotels.php");
?>