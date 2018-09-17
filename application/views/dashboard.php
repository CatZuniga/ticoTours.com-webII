<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>

    <title>TicoRides</title>
    <link rel="shortcut icon" href="<?php echo asset_url(); ?>images/logo.png" type="image/png">
    

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">

   
    <meta charset="UTF-8"> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/modals.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/view.css">
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

<div class="col-xs-1  col-sm-2 col-md-2 vertical">
    <div class="hidden-xs col-sm-offset-1 col-sm-1  col-md-1 col-lg-offset-6 col-lg-3 profile">
        <div class="user">
            <label>Welcome </label>
            <a class="username" id="btnProfile">  <?php echo $user_data->username;?> </a>

            <img class="hidden-md  hidden-sm img-circle" src="<?php echo upload_url().$photo ?>">

        </div>
    </div>
</div>

<div class=" container">

    <div class="row">

        <div class=" col-xs-offset-0 col-xs-12 col-sm-offset-3 col-sm-6  col-md-offset-4 col-md-6  col-lg-offset-4 col-lg-6">

            <nav class="slidemenu">

            <li class="selected" id="btnDashboard"><i class="material-icons">streetview</i><a href="<?php echo site_url('ride')?>">Dashboard</a></li>
            <li class="slide-item" id="btnRides"> <i class="material-icons">directions_car</i><a href="<?php echo site_url('ride/createRide')?>">  Rides</a></li>
            <li class="slide-item" id="btnSettings"><i class="material-icons">settings</i><a href="<?php echo site_url('ride/profileSettings')?>"> Settings</a></li>
            </nav>


        </div>


        <div class="col-xs-offset-1 col-xs-10  col-md-offset-4 col-md-5  col-lg-offset-4  col-lg-5" id="line"> </div>


    </div>
    <!-- row -->

</div>
<!-- conteiner -->

<div class="title container-fluid">
 <div class="col-xs-offset-2 col-sm-offset-3">
  <h1>My Rides </h1>
<h3>My current list of rides </h3>
  </div>
  </div>
<div class="myrides container-fluid">

    <div class="col-xs-offset-2 col-sm-offset-3">


    <h3>Results </h3> 
    <form class="" action="<?php echo site_url('ride/del_Upd')?>" method="post"> 
    <table class="table table-responsive table-bordered table-hover">

<thead>
<tr>
<th>User</th>
<th>Start</th>
<th>End</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
include('utils.php');
createTableUser($rides);

?>

</tbody>

    </table>
</form>
<div class="  col-xs-offset-7  col-xs-1   col-sm-offset-10  col-sm-1  ">  
<a  type="button" class="btn " id="btnAdd"  href="<?php echo site_url('ride/createRide')?>"> <span class="glyphicon glyphicon-plus"></span> ADD </a>

</div>
    </div>
</div>

</div>
</div>
<!-- conteiner -->





</body></html>