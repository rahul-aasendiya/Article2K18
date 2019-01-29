<?php include('admin_header.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			<?= anchor('admin/store_article','Add Article',['class'=>'btn btn-lg btn-primary pull-right']); ?>
			<!--a href="" class="btn btn-lg btn-primary pull-right">Add Article</a-->
		</div>
	</div>
	<div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
		    <?php if($feedback = $this->session->flashdata('feedback')):
		    	$feedback_class = $this->session->flashdata('feedback_class');
		     ?>
		      <div class="alert alert-dismissible <?= $feedback_class; ?>">
		          <?php echo $feedback; ?>
		      </div>
		    <?php endif;?>
		    <?php echo form_error('Username');?>
		    <?php echo form_error('Password');?>
		  	</div>
		</div>
	</div>
	<table class="table">
		<thead>
			<th>Sr No.</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php  if(count($articles)):
				$count=$this->uri->segment(3);
				foreach ($articles as $article): ?>
			<tr>
				<td><?= ++$count; ?></td>
				<td>
					<?= $article->title; ?>
				</td>
				<td>
					<div class="row">
						<div class="col-lg-2">
							<!--?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-default']); ?-->
							<a href="<?php echo site_url('admin/edit_article/' . $article->id); ?>"><button class="btn btn-default">Edit</button></a>
						</div>
						<div class="col-lg-2">
							<?=
								form_open('admin/delete_article'),
								form_hidden('article_id',$article->id),
								form_submit(['name'=>'submit','value'=>'delete','class'=>'btn btn-danger']),
								form_close();
							?>
						</div>
					</div>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="3" align="center">
					No records found!
				</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
<nav aria-label="Page navigation example">
	<?= $this->pagination->create_links(); ?>
</nav	
</div>
<?php include('admin_footer.php'); ?>