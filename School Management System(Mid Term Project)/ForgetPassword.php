<?php include "controller/ForgetPasswordController.php"; ?>
<?php  include('header_footer/HeaderM.php');?>


<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  
</head>
<style >
		.error
		{
			color: red;
		}
	</style>
<body>


<form method="post" action="">

<fieldset >
    <legend><b>FORGOT PASSWORD</b></legend>
    <form action="" method="post">
        <table>
            <tr>
                <td>Enter Email</td>
				<td>:</td>
                <td><input type="text" name="email" value="<?php echo $email;?>" >
                <span class="error">  <?php echo $eemail;?> </span><br></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" name="submit">
		
    </form>
</fieldset>
</form>

  <?php  include('header_footer/FooterL.php');?>
</body>
</html>