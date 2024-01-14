<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:loginform.php');
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>AR ART EXPERIENCE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="index.html"><img src="images/webname.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="trynow.html">Try now</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About us </a>
                     </li>
                  
                     <li class="nav-item">
                        <img src= "logouser.png" width="40px" height="10px"></img>
                     </li>
                 
                  </ul>
                  <!--<form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        <ul>
                           <li><a href="#"><img src="images/search-icon.png"></a></li>
                           <li><a href="#"><img src="images/user-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>-->
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">AR <br> ART <br> EXPERIENCE</h1>
                           <p class="banner_text">AR art can provide a unique and exciting way to explore and interact with art, bringing new dimensions of creativity and engagement to traditional art forms.  </p>
                           <!--<div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>-->
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/arts3.jpg" width="300" height="300"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">AUGMENTED<br> REALITY </h1>
                           <p class="banner_text">When you place the camera in front of image you will experience a video playing on your image in a real time environment.</p>
                           <!--<div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>-->
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/image2 .jpg" width="300" height="300"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">WHAT <br> YOU <br>NEED</h1>
                           <p class="banner_text">You will a need photo of the image so , You can experience the Augmented Reality of the images</p>
                           <!--<div class="btn_main">
                              <div class="contact_bt"><a href="#">Contact US</a></div>
                           </div>-->
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/arts.png" width="300" height="300"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </a>-->
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i style="font-style: initial;">prev</i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i style="font-style: initial;">next</i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_2"><img src="images/trynow.jpeg"></div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="about_taital">TRY NOW</h1>
                     <p class="about_text"> You need to place this image in front of your camera to experience a video to play on an targetd images <br> you can try it now</p>
                     <div class="trynow_bt"><a href="newfiles/index.html">Try Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="footer_location_text">
               <ul>
                  <!--<li><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Loram Ipusm hosting web</a></span></li>-->
                  <li><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call : +9136355456</a></span></li>
                  <li><img src="images/mail-icon.png"><span class="padding_left_10"><a href="#">kalā@gmail.com</a></span></li>
               </ul>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="trynow.html">Try Now</a></li>
                        
                        <li><a href="aboutus.html">About us</a></li>
                     </ul>
                  </div>
               </div>
               
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Social Media</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn active" href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
               </div>
               <div class ="col-lg-3 col-sm-6">
                  <h2 class="useful_text">About us</h2>
                  <p>Welcome to our AR website! We are a team of passionate creators who are dedicated </p> 
                  <div class="footer_menu">
                     <!--<ul>
                        <li><a href="">About us</a></li>
                     </ul>-->
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6" >
                  <h2 class="useful_text"></h2>
                  <p>to bringing immersive experiences to life through Augmented Reality (AR) technology.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2026 All Rights Reserved. Design by </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>