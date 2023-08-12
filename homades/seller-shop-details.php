<!doctype html>
<html class="no-js" lang="en">
 	<head>
 		<style type="text/css">
 			body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        	}
 			a:hover{
 				text-decoration: none!important;
 			}
 			footer a{
 				color: white;
 			}
 			.shpname{
 				background: #e7246d!important;
 			}
 			.btn_submit{
 				border: 2px solid red!important;
 				width: 300px;
 				height: 50px;
 			}
 			.btn_submit:hover,
 			.btn_submit:focus{
 				background: #e7246d;
 				color: #fff;
 			}
 			.btn_submit:focus{
 				outline: none;
 			}
 		</style>
 	<?php  
    	    include('inc/link.php');
 	?>
 	</head>

<body>
	    <div class="container mt-3">
	    	<div class="row">
	    		<div class="card_row col-12 col-lg-8 offset-lg-2">
	    			<div class="card">
	    			<div class="card-header text-white text-center" style="background: #e7246d;font-size: 25px;">Enter your Shop Details</div>
	    			<div class="card-body">
	    			<form action="seller_homepage.php">
	    				<div class="form-group">
	    					<label for="txttitle">Title</label>
                        	<input type="text" class="form-control" name="" id="txttitle" placeholder="Enter Shop Title">
	    				</div>
	    				<div class="form-group">
	    					<label for="txtaddress">Address</label>
                        	<textarea type="text" id="txtaddress" class="form-control" row="3" placeholder="Shop Address"></textarea>
	    				</div>
	    				<div class="form-group">
	    					<label for="txtemail">Email</label>
                        	<input type="text" class="form-control" name="" id="txtemail" placeholder="Enter Shop Email">
	    				</div>
	    				<div class="form-group">
	    					<label class="form-control-label">Choose Category to Sell</label>
		    					<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="cakecheck">
									<label class="form-check-label" for="cakecheck">Cakes</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="chocolatecheck">
									<label class="form-check-label" for="chocolatecheck">Chocolates</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="picklecheck">
									<label class="form-check-label" for="picklecheck">Pickles</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="chcolatejarcheck">
									<label class="form-check-label" for="chcolatejarcheck">Chocolate Jars</label>
								</div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlFile1">Choose logo image for your Shop</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>
	    			</div>
	    			<div class="card-footer bg-white">
						<button type="submit" class="btn_submit col-lg-6 offset-lg-3">Submit Details</button>
					</div>
				</form>
	    		</div>
	    		</div>
	    	</div>
	    </div>
<!-- shop details ends -->
    <?php
    include('inc/script.php')
?>
</body>
<!-- Mirrored from htmldemo.hasthemes.com/flosun-preview/flosun/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 06:18:46 GMT -->
</html>