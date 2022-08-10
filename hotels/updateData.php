<?php
include 'koneksi.php';
//Menyimpan data kedalam variabel
$id             =$_POST['id'];
$namahotel      = $_POST['namahotel'];
$city           = $_POST['city'];
$namapemesan    = $_POST['namapemesan'];
$checkin        = $_POST['checkin'];
$duration       = $_POST['duration'];


//query SQL untuk update data
$sql="UPDATE hotels SET id='$id', namahotel='$namahotel', city='$city', namapemesan='$namapemesan', checkin='$checkin', 
duration='$duration' WHERE id='$id'";
mysqli_query($koneksi, $sql);

echo "<script type='text/javascript'>alert('Data dengan id hotel $id telah berhasil di update');document.location='hotels.php';</script>";


?>