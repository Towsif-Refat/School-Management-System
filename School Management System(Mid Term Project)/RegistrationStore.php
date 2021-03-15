<?php  include('header_footer/HeaderM.php');?>
<?php include('controller/RegistrationController.php');?>

<!DOCTYPE html>
 <html>
   <head>
    <style>
        label
      {
        display: inline-block;
        width: 10%; 
      }
     
       .error {color: #FF0000;}
    </style>
    </head>
 <body>

  <form method="post">
    <fieldset>
      <legend><b>REGISTRATION</b></legend>
        <label>Name : </label>
        <input type="text" name="name">
        <span class="error"><?php echo $ename;?></span><hr>

        <label>Father Name :</label>
        <input type="text" name="fname">
        <span class="error"><?php echo $efname;?></span><hr>

        <label>Mother Name :</label>
        <input type="text" name="mname">
        <span class="error"><?php echo $emname;?></span><hr>

        <label>Email : </label>
        <input type="text" name="email">
        <span class="error"><?php echo $eemail;?></span><hr>

        <label>User Name : </label>
        <input type="text" name="uname">
        <span class="error"><?php echo $euname;?></span><hr>

        <label>Password : </label>
        <input type="password" name="pass">
        <span class="error"><?php echo $epass;?></span><hr>

        <label>Confirm Password : </label>
        <input type="password" name="cpass">
        <span class="error"><?php echo $ecpass;?></span><hr>

        <label>Address :</label>
        <input type="text" name="address">
        <span class="error"><?php echo $eaddress;?></span><hr>

      <fieldset>
           <legend>Gender</legend>
           <input type="radio" name="gender" 
           <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
           <input type="radio" name="gender" 
           <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
           <input type="radio" name="gender"
           <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
           <span class="error"><?php echo $egender;?></span>
      </fieldset><hr>

      <fieldset>
          <legend>Date of Birth</legend>
          <input type="text" name="dd" size="4"> /
          <input type="text" name="mm" size="4"> /
          <input type="text" name="yyyy" size="6">
           (dd / mm/ yyyy)
           <span class="error"><?php echo $edob;?></span>
      </fieldset><hr><br><br>
       <input type="submit" name="submit" value="Submit">
       <input type="reset" name="reset" value="Reset">
    </fieldset><br><br>
    <?php   
      if(isset($error))  
        {  
          echo $error;  
        }  
    ?> 
    <?php   
      if(isset($message))  
        {  
          echo $message;  
        }  
    ?> 
  </form>
<!-- <?php  include('header_footer/FooterL.php');?> -->
 </body>
 </html>