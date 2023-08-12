<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>
    <style>
        a{
            color: white;
        }
        a:hover{
            text-decoration: none;
        }
        .card_row{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loc_div{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .location{
            display: flex;
            width: 70px;
            height: 70px;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            text-decoration: none;
            color: black;

        }
        .card:hover{
            cursor: pointer;
        }
        .card:hover .location{
            text-decoration: none;
            background: white;
            border: 2px solid #e7246d;
            color: #e7246d;
            transition: all 0.3s;
        }
        .sub{
            margin-top: 25px;
            color: #e7246d;
            border: 1px solid #e7246d;
            height: 50px;
            width: 250px;
            font-size: 20px;
        }
        .sub:hover{
            background: #e7246d;
            color: white;
        }
        .sub:active{
            background: #e7246d;
            color: white;
            border: 1px solid #e7246d;
        }
        .form-control:focus{
            box-shadow: none;
            border-color: #e7246d;
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

    <!--contact-us content begins here-->
    <div class="container">
        <div class="row card_row">
            <div class="card text-dark bg-light mb-3 pt-5 pb-5 col-12" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="loc_div mb-3">
                        <a href="#" class="location"><i class="fas fa-map-marker-alt fa-3x"></i></a>
                    </div>
                    <h5 class="card-title text-dark text-center h3">Our Location</h5>
                    <p class="card-text text-center mb-5">(800) 123 456 789 / (800) 123 456 789 info@example.com</p>
                </div>
            </div>
             <div class="card text-dark bg-light mb-3 pt-5 pb-5 col-12 ml-md-5" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="loc_div mb-3">
                        <a href="#" class="location"><i class="fas fa-mobile fa-3x"></i></a>
                    </div>
                    <h5 class="card-title text-dark h3 text-center">Contact us</h5>
                    <p class="card-text text-center mb-5">Mobile: 012 345 678 <br/> Fax: 123 456 789</p>
                </div>
            </div>
            <div class="card text-dark bg-light mb-3 pt-5 pb-5 col-12 ml-md-5" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="loc_div mb-3">
                        <a href="#" class="location"><i class="fas fa-envelope fa-3x"></i></a>
                    </div>
                    <h5 class="card-title text-dark h3 text-center">Support overall</h5>
                    <p class="card-text text-center mb-5">Support24/7@example.com<br/>info@example.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row ml-1">
            <h3>Get in Touch with us</h2>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="row">
                <div class="form-group col-12 col-md-5">
                    <input type="text" name="" placeholder="Enter your Name" class="form-control">
                </div>
                <div class="form-group col-12 col-md-7 mt-3 mt-md-0">
                    <input type="email" name="" placeholder="Enter your Email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 mt-3">
                    <input class="form-control" type="text" placeholder="Enter your Subject">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <textarea class="form-control mt-3" rows="3" placeholder="Enter your Message"></textarea>
                </div>
            </div>  
            <div class="row">
                <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="sub ml-3">Send Message</button>
                </div>
            </div>  
        </form>

    </div>
    <!--contact-us content ends here-->

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