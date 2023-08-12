<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
        include('inc/connection.php')
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
                                <i class="fas fa-users fa-lg" style="color: blue"></i>
                                <h4 class="card-title ml-1" style="display: inline;">Seller-Page</h4>
                                <div class="current_categories col-12 col-lg-3 text-center bg-primary text-white p-2 mt-4" style="font-size: 18px;border-radius: 25px;">Information For Sellers</div>
                               <div class="table-responsive mt-2" id="sellertable">
                                    <table id="zero_config" class="table table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Name</th>
                                                <th>Logo</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try{
                                                $sql = "select email,mobile,city,state,name from sellers order by id desc";
                                                $st = $db->prepare($sql);
                                                $st->execute();
                                                $count = 1;
                                                while($row = $st->fetch()){
                                            ?>
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['mobile'];?></td>
                                                <td><?php echo $row['city'];?></td>
                                                <td><?php echo $row['state'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><img src="cake.jpg" style="width: 250px;height: 250px;"></td>
                                                <td><a class="btn btn-outline-primary" href="seller_rating.php">View Rating</button></td>
                                            </tr>
                                            <?php
                                                }//end of while
                                            }//end of try
                                            catch(PDOException $error){
                                                LogError($error,0);
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include('inc/footer.php');
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    <?php
        include('inc/script.php');
    ?>
</body>

</html>