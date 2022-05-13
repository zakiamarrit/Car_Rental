<?php
include "config.php";
$result = mysqli_query($db, "SELECT * FROM customer WHERE id_customer='$_GET[id]'");
$data=mysqli_fetch_array($result);

?>
<a href="home-admin.php">Back to Home</a>
<center>
<h2>Edit Customer</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">ID Customer</td>
            <td><input type="text" name="id_customer" value="<?php echo $data['id_customer']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td><input type="text" name="nama_customer" value="<?php echo $data['nama_customer']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat Customer</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
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
        $id_customer = $_POST['id_customer'];
        $nama_customer = $_POST['nama_customer'];
        $alamat=$_POST['alamat'];
        $result = mysqli_query($db, "UPDATE customer SET id_customer='$id_customer',nama_customer='$nama_customer',alamat='$alamat' WHERE id_customer = '$_GET[id]'");
    echo "<p><center>Selamat Data Customer telah diperbarui</center><p>";
}
?>