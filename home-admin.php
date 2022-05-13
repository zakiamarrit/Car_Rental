<title>Halaman Admin</title>

<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$mobil = mysqli_query($db, "SELECT * FROM mobil ORDER BY id_mobil ASC");
$supir = mysqli_query($db, "SELECT * FROM supir ORDER BY id_supir ASC");
$customer = mysqli_query($db, "SELECT * FROM customer ORDER BY id_customer ASC");
$rental = mysqli_query($db, "SELECT * FROM rental ORDER BY id_rental ASC");
?>


<html>
<!-- <head>    
    <title>Homepage</title>
</head> -->

<body>


<div  align='center'>
<br>
    <h2>Tabel Mobil</h2>
<a href="add-mobil.php">Tambah Mobil</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>ID Mobil</th> <th>Tipe Mobil</th> <th>Jenis Mobil</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($mobil)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_mobil']."</td>";
        echo "<td>".$user_data['nama_mobil']."</td>";
        echo "<td>".$user_data['jenis_mobil']."</td>";
        echo "<td><a href='edit-mobil.php?id=$user_data[id_mobil]'>Edit</a> |
         <a href='delete-mobil.php?id=$user_data[id_mobil]' onclick=\"return confirm('Are you sure?')\">Delete</a></td></tr>";        
    }
    ?>
    </table>
    
<div  align='center'>
<br>
    <h2>Tabel supir</h2>
<a href="add-supir.php">Tambah Supir</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id Supir</th> <th>Nama Supir</th> <th>Alamat Supir</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($supir)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_supir']."</td>";
        echo "<td>".$user_data['nama_supir']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='edit-supir.php?id=$user_data[id_supir]'>Edit</a> | <a href='delete-supir.php?id=$user_data[id_supir]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>

<div  align='center'>
<br>
    <h2>Tabel Customer</h2>
<a href="add-customer.php">Tambah Customer</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id Customer</th> <th>Nama Customer</th> <th>Alamat Customer</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($customer)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_customer']."</td>";
        echo "<td>".$user_data['nama_customer']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td><a href='edit-customer.php?id=$user_data[id_customer]'>Edit</a> | <a href='delete-customer.php?id=$user_data[id_customer]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>

<div  align='center'>
<br>
    <h2>Tabel Rental</h2>
<a href="add-rental.php">Tambah Rental</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id Rental</th> <th>Id Customer</th> <th>Id Mobil</th> <th>Id Supir</th> <th>Tanggal Rental</th> <th>Tanggal Kembali</th> <th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($rental)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_rental']."</td>";
        echo "<td>".$user_data['id_customer']."</td>";
        echo "<td>".$user_data['id_mobil']."</td>";
        echo "<td>".$user_data['id_supir']."</td>";
        echo "<td>".$user_data['tgl_rental']."</td>";
        echo "<td>".$user_data['tgl_kembali']."</td>";
        echo "<td><a href='edit-rental.php?id=$user_data[id_rental]'>Edit</a> | <a href='delete-rental.php?id=$user_data[id_rental]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>

<br></br>
    <a href="logout.php">Log Out</a><br/><br/>
    <a href="home.php">Homepage</a><br/><br/>
</body>
</html>
