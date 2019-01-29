<?php include('admin_header.php'); ?>
<!--login form-->
<div class="container">
	<h1>Edit Article Form</h1>
	<hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php echo form_error('Title');?>
      <?php echo form_error('Body');?>
    </div>
  </div>
  <?php echo form_open("admin/update_article/{$article->id}"); ?>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Article Title</label>
    <div class="col-sm-4">
    	<?php echo form_input(['name'=>'Title','class'=>'form-control','placeholder'=>'Enter Article Title','value'=>set_value('Title',$article->title)]); ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Article Body</label>
    <div class="col-sm-4">
      <?php echo form_textarea(['name'=>'Body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('Body',$article->body)]); ?>
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