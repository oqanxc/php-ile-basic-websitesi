<?php
session_start();

if(!isset($_SESSION["kullanicigirisi"]) || $_SESSION["kullanicigirisi"]=="0")
{
    echo  "giriş yapamazsınız";
    exit();
}

echo  "<a href='cüzdan.php'>cüzdan</a>"."<br>";
echo  "<a href='al-sat.php'>al-sat</a><br>";
echo  "<a href='profil.php'>profil</a><br>";
echo  "<a href='logout.php'>logout</a><br>";
echo   "<a href='hesabisil.php'>hesabisil</a><br>";

?>
