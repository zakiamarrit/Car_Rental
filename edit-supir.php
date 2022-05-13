<?php
include "config.php";
$result = mysqli_query($db, "SELECT * FROM supir WHERE id_supir='$_GET[id]'");
$data=mysqli_fetch_array($result);

?>
<a href="home-admin.php">Back to Home</a>
<center>
<h2>Edit Supir</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">ID supir</td>
            <td><input type="text" name="id_supir" value="<?php echo $data['id_supir']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Supir</td>
            <td><input type="text" name="nama_supir" value="<?php echo $data['nama_supir']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat Supir</td>
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
        $id_supir = $_POST['id_supir'];
        $nama_supir = $_POST['nama_supir'];
        $alamat=$_POST['alamat'];
        $result = mysqli_query($db, "UPDATE supir SET id_supir='$id_supir',nama_supir='$nama_supir',alamat='$alamat' WHERE id_supir = '$_GET[id]'");
    echo "<p><center>Selamat Data Supir telah diperbarui</center><p>";
    header('location:home-admin.php');
}

?>