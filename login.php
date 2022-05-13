<title>Login Admin</title>

<div align='center'>
  <form action="" method="post">
  <br><br><br><br><br><br><br><br><br>
  <h1>Login Sebagai Admin</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  </tbody>
  </table>
  </form>
  <a href="home.php">Back to Home</a>
</div>
<br>

<center>
<?php
   session_start();
   require_once("config.php");
  if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username = $_POST['username'];
   $password = md5($_POST['password']);   
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "Username Belum Terdaftar!";
   } else {
     if($password <> $hasil['password']) {
       echo "Password salah!";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:home-admin.php');
     }
   }
  }
?>
</center>