<!DOCTYPE html>
<html>
<head>
	<title>DB</title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>
</head>
<body class="bg-light">
<div class="container  d-flex justify-content-center">
	<form method="post" class="jumbotron border  shadow-lg  col-md-4" style="margin-top:20%;" autocomplete="off">
		<div class="form-group">
			<input type="text" name="name" placeholder="Enter the user name" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="pass" placeholder="Enter the user password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Add" class="btn btn-block btn-primary">
		</div>
	</form>
</div>
</body>
</html>