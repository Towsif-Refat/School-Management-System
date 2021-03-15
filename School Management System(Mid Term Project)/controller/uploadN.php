<?php
    $target_dir = "../files/";
    $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["myfile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "txt" ) {
        echo "Sorry, only txt files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
            echo "The file ".$target_dir. basename( $_FILES["myfile"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

  if(file_exists('../uploadnote.json'))
        {  
          $current_data = file_get_contents('../uploadnote.json');  
          $array_data = json_decode($current_data, true);  
          $extra = array(  
            'class'            =>     $_POST['class'],
            'subject'          =>     $_POST['subject'],
            'myfile'           =>     $_FILES["myfile"]["name"]);
        

          $array_data[] = $extra;
          $final_data = json_encode($array_data);

          if(file_put_contents('../uploadnote.json', $final_data))
          {  
             $message = "<label class='text-success'> </p>";
             session_start();
               $_SESSION['message']="Successfully Saved";
             echo "<script>location.href='../upload_note.php'</script>";
          }
        }

    ?>

  