<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php
        include('inc/link.php');
    ?>
    <style type="text/css">
      body{
        display: flex;
        position: absolute;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;
      }
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
        <div class="card-row col-12 col-lg-6 offset-lg-3">
          <div class="card shadow-lg" style="margin: 10% auto;">
               <div class="card-header bg-primary text-white text-center" style="font-size: 40px;">
                   <div>Forgot Password</div>
               </div>
               <div class="card-body mt-5">
                    <form>
                        <div class="form-group">
                        <label for="emailadd">Email address</label>
                        <input type="email" class="form-control" id="emailadd" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Reset-Password</button>
                    </form>
               </div>
           </div>
        </div>
       </div>
   </div>
    <?php
        include('inc/script.php');
    ?>
</body>

</html>