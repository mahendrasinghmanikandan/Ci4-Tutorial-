<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>
</head>
<body class="bg-light">
<div class="container  d-flex justify-content-center">
	<form method="post" class="jumbotron border bg-white shadow-lg  col-md-4" style="margin-top:20%;" autocomplete="off" action="<?php echo base_url("Login") ?>">
		<h5 class="text-center text-info">Login Here</h5>

        <?php if(isset($name)){  ?>
		<?php if(session()->has("name")){ ?>
        <div class="alert alert-danger"><?= session()->getFlashdata("name") ?></div>
		<?php } ?>
        <?php } ?>

        <?php if(isset($pass)){ ?>
		<?php if(session()->has("pass")){ ?>
        <div class="alert alert-danger"><?= session()->getFlashdata("pass") ?></div>
		<?php } ?>
		<?php } ?>
		
		<div class="form-group">
			<input type="text" name="name" placeholder="Enter the user name" class="form-control" value="<?=set_value("name") ?>">
		</div>

		<div class="form-group">
			<input type="text" name="pass" placeholder="Enter the user password" class="form-control" value="<?=set_value("pass") ?>">
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn btn-block btn-primary">
		</div>
	</form>
</div>
</body>
</html>