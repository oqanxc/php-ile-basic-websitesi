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



<button>
  <div>
    <span>
      <p><a href="logout.php">Çıkış Yap</a></p>
    </span>
  </div>
  <div>
    <span>
      <p><a href="logout.php">İyi Günler</a></p>
    </span>
  </div>
</button>
<button>
  <div>
    <span>
      <p><a href="">iletişim</a></p>
    </span>
  </div>
  <div>
    <span>
      <p><a href="">İletişim</a></p>
    </span>
  </div>
</button>

<button>
  <div>
    <span>
      <p><a href="cüzdan.php">Cüzdanım</a></p>
    </span>
  </div>
  <div>
    <span>
      <p><a href="cüzdan.php">Cüzdanım</a></p>
    </span>
  </div>
</button>


<button>
  <div>
    <span>
      <p><a href="hesabisil.php">hesabı sil</a></p>
    </span>
  </div>
  <div>
    <span>
      <p><a href="hesabisil.php">::(</a></p>
    </span>
  </div>
</button>


<style>
      body {
      background-image: url("dolar.jfif");
      background-size: cover;
      background-repeat: no-repeat;
      }
      </style>
<style>
button {
  margin-left: 1495px;
 outline: 0;
 border: 0;
 display: flex;
 flex-direction: column;
 width: 100%;
 max-width: 140px;
 height: 50px;
 border-radius: 0.5em;
 box-shadow: 0 0.625em 1em 0 rgba(30, 143, 255, 0.35);
 overflow: hidden;
}

button div {
 transform: translateY(0px);
 width: 100%;
}

button,
button div {
 transition: 0.6s cubic-bezier(.16,1,.3,1);
}

button div span {
 display: flex;
 align-items: center;
 justify-content: space-between;
 height: 50px;
 padding: 0.75em 1.125em;
}

button div:nth-child(1) {
 background-color: #1450ff;
}

button div:nth-child(2) {
 background-color: #21dc62;
}

button:hover {
 box-shadow: 0 0.625em 1em 0 rgba(33, 220, 98, 0.35);
}

button:hover div {
 transform: translateY(-50px);
}

button p {
 font-size: 17px;
 font-weight: bold;
 color: #ffffff;
}

button:active {
 transform: scale(0.95);
}</style>


</body>





</html>

