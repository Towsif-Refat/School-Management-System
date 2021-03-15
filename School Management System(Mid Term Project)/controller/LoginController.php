<?php 

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")

                          
{
	
   $data = file_get_contents("../regdata.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                                
                           if ($_POST['uname']==$row["uname"] && $_POST['pass']==$row["pass"])
								{
								 $_SESSION['uname'] = $row["uname"];
								 $_SESSION['name'] = $row["name"] ;
								 echo "<script>location.href='../Dashboard.php'</script>";
								}
									                          
						   }  

						   $_SESSION['FlashMessage']="User Name or Password is Incorrect";

		echo "<script>alert(Username or Password incorrect!)</script>";
		echo "<script>location.href='../Login.php'</script>";
	
}
?>