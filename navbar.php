<?php 
  include("ck.php"); 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="The Adoni Arts and Science College Website" />
<meta name="keywords" content="education,school,college,university,educational,learn,learning,teaching,workshop" />
<meta name="chetan" content="aascwebsite" />

<!-- Page Title -->
<title>AASC</title>
<style>
	
.movingbody{
width: 100%;
background-color: #434343;
padding: 0px 10px;
height: 200px;
border-radius: 3px;
}

.m-par li {
text-align: center;
font-size: 1rem;
font-weight: bold;
color: white;
padding: 10px 10px;
font-family: 'IBM Plex Mono', monospace;
}
.m-par a{
font-family: 'IBM Plex Mono', monospace;
font-weight: bold;
color: white;
}


.movingbody2 {
width: 100%;
background-color: #212331;
padding: 0px 10px;
height: 280px;
border-radius: 3px;
}

.m-par2 li {
text-align: center;
font-size: 1rem;
font-weight: bold;
color: white;
padding: 10px 10px;
font-family: 'IBM Plex Mono', monospace;
}
.m-par2 a{
font-family: 'IBM Plex Mono', monospace;
font-weight: bold;
color: white;
}

</style>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/scroll-event.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.js"></script>
<script src="js/utils.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="has-fixed-footer">
	
<div id="wrapper" class="clearfix">
	<!-- preloader -->
  <div id="preloader">	
    <div id="spinner">
  		 <img src="websiteimages/preloaders/preloader_2.gif" style = "">
  		<p style="background-color: #0049AD; padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 5px; margin-left: 0px; border-radius: 5px; color: white;">Loading...</p>
    </div>
  <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div> 
  </div>


  <!-- Header -->
  <header id="header" class="header header-floating">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-7">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-10 mt-10">

              <?php if ($ck == 1) {
                # code...
               ?>
               
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10" style="cursor: pointer;">
              <p class="m-0 pl-10 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o mr-5 text-white"></i> Hi, <?php echo $fname; ?></a><span class="caret"></span>
                <ul class="dropdown-menu">
                	
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
              </p>  
            </ul>
            
              <?php
				       } else{
              ?>
               
              <li class="m-0 pl-10"> <a href="ajax-load/login.php" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"><a href="student-registration.php" class="text-white"><i class="fa fa-edit mr-5"></i>Register</a></li>
              
              <?php
              }
              ?>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
    
    <div class="header-nav navbar-sticky"> <!-- bg-theme-colored2 -->
    <div class="header-nav-wrapper">
      <div class="container"> <!-- style="padding: 0px" -->        
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand switchable-logo pull-left flip" href="index.php">
              <img class="logo-default" src="websiteimages/logo-white.png" alt="logo">
              <img class="logo-scrolled-to-fixed" src="websiteimages/logo-black.png" alt="logo">
            </a>
            <ul class="menuzord-menu">
            	
              <li><a href="index.php">Home</a></li>

              <li><a href="about.php">About</a></li>
                
              <li><a href="#">Academics</a>
                <ul class="dropdown">
                  <li><a href="courses.php">Courses</a></li>
                  <li><a href="departments.php">Departments</a></li>
                </ul>
			        </li>
              <li><a href="infrastructure.php">Infrastructure</a></li>

              <li><a href="support.php">Support</a></li>

              <li><a href="#">User Account</a>
                <ul class="dropdown">
                  <!--<li><a href="student-corner.php">Student Corner</a></li>-->
                  <?php
                  	if($role=='admin') {
                  		echo '<li><a href="account/admin/dashboard.php">Admin Panel</a></li>';
                      echo '<li><a href="logout.php">Sign Out</a></li>';
                    }

                    else if($role == 'student') {
                      echo '<li><a href="student-corner.php">Student Panel</a></li>';
                      echo '<li><a href="logout.php">Sign Out</a></li>';
                    }

                    else if($role == 'user') {
                      echo '<li><a href="student-registration.php">New Registration</a></li>';
                      echo '<li><a href="ajax-load/login.php" class="ajaxload-popup"> Existing User Login</a></li>';
                    }
                  ?>
                </ul>
              </li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>
</section>