<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
        include('inc/connection.php');
        session_start();
    ?>

    <style type="text/css">
        footer a{
            color: white;
        }
        a:hover{
            text-decoration: none;
            color: #e7246d!important;
        }
        .form-control:focus{
            box-shadow: none;
            border-color: #e7246d;
        }
        .fa-eye{
            position: relative;
            left: 96%;
            bottom: 30px;
            cursor: pointer;
        }  
        .btn{
            border: 2px solid #e7246d;
            border-radius: 5px;
            color: #e7246d;
        } 
        .btn:hover{
            background: #e7246d;
            color: #fff;
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
           <div class="table-responsive">
               <table class="table table-bordered text-center">
                   <thead style="background: #e7246d;" class="text-white">
                       <tr>
                           <td>Image</td>
                           <td>Product</td>
                           <td>Price</td>
                           <td style="white-space: nowrap;">Stock Status</td>
                           <td>Add to Cart</td>
                           <td>Remove</td>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                            <td><img src="cake.jpg" class="img-fluid" width="150px" height="150px"></td>
                            <td style="white-space: nowrap;"><a href="" style="color: #000;">Product Dummy Title / Green</a></td>
                            <td style="white-space: nowrap;">$80</td>
                            <td style="white-space: nowrap;">In Stock</td>
                            <td style="white-space: nowrap;"><button type="submit" class="btn">Add to cart</button></td>
                            <td><button class="btn"><i class="fas fa-trash-alt fa-lg"></i></button></td>
                       </tr>
                   </tbody>
               </table>
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
        function toggle(){
            var pass = document.getElementById('currentpassword');
            var eye = document.getElementById('eye');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }

        function toggle1(){
            var pass = document.getElementById('newpassword');
            var eye = document.getElementById('eye1');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }

         function toggle2(){
            var pass = document.getElementById('confirmnewpassword');
            var eye = document.getElementById('eye2');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }
</script>


</body>


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>