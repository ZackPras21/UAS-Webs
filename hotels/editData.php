<html>
    <head>
        <title>Edit data</title>
    </head>
    <body align="center">
        <h1>update Data Barang</h1>
        <hr>
        <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM hotels WHERE id = '$id'";
            $query = mysqli_query($koneksi,$sql);
            $row = mysqli_fetch_array($query);
            
        ?>
        <form name="fhotel" action="updateData.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>"/>
            <table align=center>
                <tr>
                    <td>No</td>
                    <td>: <input name="id" size="5" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>: <input name="namahotel" size="20" value="<?php echo $row['namahotel']; ?>"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>: <input name="city" size="20" value="<?php echo $row['city']; ?>"></td>
                </tr>
                <tr>
                    <td>Geusts</td>
                    <td>: <input name="namapemesan" size="20" value="<?php echo $row['namapemesan']; ?>"></td>
                </tr>
                <tr>
                    <td>Check In</td>
                    <td>: <input type="date" name="checkin" size="20" value="<?php echo $row['checkin']; ?>"></td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td>: <input name="duration" size="20" value="<?php echo $row['duration']; ?>"></td>
                </tr>
                
            </table>
            <hr>
                <input type="submit" value="Proses">
                <input type="reset" value="Reset">
                <a href="hotels.php">Batal</a>
        </form>
    </body>
</html>