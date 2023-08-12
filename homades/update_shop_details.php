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
        .btn_update{
            background: #e7246d;
            color: #fff;
            font-size: 22px;
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
    <div class="container">
        <div class="row">
           <div class="update_details col-12 col-md-6 offset-md-3">
               <div class="card">
                <div class="card-header text-center h3 text-white" style="background: #e7246d">Update shop details</div>
                <div class="card-body">
                    <form class="mt-3">
                        <div class="form-group">
                            <label for="txtname">Name</label>
                            <input type="text" class="form-control" name="" id="txtname" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="txtemail">Email</label>
                            <input type="email" class="form-control" name="" id="txtemail" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="txtnumber">Number</label>
                            <input type="number" class="form-control" name="" id="txtnumber" placeholder="">
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <label for="shoplogo">Shop Logo</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn_update col-10 offset-1 col-sm-6 offset-sm-3 mt-3 text-center">Update</button>
                    </form>
                </div>
               </div>
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