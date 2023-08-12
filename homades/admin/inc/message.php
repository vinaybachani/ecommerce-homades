<?php 
	if(isset($_REQUEST['result'])==true)
	{
		if($_REQUEST['result']==1)
		{
			$ClassName = "alert alert-success";
		}
		else 
			$ClassName = "alert alert-danger";
		
	?>
	<div class="alert <?php echo $ClassName; ?>" role="alert" alert-dismissible fade show>
	<?php echo  $_REQUEST['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
	</div>
<?php 
	}
?>