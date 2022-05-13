<a href="home-admin.php">Back to Homepage</a>
<center>
<h2>Tambah Rental</h2>

<form action="" method="post">
    <table>
        <tr>
            <td>ID Mobil</td>
            <td><input type="text" name="id_mobil"></td>
        </tr>    
        <tr>
            <td>ID Supir</td>
            <td><input type="text" name="id_supir"></td>
        </tr>        
        <tr>
            <td>ID Customer</td>
            <td><input type="text" name="id_customer"></td>
        </tr>
        <tr>
            <td width="130">Tanggal Rental</td>
            <td><input type="date" name="tgl_rental"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td><input type="date" name="tgl_kembali"></td>
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
    
    $tgl_rental=$_POST['tgl_rental'];
    $tgl_kembali=$_POST['tgl_kembali'];
    $id_mobil=$_POST['id_mobil'];
    $id_supir=$_POST['id_supir'];
    $id_customer=$_POST['id_customer'];

    $result = mysqli_query($db, "INSERT INTO rental(id_mobil,id_supir,id_customer,tgl_rental,tgl_kembali) VALUES('$id_mobil','$id_supir','$id_customer','$tgl_rental','$tgl_kembali')");
    echo "<p><center>Selamat Tanggal Rental Telah Diperbarui</center><p>";
}
?>