<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>
<body>
    
<div class="container-fluid bg-warning pt-4" style="height:60px">
  <div class="row">
    <div class="col" style="test-align:center"><a href="mainpage.php"><img src="dm.png" style="width: 200; height: 67; margin-top: -30px"></a></div>
    <div class="col" style="test-align:center"><span style="font-family: Arial; color: red; font-size: 20px; text-align: center; margin-top:30px h style="text-decoration: none; color: red;"
       onmouseover="this.style.color='blue';"
       onmouseout="this.style.color='green';"><a href="al-sat.php">Online İşlemler</a></span></div>

       <div class="col" style="test-align:center"><span style="font-family: Arial; color: red; font-size: 20px; text-align: center; margin-top:30px h style="text-decoration: none; color: red;"
       onmouseover="this.style.color='blue';"
       onmouseout="this.style.color='green';"><a href="cüzdan.php">Cüzdan</a></span></div>

       <div class="col" style="test-align:center"><span style="font-family: Arial; color: red; font-size: 20px; text-align: center; margin-top:30px h style="text-decoration: none; color: red;"
       onmouseover="this.style.color='blue';"
       onmouseout="this.style.color='green';"><a href="makaleler.php">Makaleler</a></span></div>

       <div class="col" style="test-align:center"><span style="font-family: Arial; color: red; font-size: 20px; text-align: center; margin-top:30px h style="text-decoration: none; color: red;"
       onmouseover="this.style.color='blue';"
       onmouseout="this.style.color='green';"><a href="profil.php">Profil</a></span></div>
  </div>
</div>
<style>
  body {
      background-image: url("dolar.jfif");
      background-size: cover;
      background-repeat: no-repeat;

      }
    form {
        margin-top: 150px;

    }  
      
      </style>

<form action="euro.php" name="tl" method="POST">
    <input type="number" pattern="^[0-9]" min="1" step="1" class="form-control" id="SoruField" name="tl" placeholder="Kaç TL döviz almak istersiniz" />
    <input type="submit" name="satın_al" value="Satın Al">
</form>


</body>



</html>

<?php
require_once "databaseconnection.php";

$dolar=25;

if (isset($_POST["satın_al"])) {
    if (isset($_POST["tl"])) {
        $tl = $_POST["tl"];
        $alınan_dolar = $tl / $dolar;
        
        
        $username = $_SESSION["username"];
        $sql = "UPDATE users SET sterlin = sterlin + $alınan_dolar WHERE username = '$username'";
        if (mysqli_query($db, $sql)) {
            echo "$alınan_dolar sterlin cüzdanınıza aktarıldı";
        } else {
            echo "Veritabanı hatası: " . mysqli_error($db);
        }
    } else {
        echo "Lütfen bir miktar girin.";
    }
}


?>