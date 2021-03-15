<?php

    $pass = $npass = $cnpass = "";
    $epass = $enpass = $ecnpass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["pass"]) && empty($_POST["npass"]) && empty($_POST["cnpass"]))
        {
            $epass = "Plese Enter Your Password";
            $enpass = "Please Enter Your New password";
            $ecnpass = "Please confirm Your New Password";
        }
        else
        {
            $pass = test_input($_POST["pass"]);
            $npass = test_input($_POST["npass"]);
            $cnpass = test_input($_POST["cnpass"]);

            if (strlen($_POST["pass"]) <= 7) 
            {
                $epass = "Your Password Must Contain At Least 8 Characters";
            }
            else if(!preg_match('/[$%@#]/', $pass))
            {
                $epass = "Your Password Must Contain At Least one special character(@,#,$,%)";
            }

            if($pass == $npass)
            {
                $enpass = "Password & New Password cannot be same";
            }
            if($npass != $cnpass)
            {
                $ecnpass = "New password & Retype Password must be same";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

