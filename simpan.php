<?php
include 'koneksi.php';

$from = $_POST['from'];
$to = $_POST['to'];
$jumlah_penumpang = $_POST['jumlah_penumpang'];
$tanggal_berangkat = $_POST['tanggal_berangkat'];
$class = $_POST['class'];
$namahotel = $_POST['namahotel'];
$city = $_POST['city'];
$namapemesan = $_POST['namapemesan'];
$checkin = $_POST['checkin'];
$duration = $_POST['duration'];
$dish = $_POST['dish'];
$area = $_POST['area'];
$origin= $_POST['origin'];
$destination = $_POST['destination'];
$tanggal_berangkat = $_POST['tanggal_berangkat'];
$no_penumpang = $_POST['no_penumpang'];


if ($from != null) {
    $sql = "INSERT INTO `order` VALUES('', '$from','$to', '$jumlah_penumpang', '$tanggal_berangkat', '$class')";
    $hasil = mysqli_query($koneksi, $sql);
    echo "<script> alert('Data Telah ditambahkan');document.location = 'index.php';</script>";
} else if ($namahotel != null) {
    $sql = "INSERT INTO `hotels` VALUES('', '$namahotel','$city', '$namapemesan', '$checkin', '$duration')";
    $hasil = mysqli_query($koneksi, $sql);
    echo "<script> alert('Data Telah ditambahkan');document.location = 'index.php';</script>";
} else if ($dish != null) {
    $sql = "INSERT INTO `eats` VALUES('', '$dish','$area')";
    $hasil = mysqli_query($koneksi, $sql);
    echo "<script> alert('Data Telah ditambahkan');document.location = 'index.php';</script>";
}else if ($origin != null) {
    $sql = "INSERT INTO `trains` VALUES('', '$origin','$destination','$tanggal_berangkat','$no_penumpang')";
    $hasil = mysqli_query($koneksi, $sql);
    echo "<script> alert('Data Telah ditambahkan');document.location = 'index.php';</script>";
}else { 
    echo "<script> alert('Isi Semua Form')</script>";
}

