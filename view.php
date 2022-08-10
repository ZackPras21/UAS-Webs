<?php
            include 'koneksi.php';
            $from = $_GET['from'];
            $sql = "SELECT * FROM order WHERE 'from' = '$from'";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query);
            
?>