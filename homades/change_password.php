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
            <div class="card m-auto" style="width: 40rem;">
                <div class="card-header text-white text-center" style="background: #e7246d;font-size: 25px;">
                    Change Password
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="currentpassword">Current Password</label>
                            <input type="password" name="currentpassword" id="currentpassword" class="form-control" placeholder="Enter current Password">
                            <i class="fas fa-eye" id="eye" onclick="toggle();"></i>
                        </div>
                        <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password">
                                <i class="fas fa-eye" id="eye1" onclick="toggle1()"></i>
                            </div>
                           <div class="form-group">
                                <label for="confirmnewpassword">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmnewpassword" placeholder="Enter New Password">
                                <i class="fas fa-eye" id="eye2" onclick="toggle2()"></i>
                            </div>
                            <button type="submit" class="btn text-white pl-4 pr-4" style="background: #e7246d;">Change</button>
                    </form>
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