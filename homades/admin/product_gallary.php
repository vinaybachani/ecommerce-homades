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
        <?php
            include('inc/menu.php');
        ?>
        <div class="page-wrapper">
            <div class="container">
               <div class="row">
                <div class="col-12 bg-primary text-white text-center p-3" style="font-size: 30px;">Products Gallary</div>
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
                    <img src="cake.jpg" alt="img not found" class="col-6 col-lg-3 col-md-4 mt-3">
               </div>
           </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
                include('inc/footer.php');
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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
</body>

</html>