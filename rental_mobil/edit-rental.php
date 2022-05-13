<?php
include "config.php";
$result = mysqli_query($db, "SELECT * FROM rental WHERE id_rental='$_GET[id]'");
$data=mysqli_fetch_array($result);

?>
<a href="home-admin.php">Back to Home</a>
<center>
<h2>Edit Rental</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">ID Rental</td>
            <td><input type="text" name="id_rental" value="<?php echo $data['id_rental']; ?>"></td>
        </tr>
        <tr>
            <td>ID Customer</td>
            <td><input type="text" name="id_customer" value="<?php echo $data['id_customer']; ?>"></td>
        </tr>
        <tr>
            <td>ID Mobil</td>
            <td><input type="text" name="id_mobil" value="<?php echo $data['id_mobil']; ?>"></td>
        </tr>
        <tr>
            <td>ID Supir</td>
            <td><input type="text" name="id_supir" value="<?php echo $data['id_supir']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
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
        $id_rental = $_POST['id_rental'];
        $id_mobil = $_POST['id_mobil'];
        $id_supir = $_POST['id_supir'];
        $id_customer = $_POST['id_customer'];
        $tgl_rental = $_POST['tgl_rental'];
        $tgl_kembali=$_POST['tgl_kembali'];
        $result = mysqli_query($db, "UPDATE rental SET id_rental='$id_rental',id_mobil='$id_mobil',id_supir='$id_supir',id_customer='$id_customer',tgl_rental='$tgl_rental',tgl_kembali='$tgl_kembali' WHERE id_rental = '$_GET[id]'");
    echo "<p><center>Selamat Data Rental telah diperbarui</center><p>";
}
?>