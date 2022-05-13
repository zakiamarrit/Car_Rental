<title>Halaman Utama</title>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
</head>
<body>
<div align='center'>
    <br>
    <h2>Daftar Mobil</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div align='center'>
        
        <?php
        $kata="";
        if (isset($_POST['kata'])) {
            $kata=$_POST['kata'];
        }
        ?>
        <input type="text" name="kata" value="<?php echo $kata;?>"/>
    </div>
    <div align='center'>
        <td></td>
        <input type="submit" value="Cari">
    </div>
    </form>

    <table width='50%' border=1>
        <br>
        <tr>
            <th>Mobil</th>
            <th>Jenis Mobil</th>
        </tr>
        <?php

        include "config.php";
        if (isset($_POST['kata'])) {
            $kata=trim($_POST['kata']);
            $sql="select * from mobil where nama_mobil like '%".$kata."%' or jenis_mobil like '%".$kata."%' order by id_mobil asc";

        }else {
            $sql="select * from mobil order by id_mobil asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
            ?>

            <tr>
                <td><?php echo $data["nama_mobil"]; ?></td>
                <td><?php echo $data["jenis_mobil"];   ?></td>
            </tr>
           
            <?php
        }
        ?>
    </table>
</div>

<div align='center'>
    <br>
    <h2>Daftar Supir</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div align='center'>
        
        <?php
        $kata2="";
        if (isset($_POST['kata2'])) {
            $kata2=$_POST['kata2'];
        }
        ?>
        <input type="text" name="kata2" value="<?php echo $kata2;?>"/>
    </div>
    <div align='center'>
        <td></td>
        <input type="submit" value="Cari">
    </div>
    </form>

    <table width='50%' border=1>
        <br>
        <thead>
        <tr>
            <th>Nama Supir</th>
            <th>Alamat Supir</th>

        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['kata2'])) {
            $kata2=trim($_POST['kata2']);
            $sql="select * from supir where nama_supir like '%".$kata2."%' or alamat like '%".$kata2."%' order by id_supir asc";

        }else {
            $sql="select * from supir order by id_supir asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
            

            ?>
            
            <tr>
                
                <td><?php echo $data["nama_supir"]; ?></td>
                <td><?php echo $data["alamat"];   ?></td>
            </tr>
           
            <?php
        }
        ?>
    </table>
</div>

<div align='center'>
    <br>
    <h2>Daftar Order Rental</h2>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div align='center'>
        
        <?php
        $kata3="";
        if (isset($_POST['kata3'])) {
            $kata3=$_POST['kata3'];
        }
        ?>
        <input type="text" name="kata3" value="<?php echo $kata3;?>"/>
    </div>
    <div align='center'>
        <td></td>
        <input type="submit" value="Cari">
    </div>
    </form>

    <table width='50%' border=1>
        <br>
        <thead>
        <tr>
            <th>Nama Customer</th>
            <th>Nama Supir</th>
            <th>Mobil</th>
            <th>Tanggal Rental</th>
            <th>Tanggal Kembali</th>
        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['kata3'])) {
            $kata3=trim($_POST['kata3']);
            $sql="select * from orders where nama_customer like '%".$kata3."%' order by tgl_rental asc";

        }else {
            $sql="select * from orders order by tgl_rental asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
            

            ?>
            
            <tr>
                <td><?php echo $data["nama_customer"]; ?></td>
                <td><?php echo $data["nama_supir"];   ?></td>
                <td><?php echo $data["nama_mobil"]; ?></td>
                <td><?php echo $data["tgl_rental"];   ?></td>
                <td><?php echo $data["tgl_kembali"];   ?></td>
            </tr>
           
            <?php
        }
        ?>
    </table>
    <br></br>
    <a href="home-admin.php">Halaman Admin</a><br/><br/>
</div>
</div>
</body>
</html>