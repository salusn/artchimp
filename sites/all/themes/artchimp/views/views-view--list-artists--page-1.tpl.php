<?php if ($rows) : ?>
<?php foreach ($view
    ->style_plugin->rendered_fields as $key => $value) {
?>
<div class="member col-md-4 col-sm-3">
    <div class="member-image">
        <?php echo $value['field_photo'] ?>
    </div>
    <?php
    $firstname = $value['title'] . ' ' . $value['field_lastname'];
?>
    <div class="f1 b mt4"><?php echo $firstname; ?></div>
</div>
<?php
} ?>
<?php
endif; ?>
