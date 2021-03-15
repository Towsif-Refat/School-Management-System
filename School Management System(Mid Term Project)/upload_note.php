<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>


<!DOCTYPE html>
<html>
<head>
  <style>
      label
      {
        display: inline-block;
        width: 20%;
        padding: 1%; 
      }
  </style>
  <title>Upload Notes</title>
   
</head>
<body>
  <?php
  if(isset($_SESSION['message']))
  echo $_SESSION['message'];
 unset($_SESSION['message']);

  ?>

  <form action="controller/uploadN.php" method="POST" enctype="multipart/form-data" >

 
<fieldset>
<legend><b>UPLOAD NOTE</b></legend>
 
	 <table width="100%" cellpadding="0" cellspacing="0">	

    <label for="class" >Class<span class="error"> </label>
  <select name="class" id="class" required>
    <option value="">Please Select</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>

   <br>
      <hr>


    <label for="subject" >Subject<span class="error"> </label>

       <select name="subject" id="subject" required>
    <option value="">Please Select</option>
    <option value="Math">Math</option>
    <option value="English">English</option>
    <option value="Bangla">Bangla</option>
    <option value="Physics">Physics</option>
    

  </select>
  <br><hr>

    <label>File :</label>
    <input type="file" name="myfile"  required><br/>
     <br><hr>
				
	<input type="submit" value="Upload">		
	
</fieldset>
</form>

	</body>
</html>