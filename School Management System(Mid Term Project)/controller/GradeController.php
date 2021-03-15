<?php

$class = $subject = $sid = $marks = "";
$eclass = $esubject = $esid = $emarks = "";
$error = $message = "";
$errorFlag=0;

if($_SERVER["REQUEST_METHOD"] == "POST")
  {  
    /*  if(empty($_POST["class"]))  
      {  
           $eclass = "Enter Class";  
           $errorFlag=1;
      } 
      if(empty($_POST["subject"]))  
      {  
           $esubject = "Enter Subject"; 
           $errorFlag=1; 
      }  
     else if(preg_match("/^[0-9]/", ($_POST["subject"])))
      {
        $esubject = "Please Type Valid Subject ";
         $errorFlag=1;
      }*/
      if(empty($_POST["sid"]))  
      {  
           $esid = "Enter ID";  
           $errorFlag=1;
      }
         else if(!preg_match("/^[0-9]/", ($_POST["sid"])))
      {
        
         $esid = "Id must be Number";
         $errorFlag=1;
      }
   
      
      if(empty($_POST["marks"]))  
      {  
           $emarks = "Enter Marks";  
           $errorFlag=1;
      }  
      if($errorFlag==0)
      {
        if(file_exists('gradedata.json'))
        {  
          $current_data = file_get_contents('gradedata.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'class'            =>     $_POST['class'],
            'subject'          =>     $_POST['subject'],
            'sid'              =>     $_POST['sid'],
            'marks'            =>     $_POST['marks']);

          $array_data[] = $extra;
          $final_data = json_encode($array_data);

          if(file_put_contents('gradedata.json', $final_data))
          {  
            $message = "<label class='text-success'> Successfully added</p>";
          }
        }
        else  
        {  
          $error = 'JSON File not exits';
        }
      }
    }
?>