<html>
    <head>
        <title>View Data</title>
    </head>
    <body align="center">
        <h1>View Data Hotel</h1>
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
                    <td>: <?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>: <?php echo $row['namahotel']; ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>: <?php echo $row['city']; ?></td>
                </tr>
                <tr>
                    <td>Geusts</td>
                    <td>: <?php echo $row['namapemesan']; ?></td>
                </tr>
                <tr>
                    <td>Check In</td>
                    <td>: <?php echo $row['checkin']; ?></td>
                </tr>
                <tr>
                    <td>duration</td>
                    <td>: <?php echo $row['duration']; ?></td>
                </tr>
            </table>
            <hr>
                <?php
                    echo "<a href='editData.php?id=$id'>Edit</a>";
                    echo "<a href='inputData.php>Tambah Baru</a>";
                    echo "<a href='hotels.php'>Kembali</a>";
                ?>
            </td>
        </form>
    </body>
</html>