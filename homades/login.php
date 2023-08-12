<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <?php
        include('inc/link.php');
        include('inc/connection.php');
    ?>
    
    <style type="text/css">
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-body{
            overflow: hidden;
        }
        #seller_form{
            position: relative;
            left: 25px;
        }
        #btn{
            position: absolute;
            top: -1px;
            left: -1px;
            height: 45px;
            background: #e7246d;
            width: 110px;
            transition: all 0.5s ease-in-out;
        }
        .toggle_button{
            position: relative;
        }
        .btn1{
            position: relative;
            width: 60px;
            height: 43px;
        }
        .btn1:focus{
            outline: none;
            border: none;
            box-shadow: none;
        }
        .input_group{
            position: relative;
            transition: all 0.5s linear;
        }
        .fa-eye{
            position: relative;
            left: 95%;
            bottom: 30px;
            cursor: pointer;
            color: #e7246d;
        }
        .fa-eye:focus{
            border: none;
            outline: none;
        }
        a{
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: #e7246d;
        }
        .btn_login{
            background: #e7246d;
            color: #fff;
            font-size: 22px;
            box-shadow: 2px 2px 20px rgb(231, 36, 109);
        }
        .form-control:focus{
            box-shadow: none;
            outline: none;
            border: 1px solid #e7246d;
        }
        .btn_login:hover{
            color: #fff;
            box-shadow: none;
            transition: all 0.2s;
        }
        .btn_login:focus{
            color: #fff;
            box-shadow: none;
            transition: all 0.5s;
        }
        @media screen and (min-width: 0px) and (max-width: 400px){
            .fa-eye{
                left: 90%;
            }
            .form-check{
                right: 30%;
                transform: translateX(10%);
            }
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

<div class="container">
    <div class="row">
        <div class="card_row  col-lg-6 offset-lg-3 col-12">
            <div class="card shadow">
            <div class="card-header text-center text-white h3" style="background: #e7246d;">Login</div>
            <div class="toggle_button mt-5 ml-auto mr-auto" style="width: 220px;border: 2px solid #e7246d;">
                <div id="btn"></div>
                <button type="button" class="btn1 ml-4" id="buyer" onclick="buyer();" style="font-size: 20px;color: #fff;margin-left: 10px;">Buyer</button>
                <button type="button" class="btn1 ml-5" id="seller" onclick="seller();" style="font-size: 20px;">Seller</button>
            </div>
            <div class="form-box">
                <button type="button"></button>
            </div>
            <div class="card-body d-flex">
                <form action="ajax/verify_buyer.php" id="buyer_form" method="post" class="col-12 input_group">
                    <?php
                        extract($_REQUEST);
                        if (isset($message)==true) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                        }//end of if
                    ?>
                    <div class="form-group">
                        <label for="txtemail">Email</label>
                        <input type="text" class="form-control" name="txtemail" id="txtemail" placeholder="Enter Email">
                    </div>


                    <div class="form-group">
                        <label for="txtpass">Password</label>
                        <input type="password" class="form-control" name="txtpass" id="txtpass" placeholder="Enter Password">
                        <button type="button" onclick="eye();" class="fas fa-eye"></button>
                    </div>
                    <div class="form-check col-12 text-right">
                        <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn_login col-10 offset-1 col-sm-6 offset-sm-3 mt-3 text-center" name="verify_buyer">Login</button>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Not a Member?<a href="signup.php" class="ml-2">Signup</a></span>
                    </div>
                </form>

                <form action="ajax/verify_seller.php" method="post" id="seller_form" class="col-12 input_group">
                    <div class="form-group">
                        <label for="txtemail1">Email</label>
                        <input type="text" class="form-control" name="txtemail1" id="txtemail1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="txtpass1">Password</label>
                        <input type="password" class="form-control" name="txtpass1" id="txtpass1" placeholder="Enter Password">
                        <button type="button" class="fas fa-eye" onclick="eye1();"></button>
                    </div>
                    <div class="form-check col-12 text-right">
                        <a href="forgot_password.php">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn_login col-10 offset-1 col-sm-6 offset-sm-3 mt-3 text-center" name="verify_seller">Login</button>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Not a Member?<a href="signup.php" class="ml-2">Signup</a></span>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->

    <?php
        include('inc/script.php');
    ?>
    <script type="text/javascript">
        var a = document.getElementById("buyer_form");
        var b = document.getElementById("seller_form");
        var x = document.getElementById("btn");
        var y = document.getElementById("buyer");
        var z = document.getElementById("seller");

        function seller(){
            x.style.left = "107px";
            z.style.color = "#fff";
            y.style.color = "#000";
            a.style.right = "1100px";
            b.style.left = "-100%";
        }
        function buyer(){
            x.style.left = "-1px";
            z.style.color = "#000";
            y.style.color = "#fff";
            a.style.right = "0px";
            b.style.left = "600px";
        }
        function eye(){
            var pass = document.getElementById("txtpass");
            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password";
            }
        }
        function eye1(){
            var pass1 = document.getElementById("txtpass1");
            if (pass1.type === "password") {
                pass1.type = "text";
            }
            else{
                pass1.type = "password";
            }
        }
    </script>

</body>
</html>