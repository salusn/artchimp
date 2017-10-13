<?php if ($rows): ?>
	<div class="row">
    <?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	$photo = $value['field_photo'];
	$name = $value['title'];
	?>
      <div class="col-md-4 col-sm-3 mb5">
          <div class="member-image">
              <?=$photo?>
          </div>
          <div class="f2 b mv3"><?=$name?></div>
      </div>
		<?php }?>
	</div>
<?php endif;?>
