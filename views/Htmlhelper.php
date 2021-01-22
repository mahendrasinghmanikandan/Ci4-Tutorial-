<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>
	<style type="text/css">
		ul,li,a{

			display: inline;
			padding: 12px;

		}
	</style>
</head>
<body>
<select class="form-control">
       		
	<?php


       foreach ($g as  $value) {  ?>
       	

       		<option><?= $value['email']?></option>

       	


    <?php   }?>



	 
	</select>

</body>
</html>