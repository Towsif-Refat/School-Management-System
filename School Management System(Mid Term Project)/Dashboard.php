<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Logged In Dashboard</title>
	
</head>
<body>


<?php 

//session_start();

if (isset($_SESSION['uname'])) 
{

	echo "<h1> Welcome ".$_SESSION['name']."</h1>";
}

?>

</body>
</html>