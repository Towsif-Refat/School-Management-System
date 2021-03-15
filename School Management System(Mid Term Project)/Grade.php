<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>
<?php include('controller/GradeController.php');?>

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
    
    .error
    {
      color: RED;
    }
  </style>
  <title>Upload Marks</title>
   
</head>
<body>


<form method="post" action="">
 
  <fieldset style="width: 900px;margin-left: 0%">

    <legend><b>GRADE</b></legend>

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
  <br>
      <hr>
   

    <label for="sid" >Student ID<span class="error"> </label>
    <input type="text" name="sid" value="<?php echo $sid;?>">
    <span class="error"><?php echo $esid;?></span><br><hr>

    <label for="marks" >Marks<span class="error"> </label>
    <input type="number" name="marks" value="<?php echo $marks;?>">
    <span class="error"><?php echo $emarks;?></span><br><hr>

    <input type="submit" name="submit" value="Submit" ><span class="error">
    <?php echo $error;?>

    <input type="reset" name="reset" value="Reset" ><span class="error">
    <?php echo $message;?>

  </form>
</fieldset>
</form>

</body>
</html>