<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
        include('inc/connection.php');
        session_start();
    ?>

    <style type="text/css">
        .nav-link{
            color: #000;
            font-size: 18px;
        }
        .nav-link:hover{
            color: #e7246d;
        }
        a{
            color: #fff;
        }
        a:hover{
            text-decoration: none;
        }
        .fa-star,.fa-directions,.menu,.shop_name,.buyer_name{
            color: #e7246d;
        }
        .btn-view-more{
            border: 2px solid #e7246d;
            padding: 10px 15px;
            color: #e7246d;
        }
        .btn-view-more:hover{
            background: #e7246d;
            color: #fff;
            transition: all 0.5s;
        }
        .btn-view-more:hover .fa-arrow-right{
            position: relative;
            left: 2px;
            transition: all 0.5s;
        }
        .review_button,.direction_button,.btn_review{
            border: 2px solid #e7246d;
            padding: 5px 20px;
            font-size: 18px;
        }
        .btn_review{
            border: 2px solid #e7246d;
            padding: 5px 5px;
            font-size: 14px;
            background: #e7246d;
            color: #fff;
        }
        .review_button:hover,
        .direction_button:hover{
            background: #e7246d;
            color: #fff;
        }
        .review_button:hover .review_icon{
            color: #fff;
            position: relative;
            left: 10px;
            transition: all 1s;
        } 
        .direction_button:hover .direction_icon{
            color: #fff;
            position: relative;
            left: 10px;
            transition: all 1s;
        }
        .cart_update_button{
            max-width: 200px;
            text-align: center;
        }
        button:focus{
            outline: none;
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
        .nav-link.active{
            background-color: #e7246d!important;
            color: white;
        }
        .form-control:focus{
            border: 1px solid #e7246d;
            box-shadow: none;
            outline: none;
        }
        .str{
            color: black;
        }
        .total_review::after{
            content: '';
            position: absolute;
            display: block;
            width: 24%;
            height: 1px;
            background: #e7246d;
            left: 74%;
            margin-top: 3px;
        }
        .add_to_cart_btn{
            border: 2px solid #e7246d;
            background: #e7246d;
            color: #fff;
            padding: 10px;
        }
        .radios{
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            position: relative;
        }
        .radios input{
            display: none;
        }
        .radios label{
            cursor: pointer;
            margin-right: 10px;
        }
        .radios input:not(:checked) ~ label:hover,
        .radios input:not(:checked) ~ label:hover ~ label{
            transition: all 0.5s;
            color: #e7246d;
        }
        .radios input:checked ~ label{
            transition: all 0.5s;
            color: #e7246d;
        }
        .rating_header::before{
            content: "";
            position: absolute;
            width: 100%;
            right: -1%;
            top: 82%;
            transform: translateX(-1%);
            font-size: 25px;
            margin-top: 5px;
            transition: all 0.5s;
        }
        #rate-1:checked ~ .rating_header::before{
            content: "I just hate it 😠";
        }
        #rate-2:checked ~ .rating_header::before{
            content: "I don't like it 😌";
        }
        #rate-3:checked ~ .rating_header::before{
            content: "I just like it 😎";
        }
        #rate-4:checked ~ .rating_header::before{
            content: "I just love it 😘";
        }
        #rate-5:checked ~ .rating_header::before{
            content: "It is Awesome 😍";
        }
        .btn_review_submit{
            background-color: #e7246d;
            width: 100px;
            font-size: 20px;
        }
        @media screen and (min-width: 0px) and (max-width: 548px){
            .total_review::after{
                width: 38%;
                left: 5%;
            }
        }
        @media screen and (min-width: 548px) and (max-width: 768px){
            .total_review::after{
                width: 25%;
                left: 3%;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 991px){
            .total_review::after{
                width: 40%;
                left: 57%;
            }
        }
        @media screen and (min-width: 991px) and (max-width: 1200px){
            .total_review::after{
                width: 30%;
                left: 68%;
            }
        }

    </style>

</head>

<body>

    <!--===== Pre-Loading area Start =====-->
    <!-- <div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0"></h1>
            </div>
        </div>
    </div> -->
    <!--==== Pre-Loading Area End ====-->

    <!-- Header Area Start Here -->
    <?php  
        include('inc/header.php');
    ?>
    <!-- Header Area End Here -->

    <!--shop details start here-->
    <div class="container">
        <div class="shop_overview">
            <div class="row">
                <?php
                    try{
                        extract($_REQUEST);
                        $sql = "select shopname,shopcity from sellers where id=?";
                        $st = $db->prepare($sql);
                        $st->bindparam(1,$sellerid);
                        $st->execute();
                        $row = $st->fetch();
                ?>
               <div class="shop_name col-12 col-md-6 h2 text-capitalize"><?php echo $row['shopname']; ?></div>
               <div class="col-12 col-md-6 mb-2 md-mb-0 text-md-right">
                    <div class="shop_ratings">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="far fa-star"></i>
                    </div>
                    <div class="total_review">
                        <div style="font-size: 15px;">199 Delivery Reviews</div>
                    </div>
               </div>
               <div class="location col-12 lead text-capitalize"><?php echo $row['shopcity']; ?> Locality</div>
                <?php
                    }//end of try
                catch(PDOException $error){
                LogError($error);
                }
                ?>
               <!-- <div class="timing col-12 lead"><span style="color: #e7246d;">Available</span><p class="lead" style="display: inline">- 12:15 to 5:45(Monday To Friday)</p></div> -->
               <div class="col-12 shop_buttons">
                   <button class="review_button mt-3">Review<span class="fas fa-star ml-1"></span></button>
               </div>
           </div>

            <div class="row mt-4" style="background: #e7246d;">
                <div class="col-12 category_banner p-2 mt-3 h2 text-center text-white">Categories We Sell</div>
            </div>

            <div class="row category_cards">
                <?php
                    try{
                        $sql = "select id,title,photo,islive from category where sellerid=?";
                        $st=$db->prepare($sql);
                        $st->bindparam(1,$sellerid);
                        $st->execute();
                        while($row=$st->fetch()){
                ?>
                <div class="card col-12 col-lg-4 col-md-6 mt-4" style="outline: 2px solid #e7246d;">
                    <img src="admin/images/categories/<?php echo $row['photo']; ?>" class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h4 class="card-tite text-center text-capitalize"><?php echo $row['title']; ?></h4>
                    </div>
                    <div class="card-footer text-center d-flex justify-content-center">
                        <a href="specific_category_product.php?categoryid=<?php echo $row['id'];?>&categoryname=<?php echo $row['title'];?>&sellerid=<?php echo $sellerid; ?>">
                            <button type="button" class="btn-view-more">View More<span class="fas fa-arrow-right ml-1" style="position: relative; top: 2px;"></span></button>
                        </a>
                    </div>
                </div>
                <?php
                    }//end of while
                }//end of try

                catch(PDOException $error){
                    LogError($error);
                }
                ?>
            </div>
        </div>
    </div>
    <!--shop details end here-->

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
    var addcart = document.getElementById('add_to_cart_btn');
    function review(){
        addcart.style.visibility = "hidden";
    }
    function order(){
        addcart.style.visibility = "visible";
    }
</script>
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
        });
</script>
</body>
</html>