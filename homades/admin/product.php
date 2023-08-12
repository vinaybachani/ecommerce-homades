<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
            include('inc/header.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include('inc/menu.php');
        ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="fas fa-gift fa-lg" style="color: blue;"></i>
                                        <h4 class="card-title ml-1" style="display: inline;">Product-Page</h4>
                                        <h6 class="card-subtitle" style="margin-top: 10px;">Here you can either update or delete the product</h6>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <div class="form-group" style="display: flex;">
                                            <input type="search" class="form-control" name="" placeholder="Search Specific Product">
                                            <button type="submit" class="btn btn-outline-primary ml-2"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                    <a href="product_gallary.php" class="btn btn-outline-primary col-2 mt-2 mb-4 ml-3">Products Gallary<i class="fas fa-gift fa-lg ml-1"></i></a>
                                </div>
                                <div id="mycont">
                                    <div class="current_categories col-12 text-center bg-primary text-white p-3" style="font-size: 25px;">Current Products</div>
                                    <div class="table-responsive mt-4">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Sellerid</th>
                                                    <th>Categoryid</th>
                                                    <th>Photo</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Detail</th>
                                                    <th>Description</th>
                                                    <th>Weight</th>
                                                    <th>Size</th>
                                                    <th>Islive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td><img src="cake.jpg" style="width: 100px;height: 100px;"></td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>abc</td>
                                                    <td>abc</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <!--<div class="row" id="mycont1" style="display: none;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <fieldset>
                                        <input type="file" class="form-control-file" id="image" data-placement="left"
                                        title="Choose img for Product" data-toggle="tooltip">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" placeholder="Price" data-placement="left" title="Enter price for Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="quant">Quantity</label>
                                        <input type="number" class="form-control" id="quant" placeholder="Quantity" data-placement="left" title="Enter Quantity of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Detail</label>
                                        <textarea class="form-control" id="detail" rows="2" placeholder="Detail" data-placement="left" title="Enter Detail of Product" data-toggle="tooltip"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea class="form-control" id="Description" rows="3" placeholder="Description" data-placement="left" title="Enter Description of Product" data-toggle="tooltip"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="number" class="form-control" id="weight" placeholder="Weight" data-placement="left" title="Enter weight of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input type="number" class="form-control" id="size" placeholder="Size" data-placement="left" title="Enter Size of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="status">Status (Is Live)</label>
                                        <select class="custom-select mr-sm-2 " id="status" data-placement="left" title="Select Status of Product" data-toggle="tooltip">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" style="padding: 5px 25px;">Add</button>
                                    <button type="reset" class="btn btn-outline-danger" style="padding: 5px 25px; margin-left: 10px;">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            <!--update form start-->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <!--<div class="row" id="mycont2" style="display: none;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <fieldset>
                                        <input type="file" class="form-control-file" id="image" data-placement="left"
                                        title="Choose img for Product" data-toggle="tooltip">
                                        </fieldset>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" placeholder="Price" data-placement="left" title="Enter price for Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="quant">Quantity</label>
                                        <input type="number" class="form-control" id="quant" placeholder="Quantity" data-placement="left" title="Enter Quantity of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Detail</label>
                                        <textarea class="form-control" id="detail" rows="2" placeholder="Detail" data-placement="left" title="Enter Detail of Product" data-toggle="tooltip"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea class="form-control" id="Description" rows="3" placeholder="Description" data-placement="left" title="Enter Description of Product" data-toggle="tooltip"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="number" class="form-control" id="weight" placeholder="Weight" data-placement="left" title="Enter weight of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input type="number" class="form-control" id="size" placeholder="Size" data-placement="left" title="Enter Size of Product" data-toggle="tooltip">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="status">Status (Is Live)</label>
                                        <select class="custom-select mr-sm-2 " id="status" data-placement="left" title="Select Status of Product" data-toggle="tooltip">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" style="padding: 5px 25px;">Update</button>
                                    <button type="reset" class="btn btn-outline-danger" style="padding: 5px 25px; margin-left: 10px;">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!--update form end-->

            <!-- End Bread crumb and right sidebar toggle -->
            
            <!-- footer -->
            <?php
                include('inc/footer.php');
            ?>
            <!-- End footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== --> 
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php
        include('inc/script.php');
    ?>
     <!--<script>
        var cont = document.getElementById("mycont");
        var cont1 = document.getElementById("mycont1");
        var cont2 = document.getElementById("mycont2");
        function add(){
            cont.style.display = "none";
            cont1.style.display = "block";
        }
        function update(){
            cont.style.display = "none";
            cont2.style.display = "block";
        }
    </script>-->
</body>

</html>