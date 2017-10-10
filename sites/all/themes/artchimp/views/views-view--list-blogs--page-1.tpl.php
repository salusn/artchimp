<?php if ($rows): ?>
<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	//print_r($value);exit;
	?>
<div class="member col-md-4">
    <div class="member-image">
        <?php echo $value['field_author'] ?>

    </div>
    <div class="member-image">
    <?php echo $value['field_date'] ?>
    </div>
    <div class="f2 b mt4"><?php echo $value['title']; ?></div>
    <div class="f2 b mt4"><?php echo $value['title']; ?></div>
</div>
<?php
}?>
<?php endif;?>