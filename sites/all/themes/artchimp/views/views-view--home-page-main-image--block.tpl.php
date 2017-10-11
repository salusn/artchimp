<?php if ($rows): ?>
	<div class="row">
	<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	?>
		<div class="col-md-8">
			<a href="<?php print $value['path']?>"><img src="<?php print $value['field_photo']?>" class="img-responsive-front" /></a>
		</div>
		<div class="col-md-4">
			<h1><?php print $value['title']?></h1>
			<p><?php print $value['field_exhibition_date']?></p>
			<?php print $value['body']?>
			<p><?php print $value['field_location_new']?></p>
		</div>
	<?php }?>
	</div>
<?php endif;?>
<br>
<br>
<br>