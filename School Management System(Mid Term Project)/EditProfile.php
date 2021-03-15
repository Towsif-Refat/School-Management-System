<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	
</head>
<body>

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<?php 

                $data = file_get_contents("regdata.json");
                $data = json_decode($data, true);
                foreach($data as $row){}

                ?>

				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?php echo $row["name"];?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<td>Father Name</td>
				<td>:</td>
				<td><input name="fname" type="text" value="<?php echo $row["fname"];?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<td>Mother Name</td>
				<td>:</td>
				<td><input name="mname" type="text" value="<?php echo $row["mname"];?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="<?php echo $row["email"];?>">
				</td>
				<td></td>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input name="file" type="file"></td>
				<td></td>
			</tr>	

			<tr><td colspan="4"><hr/></td></tr>
			<td>Address</td>
				<td>:</td>
				<td><input name="address" type="text" value="<?php echo $row["address"];?>"></td>
				<td></td>
			</tr> 	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" checked="checked"><?php echo $row["gender"];?>
					<input name="gender" type="radio">Female
					<input name="gender" type="radio">Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="dob" type="text" value="<?php echo $row["dd"]."-".$row["mm"]."-".$row["yyyy"];?>">
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">		
	</form>
</fieldset>

</body>
</html>