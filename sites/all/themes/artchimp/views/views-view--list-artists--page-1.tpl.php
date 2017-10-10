<?php if ($rows) : ?>

<?php foreach ($view ->style_plugin->rendered_fields as $key => $value) { ?>
  <div class="col-md-3 col-sm-3">
    <div class=""> <?php echo $value['field_photo'] ?> </div>

    <?php $full_name = $value['title'] . ' ' . $value['field_lastname']; ?>

    <h2 class="mt3 b"><?php echo $full_name; ?></h2>
  </div>
<?php } ?>

<?php endif; ?>
