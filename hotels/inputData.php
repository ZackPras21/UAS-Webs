<html>
    <head>
        <title>Input data</title>
    </head>
    <body align="center">
        <h1>Input Data hotel</h1>
        <hr>
        <form name="fhotel" action="simpanData.php" method="post">
            <table align=center>
            <tr>
                    <td>No</td>
                    <td>:
                        <input name="id" size="5">
                    </td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>:
                        <input name="namahotel" size="20">
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>:
                        <input name="city" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Guests</td>
                    <td>:
                        <input name="namapemesan" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Check In</td>
                    <td>:
                        <input type="date" name="checkin" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td>: <input name="duration" size="20"></td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Proses">
                <input type="reset" value="Reset">
                
        </form>
    </body>
</html>