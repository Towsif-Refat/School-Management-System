<?php  include('header_footer/HeaderM.php');?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
     <style>
        label
      {
        display: inline-block;
        width: 10%;
        padding: .5%; 
      }
    
       .error {color: #FF0000;}
    </style>
  
</head>
<body>
  <?php 


session_start();
if(isset($_SESSION['FlashMessage'])){
   echo  $_SESSION['FlashMessage']="User Name or Password is Incorrect";
    session_destroy();

}
?>

  <form method="post" action="controller/LoginController.php">
    <fieldset>
      <legend><b>LOGIN</b></legend>
      <label>User Name: </label>
      <input type="text" name="uname" value="" required>
        <br>
        <label>Password:</label>
       <input type="password" name="pass" value="" required>
        <hr>
        <input type="checkbox" name="remember" value="">Remember Me<br><br>
        <input type="submit" name="submit" value="Submit">
        <a href="ForgetPassword.php">Forgot Password?</a>
    </fieldset>
  </form>
 <?php  include('header_footer/FooterL.php');?>
</body>
</html>
