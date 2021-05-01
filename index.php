<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

include 'connection.php';

$ck=0;
$role = 'user';

if(isset($_SESSION["uname"]))
{
	$uname = $_SESSION["uname"];
	$pass = $_SESSION["pass"];

	$get = mysqli_query($conn,"SELECT * FROM approvedusers WHERE emailid ='$uname' and pass='$pass'");
	if($row = mysqli_fetch_array($get))
	{
		$ck=1;
		// $fname=$row['FirstName']; to show data on different pages we use this 
		$uid = $row['uid'];
		$role=$row['role'];
		$emailid = $row['emailid'];
		
	}
	$get2 = mysqli_query($conn,"SELECT * FROM approvedusers WHERE uid='$uid'");
	while($row2 = mysqli_fetch_array($get2))	
	{
		$fname=$row2['name'];
	}
}
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
              <!--<img class="logo-default" src="images/favicon.png">
              <img class="logo-scrolled-to-fixed" src="images/favicon.png">
              <span style="color: white"> AASC </span> -->
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







<!-- Start main-content -->
<div class="main-content">
<!-- Section: home -->

<section id="home"> <!--  style="margin-bottom:2px;margin-top:2px" -->
      <div class="container-fluid p-0">
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <?php  
              $i=0;
              $sel=mysqli_query($conn,"select * from slider order by ID");
                while($arr=mysqli_fetch_array($sel))
                {
                 $id=$arr['ID'];
                 $SliderImage=$arr['SliderImage'];
                 $ShortDesc="The Adoni Arts & Science College";
                 $MainDesc="Affiliated to Rayalaseema University, Kurnool";
                       
              ?>
              <!-- SLIDE 1 -->
              <li data-index="<?php $i+1; ?>" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">

                <!-- MAIN IMAGE -->
                <img src="account/configure-site/sliderimages/<?php echo $SliderImage; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-5"
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:3000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['50','40','34','28']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width= "['1100','1100','1100','1100']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="y:[-500%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:3000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight: 700;"><?php echo $ShortDesc; ?>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0 text-white font-roboto-slab font-weight-500" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['24','24',26',24']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out= "y:[-500%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:3000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><?php echo "NAAC 'B' GRADE <br> <br> Affiliated to Rayalaseema University <br> <br> Adoni - 518 302";?>
                </div>
                <!-- LAYER NR. 4 -->
                <!-- <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none"   
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Know More</a>                  
                </div> -->
              </li>
              <?php } ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.1);"></div>
          </div>
        </div>
        

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  },
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:false,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
</section>
<!-- Divider: Clients -->
<section>
    <div class="container pt-50 pb-0">
    <div class="section-title text-center">
    <div class="row">
    <div class="col-md-12">
    <h3 class="text-uppercase font-weight-600 mt-0"> Features <span class="text-theme-colored2"> of the College</span></h3>
    <div class="double-line-bottom-centered-theme-colored-2"></div>
    <section class="clients">
      <div class=" pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
            
            <?php  
              $i=0;
              $sel=mysqli_query($conn,"select * from featuresimages order by ID");
                while($arr=mysqli_fetch_array($sel))
                {
                 $id=$arr['ID'];
                 $featuresimage=$arr['featuresimage'];
                 $orderid=$arr['OrderID'];
                 
             ?>
              <div class="item"> <a href=""><img src="account/configure-site/featuresimages/<?php echo $featuresimage; ?>" alt=""></a></div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    </div>
    </div>
    </div>
</section>

    
    <!-- Section About -->
    <section>
      <div class="container pt-20 pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase font-weight-600 mt-0">About <span class="text-theme-colored2"> College</span></h3>
              <div class="double-line-bottom-centered-theme-colored-2 text-center"></div>
              <p class="font-16 mt-20" style="text-align: justify;">The Adoni Arts and Science College is not only the second oldest college in Kurnool District, it is the sweet dream of a drought prone, backward region, where people have known only privation but no privilege. It is not built by any Nawaab or Maha Rajah, but by the common people, by the dint of their hard work.</p>
              <p class="font-16 mt-20" style="text-align: justify;">The sweat of their brow underwent a glorious transformation into academic ambrosia. A Service Organization like the Rotary Club has joined hands with them and sponsored the college. All the more remarkable is the fact that all this happened forty five years ago. It has no parallel anywhere else...</p>
			        <a href="about.php" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-10">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Top News -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-title">
          <div class="row">
            <div class="col-md-5">
             <?php include("upcoming-event.php") ?>
            </div>
            <div class="col-md-7">
             <?php include("latest-news.php") ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase font-weight-600 mt-0">Popular <span class="text-theme-colored2">Courses</span></h3>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase">Choose Your Desired Course</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
            <?php

            $get2 = mysqli_query($conn,"SELECT * FROM coursetype");
            while($row2 = mysqli_fetch_array($get2))
            {

              $id=$row2['id'];
              $price=$row2['price'];
              $course=$row2['course'];
              $c_durt = $row2['cdurt'];
              $c_desc = $row2['cdesc'];

              ?>                           
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                	<!--src="images/course/sm1.jpg"-->
                  <img class="img-fullwidth" alt="">
                  <!-- <div class="price-tag">₹1,000</div> -->
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="courses.php"><h3 class="mt-0 mb-5"><?php echo $course; ?></h3></a>
                    <!-- <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul> -->
                  </div>
                  <div class="course-top-part pull-right"><a href="#" class="btn btn-theme-colored2 btn-dark btn-circled"><font size="4"><?php echo $price; ?></font></a></div>
                  <!-- <div class="author-thumb">
                   	 <img src="images/course/xs1.jpg" alt="" class="img-circle">
                 	  </div> -->
                  <div class="clearfix"></div>
                  <p class="course-description mt-20"><?php echo $c_desc; ?></p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6><span class="course-time"><?php echo $c_durt;?></span></h6>
                      <span> Course Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
             <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Enquiry Form -->
    <section data-bg-img="images/pattern/p4.png"> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase font-weight-600 mt-0"><span class="text-theme-colored2">Enquiry</span> Form</h3>
              <div class="double-line-bottom-centered-theme-colored-2"></div>  
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-12">
            
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="contact-form-transparent" action="enquiry-process.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <?php
                        include 'connection.php';
                        $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM enquiry");
                        $row3 = mysqli_fetch_row($result);
                        $highest_id = $row3[0];
                      ?>
                  	
                      <input type="hidden" id="uid" name="uid" class="form-control" readonly="true" value="<?php echo $highest_id; ?>" required>
                        
                      <label>Name<small>*</small></label>
                      <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email<small>*</small></label>
                      <input name="email" id="email" class="form-control" type="email" placeholder="Enter Email" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="course">Select Course<small>*</small></label>
                      <select id="c_query" name="c_query" class="form-control" required>
                          <option disabled selected value="">Select Your Course</option>
                          <?php
                          $get2 = mysqli_query($conn,"SELECT * FROM coursetype");
                          while($row2 = mysqli_fetch_array($get2))
                          {
              
                            $id=$row2['id'];
                            $course_type=$row2['price'];
                            $course_nm=$row2['course'];
                            $c_durt = $row2['cdurt'];
                            $c_desc = $row2['cdesc'];
              
                          ?>
                          <option value="<?php echo $course_nm; ?>"> <?php echo $course_nm; ?> </option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone<small>*</small></label>
                      <div class="input-group">
                        <div class="input-group-addon">+91</div>
                          <input name="phone" id="phone" class="form-control" type="number" placeholder="Enter Phone Number" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Message<small>*</small></label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Enter Message" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <button type="submit" name="btn" id="btn" class="btn btn-dark btn-theme-colored2 btn-flat btn-block" value="submit">Send Your Message</button>
                    </div>
                    <div class="form-group col-sm-6">
                      <button type="reset" name="btn" id="btn" class="btn btn-flat btn-default bg-hover-theme-colored btn-flat btn-block" value="reset">Cancel</button>
                    </div>
                  </div>
              </form>
              
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                
              </script>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--start Funfacts Section-->
    <?php include("counter.php") ?>

    <!-- Section: Team -->
    <?php include("tutor.php") ?>

	 
    <!-- Section: blog -->
    <section id="blog" class="bg-silver-deep">
      <div class="container pb-0">
        <div class="section-title text-center">
            <div class="col-md-12">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <h3 class="text-uppercase font-weight-600 mt-0">Contact <span class="text-theme-colored2">Us </span></h3> 
                  <div class="double-line-bottom-centered-theme-colored-2"></div>  
                </div>
                <?php
                $i=0;
                $query = mysqli_query($conn,"select * from address");
                while($row = mysqli_fetch_array($query))
                {
                  $adrs = $row['adrs'];
                  $cont = $row['cont'];
                  $email = $row['email'];
				
                  ?>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15 pl-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Address</h5>
                      <p><?php echo $adrs; ?></p>
                    </div>
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Phone</h5>
                      <p><?php echo $cont; ?></p>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Email Address</h5>
                      <p> <?php echo $email; ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Divider: Map -->
    <section>
      <!-- Google Map HTML Codes -->
      <div >
		<iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=TheAdoniArtsandaScienceCollege&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe>
	  </div>
    </section>

<!-- end main-content -->
</div>


<!-- Footer -->
<?php include("footer.php") ?>
<!-- end wrapper -->

<script src="js/custom.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/enquiry.js"></script>
</body>
</html>

