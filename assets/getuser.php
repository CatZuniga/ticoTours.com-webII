<?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "db_ticorides");  
      $query =  "SELECT * FROM `profiles` INNER JOIN `users` ON profiles.id_user =users.id WHERE profiles.id_user = '".$_POST["id"]."'"; 
      
      $result = mysqli_query($connect, $query);  

      while($row = mysqli_fetch_array($result))  
      {  
           $output = '  
        
         <div class="modal-body container-fluid ">
         <div class="row ">
         <div class="col-xs-4 col-sm-offset-2 ">
         <h1 class="">Profile: '.$row["username"].'</h1>	

         <img class="img-circle img-responsive" src="http://localhost/ticorides/assets/upload/'.$row["photo"].'">
       </div>
      
       <div class="col-xs-6 ">
                  <div class="form-group">
                  <label>
                    <i class="material-icons">assignment_ind</i> Fullname: </label>
                    <label id="fullname"> '.$row["fullname"].'  </label>
                    </div>       
                  
                      <div class="form-group">
                   <label> <i class="material-icons">slow_motion_video</i>Speed Average: </label>
                   <label id="speed"> '.$row["speed"].' </label> 
                    </div>
                        
                        
                    <div class="form-group">
                   <label><i class="material-icons">phone</i> Phone: </label>
                    <label id="phone">  '.$row["phone"].' </label>
                    </div>
                   
                    <div class="form-group">
                   <label for="me">  <i class="material-icons">message</i> About me: </label>
                    <label id="about"> '.$row["about"].'  </label>
                  </div>
                  </div>
                  </div>
                ';  
      }  
      $output .= "</div>";  
      echo $output;  
 }  
 ?>
