<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
        include('inc/connection.php');
        session_start();
    ?>

    <style type="text/css">
        *::selection{
            background: #e7246d!important;
            color: #fff!important;
        }
        footer a{
            color: #fff;
        }
        .product_name{
            color: #000;
        }
        a:hover{
            color: #e7246d;
            text-decoration: none;
        }
        .update_icons{
            padding: 4px 5px;
            cursor: pointer;

        }
        .update_icons:hover{
            background: #e7246d;
            color: #fff;
            transition: all 0.2s;
            border-radius: 25px;
        }
        .update_icons:hover{
            color: #fff;
            transition: all 0.8s;
        }
        .update_number{
            width: 45px;
            padding: 2px 10px;
            border: none;
        }
        .btn_remove{
            border: 2px solid #e7246d;
            padding: 6px 9px;
            border-radius: 5px;
            transition: all 0.5s;
        }
        .btn_remove:hover{
            background: #e7246d;
        }
        .remove{
            color: #e7246d;
            transition: all 0.8s;
        }
        .btn_remove:hover .remove{
            color: #fff;
        }
        .checkout_btn{
            border: 2px solid #e7246d;
            padding: 8px 10px;
            font-size: 18px;
            font-weight: 400;
            color: #e7246d;
            transition: all 0.5s;
        }
        .checkout_btn:hover{
            background: #e7246d;
            color: #fff;
        }
        button:focus{
            outline: none;
        }
        table thead tr{
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

    <!--cart page starts here-->
    <div class="container">
        <div class="row">
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="text-center">
                  <th scope="col">Image</th>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                  <th scope="col">Remove</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <th scope="row"><img class="img-fluid" src="cake.jpg" width="200px" height="200px"></th>
                  <td><a href="#" class="product_name">Pearly Everlasting</a></td>
                  <td>80$</td>
                  <td style="white-space: nowrap;">
                    <button class="minus"><span class="fas fa-minus update_icons"></span></button>
                    <input type="number" value="0" name="" id="txtupdate" class="update_number text-center" style="color: #e7246d">
                    <button class="plus"><span class="fas fa-plus update_icons"></span></button>
                </td>
                <td>80$</td>
                <td><button class="btn_remove"><i class="fas fa-trash-alt remove fa-lg"></i></button></td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>

        <div class="row">
            <div class="checkout_button col-12 text-right">
                <form action="checkout.php">
                    <button type="submit" class="checkout_btn">Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </div>
    <!--cart page ends here-->

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
        });
</script>
</body>


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>