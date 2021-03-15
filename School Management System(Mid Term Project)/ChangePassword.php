<?php include "controller/HeaderL.php"; ?>
<?php include "controller/ChangePasswordController.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    
</head>
<style >
        .error {color: #FF0000;}
</style>
<body></body>
</html>

<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form method="POST">
        <table>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass" value="<?php echo $pass;?>" >
                <span class="error"><?php echo $epass;?></span><br></td>
            </tr>

            <tr>
                <td><span style="color: green">New Password</span></td>
                <td>:</td>
                <td><input type="password" name="npass" value="<?php echo $npass;?>" >
                <span class="error"><?php echo $enpass;?></span><br>
            </tr>

            <tr>
                <td><span class="error">Retype New Password</span></td>
                <td>:</td>
                <td><input type="password" name="cnpass" value="<?php echo $cnpass;?>" >
                <span class="error"><?php echo $ecnpass;?></span><br>
            </tr>

        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit" >
        
    </form>
</fieldset>
    </form>

</body>
</html>