<?php
session_start();
require_once "databaseconnection.php";

if(isset($_POST["username"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $password_hash=hash("sha256",$password);


$q=mysqli_query($db,"SELECT * FROM users WHERE `username`='$username' AND `password`='$password_hash'");


$num=mysqli_num_rows($q);

if($num==0){
    echo "böyle bir kullanıcı bulunamadı. Şifrenizi kontrol ediniz";
    exit();
}

if($num>=1){
    $user=mysqli_fetch_assoc($q);
    $_SESSION["kullanicigirisi"]="1";
    echo "giriş başarılı borsa dünyasına hoş geldiniz".$user['username'];
    header("Location: mainpage.php");
    
    exit();
}

}

?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>
    <body>
        <div class="container bg-warning " style="text-align:center">BORSA MERKEZİNE HOŞ GELDİNİZ</div>
      

        <form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
    <p>do not you have account <a href="signup.php">sign up</a></p>
  </div>
  
</form>




      <style>
      body {
      background-image: url("dolar.jfif");
      background-size: cover;
      background-repeat: no-repeat;
      }
      </style>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>

