<?php if ($rows): ?>
<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {?>
<div class="member col-md-3 col-sm-3">
    <div class="member-image">
      <?php echo $value['field_photo'] ?>
    </div>
    <h3><?php echo $value['title'] ?></h3>
    <span>VP ENGINEERING</span>
</div>
<?php }?>
<?php endif;?>