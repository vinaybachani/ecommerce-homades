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
<style type="text/css">
    .fa-eye{
        position: relative;
        left: 97%;
        bottom: 30px;
        cursor: pointer;
    }
</style>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-power-off fa-lg" style="color: blue"></i>
                                <h4 class="card-title ml-1" style="display: inline;">Change-Password Page</h4>
                                <h5 class="card-subtitle" style="margin-top: 10px;">Here You can change your password</h5>
                                <div class="table-responsive">
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
                <div class="row">
                    <div class="col-8 offset-2">
                        <form>
                            <div class="form-group">
                                <label for="currentpassword">Current Password</label>
                                <input type="password" class="form-control" id="currentpassword" aria-describedby="emailHelp" placeholder="Enter Current Password">
                                <i class="fas fa-eye" id="eye" onclick="toggle()"></i>
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password">
                                <i class="fas fa-eye" id="eye1" onclick="toggle1()"></i>
                            </div>
                           <div class="form-group">
                                <label for="confirmnewpassword">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmnewpassword" placeholder="Enter New Password">
                                <i class="fas fa-eye" id="eye2" onclick="toggle2()"></i>
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
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
    <script type="text/javascript">
        function toggle(){
            var pass = document.getElementById('currentpassword');
            var eye = document.getElementById('eye');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }

        function toggle1(){
            var pass = document.getElementById('newpassword');
            var eye = document.getElementById('eye1');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }

         function toggle2(){
            var pass = document.getElementById('confirmnewpassword');
            var eye = document.getElementById('eye2');

            if (pass.type === "password") {
                pass.type = "text";
            }
            else{
                pass.type = "password"
            }
        }
    </script>
</body>

</html>