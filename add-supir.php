<a href="home-admin.php">Back to Homepage</a>
<center>
<h2>Tambah Supir</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Nama Supir</td>
            <td><input type="text" name="nama_supir"></td>
        </tr>
        <tr>
            <td>Alamat Supir</td>
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
    
    $nama_supir=$_POST['nama_supir'];
    $alamat=$_POST['alamat'];

    $result = mysqli_query($db, "INSERT INTO supir(nama_supir,alamat) VALUES('$nama_supir','$alamat')");
    echo "<p><center>Selamat Data Customer Telah Diperbarui</center><p>";
}
?>