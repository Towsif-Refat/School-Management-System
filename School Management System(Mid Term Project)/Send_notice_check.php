<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>
<!DOCTYPE html>  
 <html>  
      <head>  
        <title>View Notice Subject</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:900px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Class</th>
                               <th>Subject</th>
                               <th>Notice Subject</th>
                               <th>Message</th>
                              
                          </tr>  
                          <?php   
                          $data = file_get_contents("noticedata.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["class"].'</td>
                               <td>'.$row["subject"].'</td>
                               <td>'.$row["nsubject"].'</td>
                               <td>'.$row["nmessage"].'</td> 
                               </tr>';  
                          }  
                          ?>
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  