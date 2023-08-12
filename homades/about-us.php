<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
        include('inc/connection.php');
        session_start();
    ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
        footer a{
          color: #fff;
        }
        a:hover{
          text-decoration: none;
        }
        .left_content .heading_1,.right_content .heading_1{
            color: #e7246d;
            margin-top: 170px;
            font-family: 'Kiwi Maru', serif;
        }
        .shop{
            color: #e7246d;
            border: 2px solid #e7246d;
            font-size: 23px;
            font-weight: 500;
            padding:5px;
        }
        .shop:hover,
        .shop:focus{
            background: #e7246d;
            border: 2px solid #e7246d;
            color: #fff!important;
        }
        .shop:focus{
          outline: none;
        }
        .about_middle{
            background: #f8f8f8;
        }
        .about_container{
            max-width: 900px;
        }
        .heading div{
            font-family: 'Kiwi Maru', serif;
            color: #e7246d;
        }
        .sub_heading div{
           font-size: 70px;
           font-family: 'Kiwi Maru', serif;
        }
        .team_heading{
            font-family: 'Kiwi Maru', serif;
            color: #e7246d;
            font-size: 70px;
        }
        .bottom_content{
           background: #f8f8f8; 
        }
        .bottom_left .h1{
            font-family: 'Kiwi Maru', serif;
        }
        .subscribe{
            display: flex;
        }
        .subscribe .btn1{
            color: #e7246d;
            border: 2px solid #e7246d;
            padding: 0px 25px;
        }
        .subscribe .btn1:hover{
            background: #e7246d;
            color: #fff;
        }
        .subscribe .btn1:active{
            border: 2px solid #e7246d;
            outline: 2px solid #e7246d;
        }
        @media screen and (min-width: 0px) and (max-width: 575px){
          .left_content .heading_1,.right_content .heading_1{
            margin-top: 10px!important;
          }
          .right_content{
            display: flex;
            flex-wrap: wrap-reverse;
          }
        }
    </style>
</head>

<body>

    <!--===== Pre-Loading area Start =====-->
    <div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0">.</h1>
            </div>
        </div>
    </div>
    <!--==== Pre-Loading Area End ====-->

    <!-- Header Area Start Here -->
    <?php  
        include('inc/header.php');
    ?>
    <!-- Header Area End Here -->

    <!--about-us section starts-->
   <div class="container">
       <div class="row">
            <div class="left_content col-12 col-sm-6 col-md-6">
                <h3 class="heading_1">HoMades Items for the</h3>
                <h2 class="heading_2">abc</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#"><button class="shop">Shop Collection</button></a>
            </div>
            <div class="single-banner hover-style col-12 col-sm-6 col-md-6 mt-4 mt-sm-0">
                <div class="banner-img">
                    <a href="#">
                        <img src="cake.jpg" width="400px" height="450px">
                        <div class="overlay-1"></div>
                    </a>
                </div>
            </div>
       </div>

       <div class="row mt-5 right_content_row" style="flex-wrap: wrap-reverse;">
            <div class="single-banner hover-style col-12 col-sm-6 col-md-6">
                <div class="banner-img">
                    <a href="#">
                        <img src="cake.jpg" width="400px" height="450px">
                        <div class="overlay-1"></div>
                    </a>
                </div>
            </div>
            <div class="right_content col-12 col-sm-6 col-md-6">
                <h3 class="heading_1">HoMades Items for the</h3>
                <h2 class="heading_2">DECORATION & GIFTS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a href="#"><button class="shop mt-4">Shop Collection</button></a>
            </div>
       </div>
   </div>

    <div class="container-fluid about_middle mt-5">
     <div class="container about_container">
       <div class="row text-center">
           <div class="heading col-12 mt-5">
               <div class="h3">A little story about us</div>
           </div>
           <div class="sub_heading col-12 mt-4">
               <div class="h1">Our History</div>
           </div>
           <div class="sub_heading1 col-12 mt-5">
               <div class="h4">Captain America: Civil War Christopher Markus and Stephen McFeely see the Hulk as the game over moment.</div>
           </div>
           <div class="content col-12 mt-5">
               <p class="lead">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus. Phasellus eu rhoncus dolor, vitae scelerisque sapien</p>
           </div>
       </div>
       </div>
   </div>

   <div class="container mt-5">
    <div class="row">
        <div class="team_heading col-12 text-center mb-3">
            <div class="h2">People behind the curtains</div>
        </div>
    </div>
    <div class="row ml-5 mt-3">
            <div class="member_1 col-12 col-lg-7">
                <img src="cake.jpg" height="450px" width="400px">
            </div>
            <div class="member_2 col-12 col-lg-5 mt-4 mt-sm-0">
                <img src="cake.jpg" height="450px" width="400px">
            </div>    
        </div>
    </div>

   <div class="container bottom_content mt-5">
       <div class="row">
            <div class="bottom_left col-12 col-sm-6">
               <div class="h1">Send Newsletter</div>
               <div class="lead mt-4">Enter Your Email Address For Our Mailing List To Keep Your Self Update</div>
            </div>
            <div class="bottom_right col-12 col-sm-6 mt-5">
               <div class="form-group subscribe">
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   <button type="submit" class="btn1 ml-2">Subscribe</button>
               </div>
            </div>
       </div>
   </div>
   <!--about-us section ends-->
    <!--Footer Area Start-->
    <?php
        include('inc/footer.php');
    ?>
    <!--Footer Area End-->

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS-->

<?php
    include('inc/script.php')
?>


</body>


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>