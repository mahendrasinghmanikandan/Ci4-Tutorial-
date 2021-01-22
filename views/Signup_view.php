<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>
</head>
<body class="bg-light">
<div class="container  d-flex justify-content-center">
	<form method="post" class="jumbotron border bg-white shadow-lg  col-md-4" style="margin-top:20%;" autocomplete="off" action="<?php echo base_url("Signup") ?>">
		<h5 class="text-center text-info">Register Here</h5>

		<?php if(session()->has("error")){ ?>
        <div class="alert alert-danger"><?= session()->getFlashdata("error") ?></div>
		<?php } ?>
		
		<div class="form-group">
			<input type="text" name="name" placeholder="Enter the user name" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="pass" placeholder="Enter the user password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Signup" class="btn btn-block btn-primary">
		</div>
	</form>
</div>
</body>
</html>