<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
        include('inc/connection.php');
        $isExit = true;
        try{
            extract($_REQUEST);
            $sql = "select title,photo,islive from category where id=?";
            $st = $db->prepare($sql);
            $st->bindparam(1,$id);
            $st->execute();
            $row = $st->fetch();
            extract($row);
        }
        catch(PDOException $error){
            LogError($error);
        }   
    ?>
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
           <div class="row">
                <div class="col-12 p-3 bg-primary text-white text-center" style="font-size: 25px;">Update-category</div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="submit/update_category.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" data-placement="left"
                                        title="Enter title for Product" data-toggle="tooltip" name="title" value="<?php echo $title; ?>">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="image">Product Image</label>
                                        <fieldset>
                                        <input type="file" class="form-control-file" id="image" data-placement="left" title="Choose img for Product" data-toggle="tooltip" name="image">
                                        <img src="images/categories/<?php echo $photo;?>" width="250px" height="200px" class="mt-2">
                                        </fieldset>
                                    </div>
                                    <label class="mt-4">Islive</label><br/> 
                                    <?php
                                        $yes = "checked = 'checked'";
                                        $no = null;
                                        if($islive==0){
                                            $yes = null;
                                            $no = "checked = 'checked'";
                                        }
                                    ?>   
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rdoislive" id="rdo1" value="1" <?php echo $yes;?>>
                                        <label class="form-check-label" for="rdo1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rdoislive" id="rdo2" value="0" <?php echo $no;?>>
                                        <label class="form-check-label" for="rdo2">No</label>
                                    </div><br/>
                                    <button type="submit" class="btn btn-outline-success mt-4" style="padding: 5px 25px;" id="update">Update</button>
                                    <input type=hidden name=id value="<?php echo $id; ?>" />
                                    <!--<input type="hidden" name=oldphoto id="oldphoto" value="<?php echo $photo; ?>"/>-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
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