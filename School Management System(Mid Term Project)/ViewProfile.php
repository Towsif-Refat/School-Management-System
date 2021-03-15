<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>  
</head>
<body>

<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				
                <?php 

                $data = file_get_contents("regdata.json");
                $data = json_decode($data, true);
                foreach($data as $row){}

                ?>

				<td>Name</td>
				<td>:</td>
				<td><?php echo $row["name"];?></td>

				<td rowspan="7" align="">
					<img width="140" height="185" src="image/profile.jpg"/><br/>
					<input type="submit" name="submit" value="Change" style="width: 60px">
					<input name="image" type="file">
                    <br/>
				</td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Father Name</td>
				<td>:</td>
				<td><?php echo $row["fname"];?></td>
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Mother Name</td>
				<td>:</td>
				<td><?php echo $row["mname"];?></td>
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $row["email"];?></td>
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $row["gender"];?></td>
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?php echo $row["address"];?></td>
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php echo $row["dd"]."-".$row["mm"]."-".$row["yyyy"];?></td>
			</tr>
		</table>	
       
	</form>
</fieldset>

</body>
</html>