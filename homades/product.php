<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>

    <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap');
        a{
            color: white;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        .fa-star{
            color: #e7246d;
        }
        .change{
            border: 1px solid black;
            padding: 10px 10px;
            cursor: pointer;

        }
        .change:hover{
            background: #e7246d;
            color: #fff;
            transition: all 0.5s;
        }
        .change:hover{
            color: #fff;
            transition: all 0.8s;
        }
        .number{
            width: 100px;
            padding: 5px 10px;
        }
        .cart_update{
            display: flex;
        }
        .cart_btn{
            position: relative;
            top: 1px;
            border: 2px solid #e7246d;
            padding: 6px 25px;
            color: #e7246d;
        }
        .cart_btn:hover{
            background: #e7246d;
            color: #fff;
        }
        .feature{
            color: #e7246d;
            font-family: 'Kiwi Maru', serif;
        }
        .card:hover{
            box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .feature_products_link{
            color: black;
        }
        .feature_products_link:hover{
            color: #e7246d;
        }
        .cart_btn:hover .fa-arrow-left{
            position: relative;
            right: 5px;
            transition: all 0.5s;
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
    
    <!--product description start here-->
        <div class="container">
            <div class="row">
                <div class="product_img col-5">
                    <div><img src="cake.jpg" width="600px" height="400px"></div>
                    <div class="small_img" style="display: flex;">
                        <div class="mt-4"><img src="cake.jpg" width="100px" height="100px" style="outline: 1px solid black;"></div>
                        <div class="mt-4 ml-2"><img src="cake.jpg" width="100px" height="100px" style="outline: 1px solid black;"></div>
                        <div class="mt-4 ml-2"><img src="cake.jpg" width="100px" height="100px" style="outline: 1px solid black;"></div>
                        <div class="mt-4 ml-2"><img src="cake.jpg" width="100px" height="100px" style="outline: 1px solid black;"></div>
                    </div>
                </div>
                <div class="product_description text-left col-7">
                    <div class="product_name h3">Product Name</div>
                    <div class="product_price h4">80$</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="detail lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="add_to_cart mt-3 ml-2">
                        <a href="shop_details.php" class="mb-2 cart_btn"><i class="fas fa-arrow-left mr-2"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    <!--product description end here-->

    <!-- feature products start here-->
    <!--<div class="container-fluid mt-5" style="background: #f8f8f8;">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h2 feature text-center mb-4">People also Purchased</div>
            </div>
        </div>
        <div class="featured_products">
            <div class="row">
                    <div class="card col-12 col-lg-3">
                        <div class="card-body"><img src="cake.jpg" width="450px" height="300px"></div>
                        <div class="card-footer text-center">
                            <a href="#" class="feature_products_link">Hycanith white stick</a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product_price h4">80$</div>
                        </div>
                    </div>

                    <div class="card col-12 col-lg-3 ml-2">
                        <div class="card-body"><img src="cake.jpg" width="450px" height="300px"></div>
                        <div class="card-footer text-center">
                            <a href="#" class="feature_products_link">Hycanith white stick</a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product_price h4">80$</div>
                        </div>
                    </div>

                    <div class="card col-12 col-lg-3">
                        <div class="card-body"><img src="cake.jpg" width="450px" height="300px"></div>
                        <div class="card-footer text-center">
                            <a href="#" class="feature_products_link">Hycanith white stick</a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product_price h4">80$</div>
                        </div>
                    </div>

                     <div class="card col-12 col-lg-3">
                        <div class="card-body"><img src="cake.jpg" width="450px" height="300px"></div>
                        <div class="card-footer text-center">
                            <a href="#" class="feature_products_link">Hycanith white stick</a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product_price h4">80$</div>
                        </div>
                    </div>  
            </div>
        </div>
        </div>
    </div>-->
    <!-- feature products end here-->
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