<?php

$class = $subject = $nsubject = $message = "";
$eclass = $esubject = $ensubject = $enmessage = "";
$error = $message = "";
$errorFlag=0;

if($_SERVER["REQUEST_METHOD"] == "POST")
  {  
      if(empty($_POST["nsubject"]))  
      {  
           $ensubject = "Enter notice subject"; 
           $errorFlag=1; 
      }
      /* else if(preg_match("/^[0-9]/", ($_POST["nsubject"])))
      {
        $ername = "Please type Letters Only";
         $errorFlag=1;
      }
      */
      if(empty($_POST["nmessage"]))  
      {  
           $enmessage = "Please write the message body";  
           $errorFlag=1;
      } 
      if($errorFlag==0)
      { 
        if(file_exists('noticedata.json'))
        {  
          $current_data = file_get_contents('noticedata.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'class'            =>     $_POST['class'],
            'subject'          =>     $_POST['subject'],
            'nsubject'         =>     $_POST['nsubject'],
            'nmessage'         =>     $_POST['nmessage']);

          $array_data[] = $extra;
          $final_data = json_encode($array_data);

          if(file_put_contents('noticedata.json', $final_data))
          {  
            $message = "<label class='text-success'> Send Successfully</p>";
          }
        }
        else  
        {  
          $error = 'JSON File not exits';
        }
      }
    }
?>

