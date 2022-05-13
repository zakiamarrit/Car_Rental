<a href="home-admin.php">Back to Homepage</a>
<center>
<h2>Tambah customer</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Nama Customer</td>
            <td><input type="text" name="nama_customer"></td>
        </tr>
        <tr>
            <td>Alamat Customer</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>
</center>

<?php
include "config.php";

if(isset($_POST['proses'])){
    
    $nama_customer=$_POST['nama_customer'];
    $alamat=$_POST['alamat'];

    $result = mysqli_query($db, "INSERT INTO customer(nama_customer,alamat) VALUES('$nama_customer','$alamat')");
    echo "<p><center>Selamat Data Customer Telah Diperbarui</center><p>";
}
?>