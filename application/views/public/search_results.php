<?php include('public_header.php'); ?>
<div class="container">
	<h1>Search Results</h1>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Sr No</th>
				<th scope="col">Aricle Title</th>
				<th scope="col">Published On</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<? if(count($articles)): ?>
			<?php $count=$this->uri->segment(4,0); ?>
			<?php foreach ($articles as $article): ?>
				<td><?= ++$count; ?></td>
				<td><?= $article->title; ?></td>
				<td><?= "Date" ?></td>
			</tr>
			<?php endforeach; ?>
			<? endif; ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>
</div>
<?php include('public_footer.php'); ?>

