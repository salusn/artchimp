<?php if ($rows): ?>
  <?php foreach ($view->style_plugin->rendered_fields as $key => $value) { ?>
    <div class="member col-md-12">
      <div class="jikku-author"><?php echo $value['field_author']; ?></div>
      <div class="jikku-date"><?php echo $value['field_date']; ?></div>
      <div class="jikku-title f2 b mt4"><?php echo $value['title']; ?></div>
    </div>
  <?php } ?>
<?php endif;?>
