<?php



?>

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

<div class="card">
  <div class="card-inner">
    <div class="card-front">
      <p><a href="dolar.php">1$</a></p>
    </div>
    <div class="card-back">
      <p><a href="dolar.php">20TL</a></p>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-inner">
    <div class="card-front">
      <p><a href="euro.php">1€</a></p>
    </div>
    <div class="card-back">
      <p><a href="euro.php">23</a></p>
    </div>
  </div>
</div>




<div class="card">
  <div class="card-inner">
    <div class="card-front">
      <p>1£</p>
    </div>
    <div class="card-back">
      <p><a href="sterlin.php">25TL</a></p>
    </div>
  </div>
</div>

<style>
  body {
      background-image: url("dolar.jfif");
      background-size: cover;
      background-repeat: no-repeat;
      }</style>


<style>
      

      .card {
        margin-top: 80px;
        margin-left: 120px;
  width: 300px;
  height: 200px;
  perspective: 1000px;
}

.card-inner {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.999s;
}

.card:hover .card-inner {
  transform: rotateY(180deg);
}

.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.card-front {
  background-color: #6A2C70;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #6A2C70;
  border-radius: 10px;
  justify-content: center;
  font-size: 24px;
  transform: rotateY(0deg);
}

.card-back {
  background-color: #F08A5D;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #F08A5D;
  border-radius: 10px;
  justify-content: center;
  font-size: 24px;
  transform: rotateY(180deg);
}
      </style>


</body>
</html>
<?php
$dolar=20;
$euro=23;
$sterlin=25;




?>
