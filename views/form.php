<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<?php echo link_tag(base_url('boot/css/bootstrap.css')) ?>

	<?php echo script_tag(base_url('boot/js/jquery.js')) ?>

	<?php echo script_tag(base_url('boot/js/bootstrap.bundle.js')) ?>
</head>
<body>

  <div class="jumbotron m-5 container bg-white shadow-lg">

    <?php if (isset($vresult)): ?>
    	
    <div class="alert alert-danger">
  		<?= $vresult->listErrors() ?>
  	</div>

    <?php endif ?>
  	  	
    <form method="post" autocomplete="off" class="col-md-12  d-flex" action="<?php echo base_url('Home/form') ?>" >
    	<div class="col-md-6">

    		<div class="form-group">
    			<input type="text" name="name" value="<?= set_value('name') ?>" placeholder="Enter user name" class="form-control">
    		</div>

    		<div class="form-group">
    			<input type="text" name="email" value="<?= set_value('email') ?>"  placeholder="Enter your email" class="form-control">
    		</div>

    		<div class="form-group">
    			<select class="form-control" name="sdata">
    				<option value="1" <?= set_select('sdata','1',true) ?>>1</option>
    				<option value="2" <?= set_select('sdata','2') ?>>2</option>
    			</select>
    		</div>

            <div class="form-group">
    			<input type="reset" value="reset" class="btn btn-danger btn-block">
    		</div>
    	</div>

    	<div class="col-md-6">
    		
             <div class="form-group">
    			<input type="text" name="pass1"  value="<?= set_value('pass1') ?>" placeholder="Enter password" class="form-control">
    		</div>

    		<div class="form-group">
    			<input type="text" name="pass2"  value="<?= set_value('pass2') ?>" placeholder="Enter password again" class="form-control">
    		</div>

    		<div class="form-group">
    			<input type="radio" <?= set_radio('r1','Yes',true) ?> name="r1" value="yes">Yes
    			<input type="radio" <?= set_radio('r1','No') ?> name="r1" value="No">No
    		</div>

    		<div class="form-group">
    			<input type="checkbox" name="r2" <?= set_radio('r2','america',true) ?> value="america">america
    			<input type="checkbox" <?= set_radio('r3','turkish') ?> name="r3" value="turkish">turkish
    		</div>

    		<div class="form-group">
    			<input type="submit" value="submit" class="btn btn-success btn-block">
    		</div>

    	</div>
    </form>

  </div>



</body>
</html>