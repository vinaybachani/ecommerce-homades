<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        session_start();
        include('inc/link.php');
        include 'inc/connection.php';
    ?>

    <style type="text/css">
        a{
            color: white;
        }
        a:hover{
            text-decoration: none; 
        }
        .category_banner,.info_banner{
            background: #e7246d;
        }
        .logo{
            object-fit: cover;
            box-sizing: border-box;
            height: 500px;
            width: 500px;
        }
        .logo_img{
            height: 100%;
            width: 100%;
            border-radius: 350px;
        }
        .view_button,.add_category,.delete_button{
            background: #fff;
            color: #e7246d;
            outline: 2px solid #e7246d;
            width: 120px;
            height: 40px;
        }
        .add_category{
            width: 200px;
        }
        .view_button:hover,
        .view_button:focus,
        .delete_button:hover,
        .delete_button:focus,
        .add_category:hover,
        .add_category:focus{
            background: #e7246d;
            color: white;
        }
        .view_button:hover span{
            position: relative;
            left: 3px;
            transition: all 0.5s;
        }
        .view_button:focus,
        .delete_button:focus{
            outline: none;
        }
        .update_info{
           background: #fff;
            color: #e7246d;
            outline: 2px solid #e7246d;
            width: 220px;
            height: 50px;
            font-size: 22px; 
        }
        .update_info:hover,
        .update_info:focus{
            background: #e7246d;
            color: white;
            outline: none;
        }
        .form-control:focus{
            box-shadow: none;
            border: 2px solid #e7246d;
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
        include('inc/seller_header.php');
    ?>
    <!-- Header Area End Here -->
    <?php 
        try{
            $sql = "select shopname,email,mobile,shoplogo from sellers where id=?";
            $st = $db->prepare($sql);
            $st->bindparam(1,$_SESSION['sellerid']);
            $st->execute();
            while($row = $st->fetch()){
    ?>
    <!--home page begins here-->
    <div class="container">
        <div class="row info_banner">
            <div class="col-12 h1 text-center p-3 text-white">
                Your Shop Info
            </div>
        </div>
        <div class="details">
            <div class="row">
                <div class="logo col-12 col-lg-5 mt-4">
                    <img src="images/business_logo/<?php echo $row['shoplogo']?>" class="img-fluid img-thumbnail logo_img" style="border-radius: 50px;">
                </div>
                <div class="details col-12 col-lg-7 mt-5 text-center">
                    <div class="h1 mt-5"><?php echo $row['shopname'];?></div>
                    <div class="h3 mt-4"><?php echo $row['email'];?></div>
                    <div class="h3 mt-4"><?php echo $row['mobile'];?></div>
                    <div class="text-justify mt-4" style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</div>
                    <form>
                        <button class="update_info mt-3">Update Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
            }//end of while
        }//end of try

        catch(PDOException $error){
            $result = FAIL;
            LogError($error);
        }

    ?>

    <div class="container mt-4">
        <div class="row category_banner">
            <div class="col-12 h1 text-center p-3 text-white ">
                Categories You Sell
            </div>
        </div>

        <div class="row category_cards">
                <?php
                    extract($_REQUEST);
                    try{
                        $sql = "select id,title,photo from category where sellerid=?";
                        $st = $db->prepare($sql);
                        $st->bindparam(1,$_SESSION['sellerid']);
                        $st->execute();

                        while($row = $st->fetch())
                        {

                ?>
            <div class="card col-12 col-lg-4 col-md-6 mt-4" style="border: none;">
                <img src="admin/images/categories/<?php echo $row['photo']; ?>" class="card-img-top" style="height: 300px;">
                <div class="card-body">
                    <h4 class="card-tite text-center text-capitalize"><?php echo $row['title'];?></h4>
                </div>
                <div class="card-footer text-center d-flex justify-content-center">
                    <a href="products_info.php?categoryid=<?php echo $row['id'];?>&categoryname=<?php echo $row['title']; ?>">
                        <button type="submit" class="view_button">View More<span class="fas fa-arrow-right ml-1" style="position: relative; top: 2.5px;"></span></button>
                    </a>
                    <button class="delete_button ml-3">Delete<span class="fas fa-trash-alt fa-lg ml-1"></span><button>
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
    var car = document.getElementById('card1')

        function del(){
            car.style.display = "none";
        }
</script>

</body>


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>