<?php include('admin_header.php'); ?>
<!--login form-->
<div class="container">
	<h1>Add Article Form</h1>
	<hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php echo form_error('Title');?>
      <?php echo form_error('Body');?>
      <?php if (isset($upload_error)) echo $upload_error  ?>
    </div>
  </div>
  <?php echo form_open_multipart('admin/store_article',['class'=>'forn-horizontal']); ?>
  <?php echo form_hidden('created_at',date('Y-m-d h:i:s')); ?>

  <div class="form-group row">
    <label for="Title" class="col-sm-2 col-form-label">Article Title</label>
    <div class="col-sm-4">
    	<?php echo form_input(['name'=>'Title','class'=>'form-control','placeholder'=>'Enter Article Title','value'=>set_value('Title')]); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="Body" class="col-sm-2 col-form-label">Article Body</label>
    <div class="col-sm-4">
      <?php echo form_textarea(['name'=>'Body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('Body')]); ?>
    </div>
  </div>

  <div class="form-group row">
    <label for="userfile" class="col-sm-2 col-form-label">Select Image</label>
    <div class="col-sm-4">
      <?php echo form_upload(['name'=>'fileimage','class'=>'form-control']); ?>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-4">
    	<?php echo form_reset(['name'=>'Reset','value'=>'Reset','class'=>'btn btn-default']), 
    		form_submit(['name'=>'Submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
    </div>
  </div>
</form>
</div>
<!--login form-->
<?php include('admin_footer.php'); ?>