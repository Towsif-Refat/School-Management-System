<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>
<?php include('controller/SendNoticeController.php');?>

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
  <title>Send Notice</title>
   
</head>
<body>
<form method="post" action="">
  <fieldset style="width: 900px;margin-left: 0%">

  <legend><b>Send Notice</b></legend>

<label for="class" >Class<span class="error"> </label>

  <select name="class" id="class" required>
    <option value="">Please Select</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select><br><hr>


    <label for="subject" >Subject<span class="error"> </label>

    <select name="subject" id="subject" required>
     <option value="">Please Select</option>
     <option value="Math">Math</option>
     <option value="English">English</option>
     <option value="Bangla">Bangla</option>
     <option value="Physics">Physics</option>
    </select><br><hr>

  <label for="nsubject" >Notice Subject<span class="error"></label>
  <input type="text" name="nsubject" value="<?php echo $nsubject;?>">
  <span class="error"><?php echo $ensubject;?></span><br><hr>

  <label for="nmessage" >Message<span class="error"> </label>
  <textarea name="nmessage"></textarea>
  <span class="error"><?php echo $enmessage;?></span><br><hr>


  <input type="submit" name="submit" value="Submit" ><span class="error">
  <?php echo $error;?>

  <input type="reset" name="reset" value="Reset" ><span class="error">
  <?php echo $message;?>

</form>
</fieldset>
</form>

</body>
</html>