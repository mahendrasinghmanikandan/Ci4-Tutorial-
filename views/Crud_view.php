<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>

</head>
<body>
<div class="container d-flex justify-content-center" style="margin-top:10%">
	 <div class="col-md-6">
	 	<?php  if(isset($values)) { $e=0; ?>

	 	<table class="table">
	 		<tr>
	 			<td>S.No</td>
	 			<td>Name</td>
	 			<td>Delete</td>
	 			<td>Update</td>
	 		</tr>
       <?php foreach($values as $datas){ $e++ ?>
       	    <tr>
	 			<td><?= $e ?></td>
	 			<td><?= $datas['name'] ?></td>
	 			<td><a class="text-danger" href="<?php echo base_url('Crud/Delete') ?>/<?= $datas['id'] ?>">Delete</a></td>
	 			<td><a class="text-Success" href="<?php echo base_url('Crud/Update') ?>/<?= $datas['id'] ?>">Update</a></td>
	 		</tr>
       <?php } ?>
       </table>
	   <?php } ?>		
	 </div>
 <form class="col-md-6" method="post" action="<?php echo base_url('Crud') ?>">
 	<div class="form-group">
 		<input type="text" name="name" class="form-control" placeholder="enter your name">
 	</div>

 	<div class="form-group">
 		<input type="submit" value="Save" class="btn btn-block btn-outline-success">
 	</div>
 </form>
 </div>
</body>
</html>