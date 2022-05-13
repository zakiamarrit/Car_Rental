<a href="home-admin.php">Back to Homepage</a>
<center>
<h2>Tambah Mobil</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Tipe Mobil</td>
            <td><input type="text" name="nama_mobil"></td>
        </tr>
        <tr>
            <td>Jenis Mobil</td>
            <td><input type="text" name="jenis_mobil"></td>
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
    
    $nama_mobil=$_POST['nama_mobil'];
    $jenis_mobil=$_POST['jenis_mobil'];

    $result = mysqli_query($db, "INSERT INTO mobil(nama_mobil,jenis_mobil) VALUES('$nama_mobil','$jenis_mobil')");
    echo "<p><center>Selamat Data mobil telah diperbarui</center><p>";
}
?>