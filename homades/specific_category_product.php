<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        session_start();
        include('inc/link.php');
        include('inc/connection.php');
        extract($_REQUEST);
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
        .cart_update_button{
            max-width: 200px;
        }
        .update_number{
            width: 40px;
           border: none;
        }
        .update_icons{
            cursor: pointer;
            padding: 5px 5px;
        }
        .update_icons:hover{
            background: #e7246d;
            color: #fff;
            transition: all 0.2s;
            border-radius: 25px;
        }
        button:focus{
            outline: none!important;
        }
        .btn-view-more,.add_to_cart{
            border: 2px solid #e7246d;
            padding: 10px 15px;
            color: #e7246d;
        }
        .btn-view-more:hover,.add_to_cart:hover{
            background: #e7246d;
            color: #fff;
            transition: all 0.5s;
        }
        .btn-view-more:hover .fa-arrow-right,.add_to_cart:hover .fa-shopping-cart{
            position: relative;
            left: 4px;
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

    <div class="container mt-5">
        <div class="row mt-4" style="background: #e7246d;">
                <div class="col-12 category_banner p-2 mt-3 h2 text-center text-capitalize text-white"><?php echo $categoryname; ?> We Sell</div>
            </div>
        <div class="row">
            <div class="card-deck col-12 mt-4">
                <?php
                    $sql = "select name,price,photo from product where categoryid=? and sellerid=?";
                    $st = $db->prepare($sql);
                    $st->bindparam(1,$categoryid);
                    $st->bindparam(2,$sellerid);
                    $st->execute();
                    while($row=$st->fetch()){
                ?>
                    <div class="col-lg-4 box">
                            <div class="card">
                                <img src="images/products/<?php echo $row['photo']; ?>" class="card-img-top" width="" alt="...">
                                <div class="card-body">
                                    <div class="product_name text-center text-capitalize h5" style="color: #e7246d;"><?php echo $row['name']; ?></div>
                                    <div class="product_price text-center h5" style="color: #e7246d;"><?php echo $row['price']; ?>₹</div>
                                    <div class="cart_update_button mt-3" style="position: relative;left: 30%;">
                                        <button type="btn" class="minus"><span class="fas fa-minus update_icons"></span></button>
                                        <input type="number" value="0" name="quantity" id="txtupdate" class="update_number text-center" style="color: #e7246d">
                                        <button type="btn" class="plus"><span class="fas fa-plus update_icons"></span></button>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="specific_category_product.php">
                                        <button type="button" class="btn btn-view-more">View More<span class="fas fa-arrow-right ml-1" style="position: relative; top: 2px;"></span></button>
                                    </a>
                                    <!-- <input type="hidden" name=""><?php $quantity; ?> -->
                                <form method="post" action="submit/add_to_cart.php">
                                    <button type="submit" class="btn add_to_cart text-center">Add To Cart<span class="fas fa-shopping-cart"></span></button>
                                </form>
                                </div>
                            </div>
                        </div>
                <?php
                }//end of while
                ?>
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
<script type="text/javascript">
    $(document).ready(function(){
            $('.update_number').prop('disabled', true);
            $(document).on('click','.plus',function(){
                $('.update_number').val(parseInt($('.update_number').val()) + 1 );
            });
            $(document).on('click','.minus',function(){
                $('.update_number').val(parseInt($('.update_number').val()) - 1 );
                    if ($('.update_number').val() == -1) {
                        $('.update_number').val(0);
                    }
                });
            var quantity = $('.update_number').val(parseInt);
        });
</script>

</body>
</html>