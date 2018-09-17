<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>


    <title>TicoRides-Rides</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/modals.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/view.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/rides.css">

</head>

<body>

 
<header>
<?php 
$user_data= ($this->session->userdata()['user']);
if($profile != null){
$photo = $profile->photo;

}
else{
    $photo = "default-user-image.png";
}
?>
<nav class="navbar navbar-default">
<div class="container-fluid">
   <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="welcome.html">TicoRides.com <img class="" src="<?php echo asset_url(); ?>images/logo.png" ></a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
     
           <li class="active"><a id="page"><span class="glyphicon glyphicon-triangle-right"></span> My Rides</a></li>
           <li><a id="home"> <span class="  glyphicon glyphicon-home"></span> Home</a></li>
           <li><a id="navUser"><span class="glyphicon glyphicon-user"></span> <?php echo $user_data->username ?> </a></li>
           <li><a id="logOut"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
       </ul>

   </div>
</div>
</nav>

</header>



    <div class="container-fluid wrap">
        <div class="row">


            <div class="col-xs-1  col-sm-2   col-md-2 vertical">
                <div class="hidden-xs col-sm-offset-6 col-sm-1  col-md-1 col-lg-offset-6 col-lg-3 profile">
                    <div class="user">
                        <label>Welcome</label>
                        <a class="username" id="btnProfile">  <?php echo $user_data->username ?></a>
                        <img class="hidden-md  hidden-sm img-circle" src="<?php echo upload_url().$photo ?>">

                    </div>
                </div>
            </div>


            <div class=" col-xs-offset-0 col-xs-12 col-sm-offset-3 col-sm-6  col-md-offset-4 col-md-6  col-lg-offset-4 col-lg-6">

                <nav class="slidemenu">

                <li class="slide-item" id="btnDashboard"><i class="material-icons">streetview</i><a href="<?php echo site_url('ride')?>">Dashboard</a></li>
                <li class="selected" id="btnRides"> <i class="material-icons">directions_car</i><a href="<?php echo site_url('ride/createRide')?>">  Rides</a></li>
                <li class="slide-item" id="btnSettings"><i class="material-icons">settings</i><a href="<?php echo site_url('ride/profileSettings')?>"> Settings</a></li>

                </nav>


            </div>


            <div class="col-xs-offset-1 col-xs-10  col-sm-offset-3 col-sm-6   col-md-5  col-lg-offset-4  col-lg-5" id="line"> </div>


        </div>
        <!-- row -->

    </div>


    <div class="container-fluid ">

        <div class="row">

        <div class="title container-fluid">
        <div class="col-xs-offset-2 col-sm-offset-3">
         <h1>My Rides </h1>
       <h3>Create a new ride </h3>
         </div>
         </div>
            </div>

            <div class="myrides container-fluid">


                <div class="col-xs-offset-2 col-sm-offset-3">


                    <div class=" col-md-6  col-md-offset-0  col-lg-offset-0  col-lg-4">
                 
                    <form  action= "<?php echo site_url('ride/save');?>"  method="post" role="form" style="display: block;">
                        <div class="form-group">
                            <div class="input-group">

                                <label><i class="material-icons">person_pin</i> 
  Ride name</label>

                                <input name="name" id="ride" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="input-group">

                                <label> <i class="material-icons">location_on</i>
  Start from</label>

                                <input name="start" id="start" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="input-group">

                                <label> <i class="material-icons">location_on</i>
  End</label>

                                <input name="end" id="end" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="input-group">

                                <label>  <span class="glyphicon glyphicon-pencil"></span> 
Description </label>

                                <textarea  name="description" id="description" class="form-control" placeholder="Description about the ride"></textarea>
                            </div>

                        </div>

                    </div>

                </div>


                <div class=" col-xs-offset-2 col-sm-offset-3 col-md-3 col-md-offset-0  col-lg-offset-2 col-lg-4">

                    <span>
  When: </span>

                    <div class="form-group">
                        <div class="input-group">

                            <label><i class="material-icons">access_alarm</i>
  Departure</label>

                            <input  name="departure" id="departure" type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="input-group">

                            <label> <i class="material-icons">access_alarm</i>
  Estimated arrival</label>

                            <input name="arrival"  id="arrival" type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>

                    </div>


                    <div class="form-group">
                        <div class="input-group">


                            <label>  <i class="material-icons">check</i>
Select days</label>


                            <div class="weekDays-selector">
                                <input type="checkbox" id="weekday-mon" name="check_day[]" value="mon" class="weekday" />
                                <label for="weekday-mon">M</label>
                              
                                <input type="checkbox" id="weekday-tue" name="check_day[]" value="tue" class="weekday" />
                                <label for="weekday-tue">T</label>
                               
                                <input type="checkbox" id="weekday-wed" name="check_day[]" value="wed" class="weekday" />
                                <label for="weekday-wed">W</label>
                               
                                <input type="checkbox" id="weekday-thu" name="check_day[]" value="thu" class="weekday" />
                                <label for="weekday-thu">T</label>
                               
                                <input type="checkbox" id="weekday-fri" name="check_day[]" value="fri" class="weekday" />
                                <label for="weekday-fri">F</label>
                               
                                <input type="checkbox" id="weekday-sat" name="check_day[]" value="sat" class="weekday" />
                                <label for="weekday-sat">S</label>
                                
                                <input type="checkbox" id="weekday-sun" name="check_day[]" value="sun" class="weekday" />
                                <label for="weekday-sun">S</label>
                            </div>



                        </div>

                    </div>

                </div>

                

                <div class="col-xs-offset-1 col-xs-10  col-md-offset-4 col-md-5  col-lg-offset-3  col-lg-8" id="line"> </div>

              
                <div class="  col-xs-offset-1  col-xs-1   col-sm-offset-3  col-sm-1 col-lg-offset-4  col-lg-2 ">
                <input type="submit" name="submit"  tabindex="4" class="form-control btn " value="Save">
               
                </div>
                <div class="  col-xs-offset-4 col-xs-1   col-sm-offset-3  col-sm-1 col-lg-offset-2  col-lg-2">
              <a  type="button" class="btn " id=""  href="<?php echo site_url('ride/createRide')?>"> <span class="glyphicon glyphicon-plus"></span> Cancel </a>
                </div>
</form>
            </div>


        </div>
        <!-- ws -->

    </div>

   
   


    <!--  <script src="js/script2.js " type="text/javascript"> </script>
 <script src="js/script3.js " type="text/javascript"> </script> -->

    <script src="js/rides.js " type="text/javascript">
    </script>
    <script src="js/functions.js " type="text/javascript">
    </script>
 


    
</body>

</html>
