<?php if ($rows): ?>
	<div class="row mt6 mb0-ns mb4">
	<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	?>
		<div class="col-md-8">
			<a href="<?php print $value['path']?>"><img src="<?php print $value['field_photo']?>" class="img-responsive-front" /></a>
		</div>
		<div class="col-md-4">
      <div class="mt4">
        <div class="ttu black-40 b"><?php print $value['field_location_new']?></div>
        <div class="f2 b"><?php print $value['title']?></div>
        <div class="mb3">April 23 — May 4, 2017</div>
        <div class=""><?php print $value['field_exhibition_date']?></div>
        <div class=""><?php print $value['body']?></div>
      </div>
		</div>
	<?php }?>
	</div>
<?php endif;?>
