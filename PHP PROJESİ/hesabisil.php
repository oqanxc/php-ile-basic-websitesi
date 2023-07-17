<?php
require_once "databaseconnection.php";


if(isset($_POST["password"])){
    
    $password=$_POST["password"];
    $username=$_POST["username"];

    $sorgu = mysqli_query($db,"DELETE FROM users WHERE `username`='$username'");
    echo "hoşça kalın";
    
    header("location:index.php");
}
?>

<form action="hesabisil.php" method="POST"> 
    kullanıcı adınızı giriniz<input type="text" name="username" />
    Şifrenizi giriniz<input type="text" name="password" /> <br />  
    <input type="submit" value="hesabı sil"/> 
</form> 