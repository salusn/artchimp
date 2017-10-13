<?php if ($rows): ?>
  <?php foreach ($view->style_plugin->rendered_fields as $key => $value) {?>
    <div class="jikku-row row mb5">
      <div class="jikku-column col-md-12">
        <div class="ph3 pl0-ns">
          <div class="jikku-title f2 b"><?php echo $value['title']; ?></div>
          <div class="jikku-meta flex">
            By
            <div class="jikku-author ph2 b"><?php echo $value['field_author']; ?></div>
            on
            <div class="jikku-date ph2 b"><?php echo $value['field_date']; ?></div>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
<?php endif;?>
