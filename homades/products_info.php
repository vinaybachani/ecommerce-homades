<!doctype html>
<html class="no-js" lang="en">
<head>
     <?php  
        session_start();
        include('inc/connection.php');
        include('inc/link.php');
    ?>

    <style type="text/css">
        *::selection{
            background: #e7246d;
            color: #fff;
        }
        a{
            color: white;
        }
        .btn{
            border: 2px solid #e7246d;
        }
        .btn:hover{
            background: #e7246d;
        }
        .btn:hover i{
            color: #fff;
            transition: all 0.5s;
        }
        .btn i{
            color: #e7246d;
        }
        a:hover{
            text-decoration: none;
            color: #e7246d!important;
        }
        .product_banner{
            background: #e7246d;
        }
        .form-control:focus{
            box-shadow: none;
            border: 1px solid #e7246d;
        }
        .add_product_btn,.btn_add_product,.btn_close{
            color: #e7246d;
            border: 2px solid #e7246d;
            padding: 10px;
            font-size: 18px;
        }
        .add_product_btn:hover,
        .btn_add_product:hover,
        .btn_close:hover{
            background: #e7246d;
            color: #fff;
        }
        .add_product_btn:focus{
            outline: none;
        }
        @media screen and (min-width: 0px) and (max-width: 991px){
          .desc{
              width: 50%;
          }
        }
    </style>

</head>

<body>

    <!--===== Pre-Loading area Start =====-->
    <!-- <div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0">.</h1>
            </div>
        </div>
    </div> -->
    <!--==== Pre-Loading Area End ====-->

    <!-- Header Area Start Here -->
    <?php  
        include('inc/seller_header.php');
    ?>
    <!-- Header Area End Here -->

    <!--product-info page starts here-->
    <div class="container">
        <div class="row">
            <div class="h2 text-center col-12 product_banner p-3 mb-4 text-light">Products You Sell</div>
        </div>

        <?php $count=1; ?>

        <?php
            extract($_REQUEST);
            if(isset($_REQUEST['message'])==true){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $message; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        }//end of if
        ?>

        <div class="row">
            <div class="product_info col-12 table-responsive">
              <div class="table-responsive">
               <table class="table table-bordered text-center">
                   <thead class="text-dark bg-light">
                       <tr>
                           <td>Image</td>
                           <td>Name</td>
                           <td>Category</td>
                           <td>Description</td>
                           <td>Actions</td>
                       </tr>
                   </thead>
                   <tbody>
                    <?php
                        extract($_REQUEST);
                        $sql = "select id,name,detail,photo from product where categoryid=? and sellerid=?";
                        $st = $db->prepare($sql);
                        $st->bindparam(1,$categoryid);
                        $st->bindparam(2,$_SESSION['sellerid']);
                        $st->execute();
                        while($row = $st->fetch()){
                    ?>
                       <tr>
                            <td><img src="images/products/<?php echo $row['photo']; ?>" class="img-fluid" width="150px" height="150px"></td>
                            <td style="white-space: nowrap;"><a href="#" style="color: #000;"><?php echo $row['name']; ?></a></td>
                            <td style="white-space: nowrap;"><?php echo $categoryname; ?></td>
                            <td style="white-space: normal;" class="text-justify desc"><?php echo $row['detail']; ?></td>
                            <td nowrap>
                                <a href="delete_product.php?productid=<?php echo $row['id'];?>&categoryid=<?php echo $categoryid;?>&categoryname=<?php echo $categoryname; ?>&oldphoto=<?php echo $row['photo']; ?>"><button class="btn"><i class="fas fa-trash-alt fa-lg"></i></button></a>
                                <a href="view_product.php"><button class="btn"><i class="fas fa-eye fa-lg"></i></button></a>
                            </td>
                       </tr>
                       <?php
                        }//end of while
                       ?>
                   </tbody>
               </table>
           </div>
            </div>
        </div> 

        <div class="row">
            <!-- Button trigger modal -->
            <div class="add_product_div col-12 text-center mt-3">
                <button type="button" class="add_product_btn pl-4 pr-4" data-toggle="modal" data-target="#exampleModal">
                  Add Product
                </button>
            </div>
            
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background: #e7246d;">
                <h5 class="modal-title text-center" id="exampleModalLabel" style="color: #fff;">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="submit/insert_product.php" method="post" enctype="multipart/form-data"> 
                  <div class="form-group">
                    <label for="producttitle">Title</label>
                    <input type="text" class="form-control" id="producttitle" name="producttitle" aria-describedby="emailHelp" placeholder="Enter Name for your Product">
                  </div>
                  <div class="form-group">
                    <label for="productdetail">Descibe Your Product</label>
                    <textarea id="productdetail" name="productdetail" rows="3" class="form-control" placeholder="Provide Brief Description for your Product"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="productprice">Price</label>
                    <input type="number" class="form-control" name="productprice" id="productprice" aria-describedby="emailHelp" placeholder="Enter Price of your Product">
                  </div>
                  <div class="form-group">
                    <label for="productquantity">Quantity</label>
                    <input type="number" class="form-control" name="productquantity" id="productquantity" aria-describedby="emailHelp" placeholder="Enter Quantity of your Product">
                  </div>
                  <div class="form-group">
                    <label for="productweight">Weight</label>
                    <input type="number" class="form-control" name="productweight" id="productweight" aria-describedby="emailHelp" placeholder="Enter Weight of your Product in gms">
                  </div>
                  <div class="form-group">
                    <label for="productphoto">Upload Picture for your Product</label>
                    <input type="file" class="form-control-file" id="productphoto" name="productphoto">
                  </div>
                  <label class="mt-4">Islive</label><br/>    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="productislive" id="rdo1" value="1">
                        <label class="form-check-label" for="rdo1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="productislive" id="rdo2" value="0">
                        <label class="form-check-label" for="rdo2">No</label>
                    </div><br/>
                  <button type="submit" name="add_product" class="mt-3 col-6 offset-3 btn btn_add_product">Add Product</button>

                  <input type="hidden" name="categoryid" value="<?php echo $categoryid; ?>">
                  <input type="hidden" name="categoryname" value="<?php echo $categoryname; ?>">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn_close" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        </div>   
    </div>
    <!--product-info page ends here-->

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