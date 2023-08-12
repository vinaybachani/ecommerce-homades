<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
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
        /*.card{
            position: relative;
            height: 100%;
            top: 50%;
            transform: translateY(-28%);
        }*/
        .fa-eye{
            position: relative;
            left: 95%;
            bottom: 30px;
            cursor: pointer;
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
                   <div>Login here</div>
               </div>
               <div class="card-body mt-5">
                    <form>
                        <div class="form-group">
                        <label for="emailadd">Email address</label>
                        <input type="email" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <i class="fas fa-eye" id="eye" onclick="eye()"></i>
                        </div>
                        <div class="form-group form-check col-12 text-right">
                            <a href="forgot_password.php">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 col-6 offset-3" style="font-size: 20px;">Sign in</button>
                    </form>
                    <div class="not_a_member col-12 mt-4 text-center">
                        <span>Not a Member?<a href="signup.php" class="ml-2">Signup</a></span>
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