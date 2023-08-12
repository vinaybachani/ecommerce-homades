<!doctype html>
<html class="no-js" lang="en">

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
            overflow-x: hidden;
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
        .form-control:focus{
            box-shadow: none;
            outline: none;
            border: 1px solid #e7246d;
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
        .input_group{
            position: relative;
            transition: all 0.5s linear;
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
        .btn_login:hover{
            color: #fff;
            box-shadow: none;
            transition: all 0.5s;
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
        <div class="card_row col-lg-6 offset-lg-3 col-12">
            <div class="card shadow" style="height: 650px!important;">
            <div class="card-header text-center text-white h3" style="background: #e7246d;">Signup</div>
            <div class="toggle_button mt-2 ml-auto mr-auto" style="width: 220px;border: 2px solid #e7246d;">
                <div id="btn"></div>
                <button type="button" class="btn1 ml-4" id="buyer" onclick="buyer();" style="font-size: 20px;color: #fff;margin-left: 10px;">Buyer</button>
                <button type="button" class="btn1 ml-5" id="seller" onclick="seller();" style="font-size: 20px;">Seller</button>
            </div>
            <div class="form-box">
                <button type="button"></button>
            </div>
            <div class="card-body d-flex">
                <form action="submit/submit_buyer.php" id="buyer_form" method="post" class="col-12 input_group">
                    <div class="form-group">
                        <label for="txtname">Full Name</label>
                        <input type="text" class="form-control" name="txtname" id="txtname" placeholder="Enter your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="txtemail">Email</label>
                        <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Enter your Email" required>
                    </div>
                    <div class="add"></div>
                    <div class="form-group">
                        <label for="txtumber">Number</label>
                        <input type="number" class="form-control" name="txtnumber" id="txtnumber" placeholder="Enter your Number" required>
                    </div>
                    <div class="form-group">
                        <label for="txtstate">State</label>
                        <input type="text" class="form-control" name="txtstate" id="txtstate" placeholder="Enter your State" required>
                    </div>
                    <div class="form-group">
                        <label for="txtcity">City</label>
                        <input type="text" class="form-control" name="txtcity" id="txtcity" placeholder="Enter your City" required>
                    </div>
                    <div class="form-group">
                        <label for="txtpass">Password</label>
                        <input type="password" class="form-control" name="txtpass" id="txtpass" placeholder="Enter your Password" required>
                        <button type="button" onclick="eye();" class="fas fa-eye"></button>
                    </div>
                    <button type="submit" class="btn btn_login col-10 offset-1 col-sm-6 offset-sm-3 mt-3 text-center" name="submit_buyer">Signup</button>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Already a Member?<a href="login.php" class="ml-2">Login</a></span>
                    </div>
                </form>

                <form action="submit/submit_seller.php" method="post" id="seller_form" class="col-12 input_group" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txtname1">Full Name</label>
                        <input type="text" class="form-control" name="txtname1" id="txtname1" placeholder="Enter your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="txtemail1">Email</label>
                        <input type="email" class="form-control" name="txtemail1" id="txtemail1" placeholder="Enter your Email" required>
                    </div>
                    <div class="add"></div>
                    <div class="form-group">
                        <label for="txtumber1">Number</label>
                        <input type="number" class="form-control" name="txtnumber1" id="txtnumber1" placeholder="Enter your Number" required>
                    </div>
                    <div class="form-group">
                        <label for="txtpass1">Password</label>
                        <input type="password" class="form-control" name="txtpass1" id="txtpass1" placeholder="Enter your Password" required>
                        <button type="button" class="fas fa-eye" onclick="eye1();"></button>
                    </div>
                    <div class="form-group">
                        <label class="text-center h3 col-12">Enter Shop Details</label>
                    </div>
                    <div class="form-group">
                            <label for="txtshopname">Name</label>
                            <input type="text" class="form-control" name="txtshopname" id="txtshopname" placeholder="Enter Shop Name">
                    </div>
                    <div class="form-group">
                            <label for="txtshopaddress">Address</label>
                            <textarea type="text" id="txtshopaddress" name="txtshopaddress" class="form-control" row="3" placeholder="Shop Address"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="txtshopcity">City</label>
                            <input type="text" class="form-control" name="txtshopcity" id="txtshopcity" placeholder="Enter Shop City">
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-control-label">Choose Category to Sell</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cakecheck">
                            <label class="form-check-label" for="cakecheck">Cakes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="chocolatecheck">
                            <label class="form-check-label" for="chocolatecheck">Chocolates</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="picklecheck">
                            <label class="form-check-label" for="picklecheck">Pickles</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="chcolatejarcheck">
                            <label class="form-check-label" for="chcolatejarcheck">Chocolate Jars</label>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="shoplogo">Choose logo image for your Shop</label>
                        <fieldset>
                            <input type="file" class="form-control-file" id="shoplogo" name="shoplogo">
                        </fieldset>
                    </div>
                    <button type="submit" name="submit_seller" class="btn btn_login col-10 offset-1 col-sm-6 offset-sm-3 mt-3 text-center">Signup</button>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Already a Member?<a href="login.php" class="ml-2">Login</a></span>
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