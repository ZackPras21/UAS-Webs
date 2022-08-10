<html>
    <head>
        <title>DATA HOTEL</title>
    </head>
    <body>
        <center>
        <font siza=7>
        Tampil Data Penginapan<br>
        <hr>
        <table border=10>
        <tr bgcolor=silver>
            <td width=50><center>No
            <td width=100><center>Hotel Name
            <td width=100><center>City
            <td width=100><center>Guests
            <td width=100><center>Check In
            <td width=100><center>Duration
            <td width=100><center>Proses
        <?php
        require ("koneksi.php");
        $sql="select * from hotels";
        $hasil=mysqli_query($koneksi,$sql);
        $row=mysqli_fetch_row($hasil);   
        do
        {
        list($id,$namahotel,$city,$namapemesan,$checkin,$duration)=$row;
        echo"<tr>
                <td>$id</td>
                <td>$namahotel</td>
                <td>$city</td>
                <td>$namapemesan</td>
                <td>$checkin</td>
                <td align=right>$duration</td>
                <td align=center>
                    <a href='viewData.php?id=$id'>View</a>
                    <a href='editData.php?id=$id'>Edit</a>
                    <a href='hapusData.php?id=$id'>Delete</a>
                </td>
            </tr>";      
            
        }
        while($row=mysqli_fetch_row($hasil));
        ?>
    </body>
</html>