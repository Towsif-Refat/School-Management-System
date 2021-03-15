<?php

$name=$fname=$mname=$email=$uname=$address=$pass=$cpass=$dd=$mm=$yyyy=$gender="";
$ename=$efname=$emname=$eemail=$euname=$eaddress=$epass=$ecpass=$edob=$egender= "";
$error=$message = "";
$errorFlag=0;

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty($_POST["name"]))  
      {  
          $ename = "Please Enter your Name";
          $errorFlag=1;
      }
    
       else {
       $name = $_POST["name"];
       $count = str_word_count("$name");
      if ((!preg_match("/^[a-zA-Z-' ]*$/",$name)) || $count < 2 ){
        $ename = "Only letters and white space allowed and contains at least two words";
        $errorFlag=1;
       } 
       }

      if(empty($_POST["fname"]))  
      {  
          $efname = "Please Enter your Father Name";
          $errorFlag=1;
      }
     
       else {
       $fname = $_POST["fname"];
       $count = str_word_count("$fname");
        if ((!preg_match("/^[a-zA-Z-' ]*$/",$fname)) || $count < 2 ){
        $efname = "Only letters and white space allowed and contains at least two words";
        $errorFlag=1;
       } 
       }
      if(empty($_POST["mname"]))  
      {  
          $emname = "Please Enter your Mother Name";
          $errorFlag=1;
      }
      
          else {
       $mname = $_POST["mname"];
       $count = str_word_count("$mname");
      if ((!preg_match("/^[a-zA-Z-' ]*$/",$mname)) || $count < 2 ){
        $emname = "Only letters and white space allowed and contains at least two words";
        $errorFlag=1;
       } 
       }
      if(empty($_POST["email"]))
      {
          $eemail = "Please Enter your Email Address ";
          $errorFlag=1;
      }
      else if(!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL))
      {
          $eemail = "Invalid email format";
          $errorFlag=1;
      }

      if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"]))
      {
          $edob = "  Please Fill up all the fields";
          $errorFlag=1;
      }
      else if(!filter_var(($_POST["dd"]),FILTER_VALIDATE_INT,array('options' => array('min_range' => 1, 'max_range' => 31)))|
              !filter_var(($_POST["mm"]),FILTER_VALIDATE_INT,array('options' => array('min_range' => 1,'max_range' => 12)))|
              !filter_var(($_POST["yyyy"]),FILTER_VALIDATE_INT,array('options' => array('min_range' => 1900, 'max_range' => 2010))))
      {
          $edob = " Must be valid Numbers(dd:1-31,mm: 1-12,yyyy: 1900-2010)";
          $errorFlag=1;
      }


      if(!isset($_POST["gender"]))
      {
          $egender = "At least one of the Gender must be selected";
          $errorFlag=1;
      }

       if(empty($_POST["address"]))
      {
          $eaddress = "Please Enter your Address";
          $errorFlag=1;
      }
      else if(preg_match("/^[0-9]/", ($_POST["address"])))
      {
        
         $eaddress = "Please type Letters ";
         $errorFlag=1;
      }
   

      if(empty($_POST["uname"]))
      {
          $euname = "Username is requied";
          $errorFlag=1;
      }
        else if(!preg_match("/^[a-zA-Z0-9-. ?!]{3,10}$/",($_POST["uname"])))
        
      {
          $euname = "At least 3 characters and max 10. Can only contain Alphanumaric character,period,dash";
          $errorFlag=1;
      }

      

       if(empty($_POST["cpass"]))
      {
          $ecpass = "Confirm Password can't be empty";
          $errorFlag=1;
        
      }
      
      if(empty($_POST["pass"]))
      {
          $epass = "Password can't be empty";
          $errorFlag=1;
        
      }

      else if ((strlen($_POST["pass"]) < 8) || (!preg_match('/[$%@#]/', ($_POST["pass"]))))
      {
          $epass = "Must Contain At Least 8 Characters & 1 special Character($,%,@,#)";
          $errorFlag=1;
      }

      else if(($_POST["pass"]) != ($_POST["cpass"]))
      {
          $ecpass = "Password and Confirm password must be same";
          $errorFlag=1;
      }
      if($errorFlag==0)
      {
        if(file_exists('regdata.json'))
        {  
          $current_data = file_get_contents('regdata.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'name'            =>     $_POST['name'],
            'fname'           =>     $_POST['fname'],
            'mname'           =>     $_POST['mname'],
            'email'           =>     $_POST['email'],
            'uname'           =>     $_POST['uname'],
            'pass'            =>     $_POST['pass'],
            'cpass'           =>     $_POST['cpass'],
            'address'         =>     $_POST["address"],
            'gender'          =>     $_POST["gender"],
            'dd'              =>     $_POST["dd"],
            'mm'              =>     $_POST["mm"],
            'yyyy'            =>     $_POST["yyyy"]);

          $array_data[] = $extra;
          $final_data = json_encode($array_data);

          if(file_put_contents('regdata.json', $final_data))
          {  
            $message = "<label class='text-success'>Successfully Sign UP</p>";
          }
        }
        else  
        {  
          $error = 'JSON File not exits';
        }
      }
    }
?>
