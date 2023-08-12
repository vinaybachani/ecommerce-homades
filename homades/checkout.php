<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        include('inc/link.php');
    ?>

    <style type="text/css">
        a{
            color: white;
            text-decoration: none;
        }
        .form-control:focus,
        .form-select:focus{
            box-shadow: none!important;
            border: 1px solid #e7246d!important;
            outline: none!important;
        }
        .form-select:focus .selected{
            display: none;
        }
        .pay_btn{
            border: 2px solid #e7246d;
            padding: 8px 10px;
            font-size: 18px;
            font-weight: 400;
            color: #e7246d;
            transition: all 0.2s;
        }
        .pay_btn:hover{
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
   
   <!--Checkout starts here-->
   <div class="container-fluid">
       <div class="row">
            <div class="order_details col-12 col-sm-12 col-md-5 col-lg-6 table-responsive">
                <div class="card">
                    <div class="card-header h2 text-center">Your Order</div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="h4 text-center">
                              <th scope="col">Product</th>
                              <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                              <th scope="row">Vestibulum suscipit × 1</th>
                              <td>£165.00</td>
                            </tr>
                            <tr class="text-center">
                              <th scope="row">Vestibulum suscipit × 1</th>
                              <td>£165.00</td>
                            </tr>
                            <tr class="text-center">
                              <th scope="row">Vestibulum suscipit × 1</th>
                              <td>£165.00</td>
                            </tr>
                            <tr class="text-center">
                              <th scope="row">Vestibulum suscipit × 1</th>
                              <td>£165.00</td>
                            </tr>
                            <tr class="text-center">
                              <th scope="row">Vestibulum suscipit × 1</th>
                              <td>£165.00</td>
                            </tr>
                            <tr class="text-center h3" style="outline: 2px solid #e7246d;">
                              <th scope="row">Order-Total</th>
                              <td style="color: #e7246d">£165.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>   
           </div>
           <div class="address_details col-12 col-sm-12 col-md-7 col-lg-6">
               <form>
                    <div class="mb-3 form-group">
                       <input type="text" class="form-control" name="" placeholder="Full Name">
                    </div>
                    <div class="mb-3 form-group">
                       <input type="text" class="form-control" name="" placeholder="Address 1">
                    </div>
                    <div class="mb-3 form-group">
                       <input type="text" class="form-control" name="" placeholder="Address 2">
                    </div>
                    <div class="form-group">
                      <label for="countryselectcontrol">State</label>
                      <select class="form-control" id="countryselectcontrol">
                        <option>Gujarat</option>
                        <option>Rajasthan</option>
                        <option>Maharashtra</option>
                        <option>Delhi</option>
                        <option>Madhya Pradesh</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cityselectcontrol">City</label>
                      <select class="form-control" id="cityselectcontrol">
                        <option>Bhavnagar</option>
                        <option>Surat</option>
                        <option>Rajkot</option>
                        <option>Baroda</option>
                        <option>Ahemdabad</option>
                      </select>
                    </div>
                    <div class="mb-3 form-group">
                       <input type="number" class="form-control" name="" placeholder="Zipcode">
                    </div>
                    <div class="mb-3 form-group">
                       <input type="email" class="form-control" name="" placeholder="Email">
                    </div>
                    <div class="mb-3 form-group">
                       <input type="number" class="form-control" name="" placeholder="Contact Number">
                    </div>
                    <div class="mb-3 form-group">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Order Details(optional)"></textarea>
                    </div>
               </form>
                <div class="col-12 text-right">
                      <button type="submit" class="pay_btn">Proceed to Pay<i class="fas fa-arrow-right ml-2" style="position: relative;top: 2px;"></i></button>
                </div>
           </div>
       </div>
   </div>
   <!--checkout ends here-->

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