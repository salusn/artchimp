<?php if ($rows): ?>
<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	//print_r($value);exit;?>
<div class="member col-md-3 col-sm-3">
    <div class="member-image">
      <?php echo $value['field_photo'] ?>
    </div>
    <?php
$firstname = $value['title'] . ' ' . $value['field_lastname'];

	?>
    <h3><?php echo $firstname; ?></h3>
    <span>Painter</span>
</div>
<?php }?>
<?php endif;?>
