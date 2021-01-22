<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>

</head>
<body>
<div class="container d-flex justify-content-center" style="margin-top:10%">
	 <div class="col-md-6">
	 		
	 </div>
 <form class="col-md-6" method="post" action="<?php echo base_url('Crud/Update') ?>/<?=$post['id'] ?>">
 	<div class="form-group">
 		<input type="text" name="name" value="<?=$post['name'] ?>" class="form-control" placeholder="enter your name">
 	</div>

 	<div class="form-group">
 		<input type="submit" value="Update" class="btn btn-block btn-outline-success">
 	</div>
 </form>
 </div>
</body>
</html>