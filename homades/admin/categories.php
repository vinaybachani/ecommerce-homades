<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
        include('inc/connection.php');
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
                                <i class="fas fa-bookmark fa-lg" style="color: blue"></i>
                                <h4 class="card-title ml-1" style="display: inline;">Category-Page</h4>
                                <h6 class="card-subtitle" style="margin-top: 10px;">Here you can either update or delete the category</h6>
                                <div class="row">
                                    <div class="current_categories col-12 text-center bg-primary text-white p-3" style="font-size: 25px;">Add Categories</div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="submit/insert_category.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group mt-4">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" data-placement="left" title="Enter title for Product" data-toggle="tooltip" name="title">
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <label for="image">Product Image</label>
                                                        <fieldset>
                                                        <input type="file" class="form-control-file" id="image" data-placement="left"
                                                        title="Choose img for Product" data-toggle="tooltip" name="image">
                                                        </fieldset>
                                                    </div>
                                                    <label class="mt-4">Islive</label><br/>    
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rdoislive" id="rdo1" value="1">
                                                        <label class="form-check-label" for="rdo1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="rdoislive" id="rdo2" value="0">
                                                        <label class="form-check-label" for="rdo2">No</label>
                                                    </div><br/>
                                                    <button type="submit" class="btn btn-outline-success mt-4" style="padding: 5px 25px;" name="insertbtn">Add</button>
                                                    <button type="reset" class="btn btn-outline-danger mt-4" style="padding: 5px 25px; margin-left: 10px;">Reset</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--the modal-->
                                <div class="current_categories col-12 text-center bg-primary text-white p-3" style="font-size: 25px;">Current Categories</div>
                                <div class="table-responsive mt-2" id="mycont">
                                    <table id="zero_config" class="table table-hover table-borderless no-wrap">
                                        <thead>
                                            <tr>
                                                <th>sr.no</th>
                                                <th>Title</th>
                                                <th>Photo</th>
                                                <th>Islive</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try{
                                                //build query 
                                                $sql = "select id,title,photo,islive from category order by islive desc";
                                        
                                            //prepare query execution plan
                                                $st = $db->prepare($sql);
                                        
                                            //execute query 
                                                $st->execute();
                                        
                                            //fetch record from table one by one 
                                                $count=1;
                                                while($row = $st->fetch()) //fetch single row from table and return row as associative array 
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo $count++?></td>
                                                <td><?php echo $row['title']?></td>
                                                <td>
                                                    <img src="images/categories/<?php echo $row['photo'];?>" width="250px" height="200px">
                                                </td>
                                                <td>
                                                    <?php
                                                        if($row['islive']==1)
                                                            echo "yes";
                                                        else
                                                            echo "no";
                                                    ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-danger" href="delete_category.php?id=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a class="btn btn-outline-success" href="edit_category.php?id=<?php echo $row['id']; ?>" style="margin-left: 5px;">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                }//end of while
                                            }//end of try
                                            catch(PDOException $error){
                                                LogError($error,$FileName,0);
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->   

            <!--upade form start-->
            
            <!--update form end-->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
    <script>
        var cont = document.getElementById("mycont");
        var cont2 = document.getElementById("mycont2");
        function update(){
            cont.style.display = "none";
            cont2.style.display = "block";
        }
    </script>
</body>

</html>