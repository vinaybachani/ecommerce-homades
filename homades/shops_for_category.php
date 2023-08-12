<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>

    <style type="text/css">
        a{
            color: white;
        }
        a:hover{
            text-decoration: none;
        }
        .restaurant_location{
            padding: 5px 5px;
            background: #e7246d;
        }
        .fa-star{
            color: #e7246d!important;
        }
        .card:hover{
            cursor: pointer;
            box-shadow: 2px 2px 15px #000;
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
    
    <!--shops for cateory page starts here-->
    <div class="container">
        <div class="row">
            <div class="restaurant_location col-12 h2 text-center">
                Delivery Shops in city_name
            </div>
            <div class="card-deck col-12 mt-4">
                <div class="card">
                    <img src="cake.jpg" class="card-img-top" width="" alt="...">
                    <div class="card-body">
                        <div class="shop_name h3">Shop_name</div>
                        <div class="shop_rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2">(no) Delivery Reviews</span>
                        </div>
                    </div>
                </div>

                 <div class="card">
                    <img src="cake.jpg" class="card-img-top" width="" alt="...">
                    <div class="card-body">
                        <div class="shop_name h3">Shop_name</div>
                        <div class="shop_rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2">(no) Delivery Reviews</span>
                        </div>
                    </div>
                </div>

                 <div class="card">
                    <img src="cake.jpg" class="card-img-top" width="" alt="...">
                    <div class="card-body">
                        <div class="shop_name h3">Shop_name</div>
                        <div class="shop_rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2">(no) Delivery Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shops for cateory page starts here-->

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