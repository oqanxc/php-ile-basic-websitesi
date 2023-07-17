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
    header("Location: kullanicipaneli.php");
    
    exit();
}



}
else
{
?>



<?php
}
?>



