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
        .card-deck a{
            color: #000;
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

    <div class="container mt-5">
        <div class="row">
            <div class="card-deck col-12 mt-4">
                <a href="shop_details.php" class="col-lg-4 box">
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
                                <span class="ml-1">(no) Delivery Reviews</span>
                            </div>
                        </div>
                    </div>
                </a>
                 <a href="shop_details.php" class="col-lg-4 box">
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
                                <span class="ml-1">(no) Delivery Reviews</span>
                            </div>
                        </div>
                    </div>
                </a>

                 <a href="shop_details.php" class="col-lg-4 box">
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
                                <span class="ml-1">(no) Delivery Reviews</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

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
</html>