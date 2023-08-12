<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
        include('inc/connection.php');
    ?>
    <style type="text/css">
        body{
            height: 100vh;
            width: 100vw;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .fa-eye{
            position: relative;
            left: 93%;
            bottom: 30px;
            cursor: pointer;
            outline: none;
            border: none;
            background: transparent;
        }
        .fa-eye:focus{
            outline: none;
            border: none;
        }
        @media screen and (min-width: 0px) and (max-width: 400px){
            .fa-eye{
                left: 90%;
            }
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
   <div class="container">
       <div class="row">
        <div class="card_row col-12 col-lg-6 offset-lg-3">
            <div class="card shadow-lg">
               <div class="card-header bg-primary text-white text-center" style="font-size: 40px;">
                   <div>Signup here</div>
               </div>
               <div class="card-body mt-5">
                    <form method="post" action="submit/submit_admin.php">
                        <div class="form-group">
                        <label for="txtname">Full Name</label>
                        <input type="text" class="form-control" id="txtname" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                        <label for="emailadd">Email address</label>
                        <input type="email" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                        <button type="button" class="fas fa-eye" onclick="eye();"></button>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary mt-2 col-6 offset-3" style="font-size: 20px;">Signup</button>
                    </form>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Already a Member?<a href="login.php" class="ml-2">Login</a></span>
                    </div>
               </div>
           </div>
        </div>
       </div>
   </div>
     
    <?php
        include('inc/script.php');
    ?>
    <script type="text/javascript">
        function eye(){
           var eye = document.getElementById('eye');
        var pass = document.getElementById('password');

        if (pass.type === "password") {
            pass.type = "text";
        } 
        else{
            pass.type = "password";
        }
        }
    </script>
</body>

</html>