<?php include('public_header.php'); ?>
<!--login form-->
<div class="container">
	<h1>Admin Login</h1>
	<hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php if($error = $this->session->flashdata('login_failed')): ?>
        <div class="alert alert-dismissible alert-danger">
            <?php echo $error; ?>
        </div>
      <?php endif;?>
      <?php echo form_error('Username');?>
      <?php echo form_error('Password');?>
    </div>
  </div>
  <?php echo form_open('login/admin_login'); ?>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
    	<?php echo form_input(['name'=>'Username','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value('Username')]); ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <?php echo form_password(['name'=>'Password','class'=>'form-control','placeholder'=>'Password']); ?>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-4">
    	<?php echo form_reset(['name'=>'Reset','value'=>'Reset','class'=>'btn btn-default']), 
    		form_submit(['name'=>'Submit','class'=>'btn btn-primary','value'=>'Login']); ?>
    </div>
  </div>
</form>
</div>
<!--login form-->
<?php include('public_footer.php'); ?>