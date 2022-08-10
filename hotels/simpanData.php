<html>
    <center>
    <font size=6>
        Informasi Data Hotel
    </font>
    <hr width=320>
    <table>
    <?php
    require ("koneksi.php");
    $id             =$_POST['id'];
    $namahotel      =$_POST['namahotel'];
    $city           =$_POST['city'];
    $namapemesan    =$_POST['namapemesan'];
    $checkin        =$_POST['checkin'];
    $duration       =$_POST['duration'];

    echo "<tr><td>No<td>$id";
    echo "<tr><td>Hotel Name<td>$namahotel";
    echo "<tr><td>City<td>$city";
    echo "<tr><td>Geusts<td>$namapemesan";
    echo "<tr><td>Check In<td>$checkin";
    echo "<tr><td>duration<td>$duration";
    echo "</table>";
    echo "<hr width=320>";
    if($id!='')
        {
            $sql="insert into hotels values('$id,'$namahotel','$city,'$namapemesan','$checkin','$duration')";
            $hasil=mysqli_query($koneksi,$sql);
            echo "Data telah ditambahkan";
        }
        else
        {
            echo "Kode Barang Tidak Boleh Kosong";
        }
    ?>
    <a href="hotels.php">Tampil Data 
    </center>
</html>