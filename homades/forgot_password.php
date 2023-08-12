<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>

    <style type="text/css">
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            color: white;
        }
        a:hover{
            text-decoration: none;
        }
        .form-control:focus{
            border: 1px solid #e7246d;
            box-shadow: none;
        }
        .card{
            position: relative;
            width: 40rem;
        }
        @media screen and (min-width: 0px) and (max-width: 400px){
            .card{
                width: 20rem;
            }
        }
        @media screen and (min-width: 400px) and (max-width: 590px){
            .card{
                width: 24rem;
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
            <div class="card shadow-lg bg-white">
            <div class="card-header text-white text-center" style="background: #e7246d;font-size: 25px;">
                <div>Forgot Password</div>
            </div>
            <div class="card-body mt-5">
                <form>
                    <div class="form-group">
                        <label for="emailadd">Email address</label>
                        <input type="email" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn mt-2" style="background: #e7246d;color: #fff;">Reset-Password</button>
                </form>
            </div>
        </div>
        </div>
   </div>
    
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