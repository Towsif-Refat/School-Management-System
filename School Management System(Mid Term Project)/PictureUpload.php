<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
    
</head>
<body>

        
    </form>
    <form action="controller/upload.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>PROFILE PICTURE</b></legend>
            <img src="image/profile.jpg" alt="profile picture" style="width:180px;height:220px;"><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><hr>
            <input type="submit" value="Submit" name="submit">
        </fieldset>
      
    </form>

</fieldset>

</body>
</html>