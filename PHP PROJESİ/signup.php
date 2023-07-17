<?php

    require_once "databaseconnection.php";

        if(isset($_POST['username']))
{

            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            

            $passwordlen=strlen($password);
        if($passwordlen<5 || $passwordlen>20){
                echo "şifre en az 5 en fazla 20 karakterden oluşturulmalıdır";
                exit();
        }
        $password_hash=hash("sha256",$password);
       
        mysqli_query($db,"INSERT INTO `users` (`username`,`password`,`email`) VALUES('".$username."','".$password_hash."','".$email."')");
           
    
    if( mysqli_errno($db)!=0){
        echo "bir hata meydana geldi";
        exit();
    }

    echo "kullanıcı oluşturuldu<br>";
    echo "giriş yapmak için tıklayınız<a href='index.php'>giriş yap</a>";
        
}
else
{
?>


<form action="signup.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


      <!-- <form action="index.php" method="POST"> 
         Username : <input type="text" name="username" />    <br /> 
         Password: <input type="text" name="password" /> <br /> 
         <input type="submit" value="KAYDET"/> 
      </form> -->


<?php
}
?>