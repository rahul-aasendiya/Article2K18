<?php include('public_header.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10">
			<h3><?= $article->title;?></h3>
		</div>
		<div class="col-lg-2">
			<?= date('d M y h:i:s',strtotime($article->created_at)); ?>
		</div>
	</div>
	<?php if(! is_null($article->image_path )): ?>
	<img src="<?= $article->image_path ?>">
	<?php  endif; ?>
	<hr>	
	<p><?= $article->body;?></p>
</div>
<?php include('public_footer.php'); ?>