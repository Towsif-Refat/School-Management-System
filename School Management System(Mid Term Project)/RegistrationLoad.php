<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>
<!DOCTYPE html>  
 <html>  
      <head>
       
        
        <title>All Registration Info</title>  
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    -->
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
           <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    -->
      </head>  
      <body>  
        <div class="container" style="width:900px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th>
                               <th>Father Name</th>
                               <th>Mother Name</th>
                               <th>Email</th>
                               <th>User Name</th>
                               <th>Password</th>
                               <th>Confirm Password</th>
                               <th>Address</th>
                               <th>Gender</th>  
                               <th>Date Of Birth</th>
                          </tr>  
                          <?php   
                          $data = file_get_contents("regdata.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["fname"].'</td>
                               <td>'.$row["mname"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["uname"].'</td>
                               <td>'.$row["pass"].'</td>
                               <td>'.$row["cpass"].'</td>
                               <td>'.$row["address"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dd"]."-".$row["mm"]."-".$row["yyyy"].'</td>
                               </tr>';  
                          }  
                          ?>
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  