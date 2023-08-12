<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php  
        session_start();
        include('inc/link.php');
        include('inc/connection.php');
    ?>

    <style type="text/css">
        a{
            color: white;
        }
        a:hover{
            text-decoration: none;
        }
        .shop_banner,.category_banner,.whyus{
            background: #e7246d;
            color: #fff;
        }
        .card{
            cursor: pointer;
           
        }
        .card:hover{
            box-shadow:0 1rem 3rem rgba(231, 36, 109,0.2)!important;
            border: 1px solid #999;
            transition: all 0.1s;
        }
        .card-deck a{
            color: black;
        }
        .card-deck a:hover{
            color: #e7246d;
        }
        .btn_load{
            border: 2px solid #e7246d;
            padding: 5px 25px;
            font-size: 20px;
            background: #e7246d;
            color: #fff;
            transition: all 0.3s ease;
        }
        .btn_load:hover{
            box-shadow: 2px 2px 20px #e7246d;
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

    <!--home page starts here-->
    <section id="boxs">
    <div class="container mt-5">
        <?php
            if(isset($_SESSION['buyercity'])==true){
        ?>
        <div class="row">
            <div class="shop_banner p-3 col-12 text-center h2 text-capitalize">Shops in <?php echo $_SESSION['buyercity'] ?></div>
        </div>
        <?php
        }//end of if
            else{
        ?>
                <div class="row">
                    <div class="shop_banner p-3 col-12 text-center h2">Shops Available</div>
                </div>
        <?php
            }
        ?>
        <div class="row">
            <div class="card-deck col-12">
                <?php 
                extract($_POST);
                    try{
                        $sql = "select s.id,s.shopcity,s.shopname,s.shoplogo from sellers s,users u where s.shopcity=u.city";
                        $st = $db->prepare($sql);
                        $st->execute();
                        while ($row = $st->fetch()) {
                ?>
                <a href="shop_details.php?sellerid=<?php echo $row['id']; ?>" class="col-lg-4 box mt-2">
                    <div class="card">
                        <img src="images/business_logo/<?php echo $row['shoplogo']; ?>" class="card-img-top" alt="..." style="height: 250px!important;">
                        <div class="card-body">
                            <div class="shop_name h3"><?php echo $row['shopname'];?></div>
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
                <?php
                    }//end of while
                }//end of try

                catch(PDOException $error){
                    $result = FAIL;
                    LogError($error);
                }
                ?>
            </div>
        </div>
    </div>
    </section>

    <div class="col-12 mt-3 text-center">
        <button class="btn_load" id="showmore">Load more</button>
    </div>

    <section id="categories">

        <div class="container">
            <div class="row">
                <div class="col-12 category_banner p-3 mt-3 h2 text-center">Categories We Sell</div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="card-deck">
                    <a class="card col-lg-4 col-md-6 col-12" href="specific_category_shop.php">
                        <img class="card-img-top" src="cake.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center h3">Cakes</p>
                        </div>
                    </a>

                    <a class="card col-lg-4 col-md-6 col-12" href="specific_category_shop.php">
                        <img class="card-img-top" src="cake.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center h3">Cakes</p>
                        </div>
                    </a>

                    <a class="card col-lg-4 col-md-6 col-12" href="specific_category_shop.php">
                        <img class="card-img-top" src="cake.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center h3">Cakes</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="whyus">
        <div class="container">
            <div class="row">
                <div class="whyus col-12 p-3 mt-4 h2 text-center">Why Homades</div>
            </div>

            <div class="row mt-3">
                <div class="card-deck">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card" style="border: none;">
                            <img class="card-img-top" src="homade.png" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text text-center h4">Genuine Products</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card" style="border: none;">
                            <img class="card-img-top" src="delivery.png" style="height: 330px;" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text text-center h4">Doorstep Availability</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card" style="border: none;">
                            <img class="card-img-top" src="bestprice.png" style="height: 330px;" alt="card image cap">
                            <div class="card-body">
                                <p class="card-text text-center h4">Reasonable Price</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home page ends here-->

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

<script type="text/javascript">
    $(".box").slice(0,3).show();
    $(".btn_load").on("click", function(){
        $(".box:hidden").slice(0,3).slideDown();
    });
</script>

<script type="text/javascript">
    
</script>
</body>

</html>