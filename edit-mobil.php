<?php
include "config.php";
$result = mysqli_query($db, "SELECT * FROM mobil WHERE id_mobil='$_GET[id]'");
$data=mysqli_fetch_array($result);

?>
<a href="home-admin.php">Back to Home</a>
<center>
<h2>Edit Mobil</h2>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">ID Mobil</td>
            <td><input type="text" name="id_mobil" value="<?php echo $data['id_mobil']; ?>"></td>
        </tr>
        <tr>
            <td>Tipe Mobil</td>
            <td><input type="text" name="nama_mobil" value="<?php echo $data['nama_mobil']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Mobil</td>
            <td><input type="text" name="jenis_mobil" value="<?php echo $data['jenis_mobil']; ?>"></td>
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
        $id_mobil = $_POST['id_mobil'];
        $nama_mobil = $_POST['nama_mobil'];
        $jenis_mobil=$_POST['jenis_mobil'];
        $result = mysqli_query($db, "UPDATE mobil SET id_mobil='$id_mobil',nama_mobil='$nama_mobil',jenis_mobil='$jenis_mobil' WHERE id_mobil = '$_GET[id]'");
    echo "<p><center>Selamat Data Mobil telah diperbarui</center><p>";
}
?>