<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
    ?>
    <style type="text/css">
    .fa-eye{
        position: relative;
        left: 95%;
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
   <div class="container">
       <div class="row">
           <div class="card col-6 offset-3 shadow-lg" style="margin: 10% auto;">
               <div class="card-header bg-primary text-white text-center" style="font-size: 40px;">
                   Register here
               </div>
               <div class="card-body mt-5">
                    <form>
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                        <label for="emailadd">Email address</label>
                        <input type="email" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                        <label for="mobno">Mobile Number</label>
                        <input type="number" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <i class="fas fa-eye" id="eye" onclick="eye()"></i>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree to all the conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" style="width: 30%;font-size: 20px;">Sign up</button>
                    </form>
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