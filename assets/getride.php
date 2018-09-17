<?php  
 if(isset($_POST["id_ride"]))  
 {  

      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "db_ticorides");  
      $query =  "  SELECT r.*,   rd.day,
       rd.id AS id_rday FROM rides AS r  
       INNER JOIN ride_days AS rd ON r.id = rd.id_ride  WHERE r.id ='".$_POST["id_ride"]."' LIMIT 1; ";
     
     $days = "SELECT * FROM ride_days WHERE id_ride = '".$_POST["id_ride"]."'";
      
      //"SELECT * FROM `rides` INNER JOIN `users` ON profiles.id_user =users.id WHERE profiles.id_user = '".$_POST["id_ride"]."'"; 
      
      $result = mysqli_query($connect, $query);  

      while($row = mysqli_fetch_array($result))  
      {  
           $output ='  
        
           <div class="row">
              
               <div class="well col-sm-6">
<h5 > Details </h5>
                   <div class="form-group">
                       <div class="input-group">
                           <label> <i class="material-icons">directions_car</i>
                         Ride name: </label>
                           <label id="ride" class="info"> '.$row["name"].' </label>
                       </div>

                   </div>

                   <div class="form-group">
                       <div class="input-group">
                           <label> <i class="material-icons">location_on</i>
                 Start from: </label>
                           <label id="start" class="info">'.$row["start"].'</label>
                       </div>
                   </div>
                   
                   <div class="form-group">
                       <div class="input-group">
                           <label> <i class="material-icons">location_on</i>
                End: </label>
                           <label id="end" class="info">'.$row["end"].'</label>
                       </div>
                   </div>



                   <div class="form-group">
                       <div class="input-group">
                           <label>  <span class="glyphicon glyphicon-pencil"></span> 
               Description: </label>
                           <label id="description" class="info">'.$row["description"].'</label>
                       </div>
                   </div>

               </div>

               <div class="well col-sm-5  ">
                <h5 > When: </h5>
                 <div class="form-group">
<div class="input-group">

<label><i class="material-icons">access_alarm</i>
Departure: </label>

<label id="departure"  class="info"> '.$row["departure"].'</label>
</div>

</div>

<div class="form-group">
<div class="input-group">

<label>  <i class="material-icons">access_alarm</i>
Estimated arrival: </label>

<label id="arraival" class="info">'.$row["arrival"].'</label>
</div>

</div>  

       <div class="form-group">
               <div class="input-group">


                   <label>  <i class="material-icons">check</i>
Days</label>
<br>
';


$res = mysqli_query($connect, $days);  

      while($row = mysqli_fetch_array($res))  
      {
              
 $output .=  ' <label id="day" style"display:inline-block;" class="info">'.$row["day"].'</label>'; 
} 
$output .=  '      </div>

           </div>


               </div>

               </div>
           <!--row -->
  
                ';  
      

    }

      $output .=  '  </div>';  
      
      echo $output;  
 }  
 ?>
