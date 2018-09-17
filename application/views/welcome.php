<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">


    <link rel = "stylesheet" type = "text/css"  href = "<?php echo asset_url(); ?>css/welcome.css"> 

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

    <title> TicoRides</title>
    <link rel="shortcut icon" href="<?php echo asset_url(); ?>images/logo.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <nav class="navbar nav-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php echo site_url('main')?>"><span class="  glyphicon glyphicon-home"></span> See Rides</a> </li>
                    
                        <li><a href="<?php echo site_url('usuario/login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <div id="topWrap" class="jumbotron">
        <div class="container">

            <div class="col-md-8 jumboText">


                <h1 class="logo" href="main.html">TicoRides.com</h1>
                <h2> The best way to get around</h2>

                <a id="btnSearchRide" <a href="<?php echo site_url('main')?>"> Search a ride</a>
                <a id="btnLogin" <a href="<?php echo site_url('usuario/login')?>">Login</a>

            </div>


        </div>
    </div>

    <div id="featureWrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-4  text-center feature">
                    <center>
                        <img src="assets/images/índice.png" class="img-circle">
                        <br>
                        <h4 class="footertext">Reduce traffic</h4>
                        <p class="footertext hidden-xs">Share private transport system</p><br>
                    </center>
                </div>
                <div class="col-sm-4 text-center feature">
                    <img src="assets/images/pig.jfif" class="img-circle">
                    <br>
                    <h4 class="footertext">Cut travel cost</h4>
                    <p class="footertext  hidden-xs"> Share the cost and avoid parking problems</p><br>
                </div>
                <div class="col-sm-4 text-center feature">
                    <img src="assets/images/images.png" class="img-circle">
                    <br>
                    <h4 class="footertext">Help the environment</h4>
                    <p class="footertext  hidden-xs">CO2 emissions are reduced, helping to improve the environment</p><br>
                </div>
            </div>
        </div>
    </div>
    <!-- /featureWrap -->

    <div id="productWrap" class="altWrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="sectionTitle">TicoRides Social Ridesharing and Carpooling</h2>
                    <h3 class="sectionTitle">Whether you're a driver looking to share commuting costs or a passenger who needs to get somewhere, TicoRides will make your life easier.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="imgWrap">
                       
                        <img class="img-responsive" src="<?php echo asset_url(); ?>/images/people.jpg" />
                           <br> <br>
                            <img class="img-responsive" src="<?php echo asset_url(); ?>/images/people2.jpg" />
                                
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="productFeatures clearfix">
                        <div class="col-xs-2 icon">
                            <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-money fa-stack-1x fa-inverse"></i>
							</span>
                        </div>
                        <div class="col-xs-10">
                            <h3>Payment options</h3>
                            <p>Our payment options are negotiated directly between drivers and passengers, which gives you the flexibility to split a fuel tank, have covered parking fees or find a barter system that suits both..</p>
                        </div>
                        <div class="col-xs-2 icon">
                            <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
							</span>
                        </div>
                        <div class="col-xs-10">
                            <h3>Use Once Or Every Day</h3>
                            <p>
                                Whether you need to organise an alternative while your car is at the mechanics or are looking for a regular way to reduce travel and transport costs (and times), Hitch A Ride will get you where you need to go.
                            </p>
                        </div>
                        <div class="col-xs-2 icon">
                            <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-car fa-stack-1x fa-inverse"></i>
							</span>
                        </div>
                        <div class="col-xs-10">
                            <h3>Reach Hard To Get To Places Affordably
                            </h3>
                            <p>
                                Not everyone can get public transport to work - whether the suburb is hard to get to or your schedule just clashes with the bus or train timetable, often driving is the only option. Hitch A Ride can help you find someone who’s also headed in that direction at that time to take the cost and hassle out of your regular commute</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /productWrap -->


    <div id="testimonialsWrap" class="altWrap">
        <div class="container">
            <div class="row">
                <div class="text-center col-xs-12">
                   <i class="fa fa-comments-o" aria-hidden="true"></i>
                    <h2 class="sectionTitle"> What people say</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="quote">“I love that I can log on and instantly start communicating with the people I know are headed in the same direction as me to organise a ride.” </div>
                                <div class="author">Martin Soto</div>
                            </li>
                            <li>
                                <div class="quote">“I don’t like the idea of getting in a car with a stranger, so it’s great that TicoRides lets you communicate with the other person before accepting the lift. It gives me peace of mind” </div>
                                <div class="author">Jennifer Rojas</div>
                            </li>
                            <li>
                                <div class="quote">“My work hours make it really hard to get public transport and I can’t afford a taxi every day. Using Hitch a Ride I was able to link up with someone who works at the warehouse next door and get a lift to and from work for about a third of what I used to have to pay” </div>
                                <div class="author">William Lopez</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonialsWrap -->



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Copyright &copy; 2017 -Catalina Zúñiga -</p>
                    <p class="social">
                        <a href="https://www.facebook.com/">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span>
						</a>
                        <a href="https://twitter.com/">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
                        <a href="https://plus.google.com/">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span>
						</a>
                        <a href="http://www.youtube.com/">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span>
						</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url(); ?>js/flexslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.mobileSlider').flexslider({
                animation: "slide",
                slideshowSpeed: 3000,
                controlNav: false,
                directionNav: true,
                prevText: "&#171;",
                nextText: "&#187;"
            });
            $('.flexslider').flexslider({
                animation: "slide",
                directionNav: false
            });

            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if ($(window).width() < 768) {
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
                            }, 1000);
                            return false;
                        }
                    } else {
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
                            }, 1000);
                            return false;
                        }
                    }

                }
            });

            $('#toTop').click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 1000);
            });

            var timer;
            $(window).bind('scroll', function() {
                clearTimeout(timer);
                timer = setTimeout(refresh, 50);
            });
            var refresh = function() {
                if ($(window).scrollTop() > 100) {
                    $(".tagline").fadeTo("slow", 0);
                } else {
                    $(".tagline").fadeTo("slow", 1);
                }
            };

        });
    </script>
</body>

</html>
