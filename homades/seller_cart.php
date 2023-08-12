<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>

    <style type="text/css">
        footer a{
            color: #fff;
        }
        .product_name,.buyer_name,.buyer_address,.buyer_number{
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
        .btn_confirm,.btn_reject{
            border: 2px solid #e7246d;
            padding: 6px 9px;
            border-radius: 5px;
            transition: all 0.5s;
            color: #e7246d;
        }
        .btn_reject:hover,.btn_confirm:hover{
            background: #e7246d;
            color: #fff;
        }
        .back_btn{
            border: 2px solid #e7246d;
            padding: 8px 10px;
            width: 100px;
            font-size: 18px;
            font-weight: 400;
            color: #e7246d;
            transition: all 0.5s;
        }
        .back_btn:hover{
            background: #e7246d;
            color: #fff;
        }
        .fa-arrow-left{
            position: relative;
            right: 5px;
        }
        .back_btn:hover .fa-arrow-left{
            right: 10px;
            transition: all 0.2s ease;
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
        include('inc/seller_header.php');
    ?>
    <!-- Header Area End Here -->

    <!--cart page starts here-->
    <div class="container">
        <div class="row">
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr class="text-center">
                    <th scope="col">Buyer_name</th>
                    <th scope="col">Buyer_address</th>
                    <th scope="col">Buyer_contact_number</th>
                    <th scope="col">Image</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col" nowrap>Action</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                    <td class="buyer_name">abc</td>
                    <td class="buyer_address">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                    <td class="buyer_number">0123456789</td>
                    <th scope="row"><img class="img-fluid" src="cake.jpg" width="200px" height="200px"></th>
                    <td nowrap><a href="#" class="product_name">Pearly Everlasting</a></td>
                    <td>80$</td>
                    <td style="white-space: nowrap;">
                        <input type="number" value="0" name="txtquantity" id="txtquantity" readonly class="update_number text-center" style="background: transparent;">
                    </td>
                <td>80$</td>
                <td class="d-flex"><button class="btn_confirm">confirm</button>
                <button class="btn_reject ml-3">Reject</button></td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>

        <div class="row">
            <div class="checkout_button col-12 text-right">
                <form action="checkout.php">
                    <button type="submit" class="back_btn"><i class="fas fa-arrow-left"></i>Back</button>
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
</body>


<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>