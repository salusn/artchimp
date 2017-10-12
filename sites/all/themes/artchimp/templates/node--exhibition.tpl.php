<?php // Jikku | Working ?>
<?php
  $start_date = $node->field_exhibition_date['und']['0']['value'];
  $end_date = $node->field_exhibition_date['und']['0']['value2'];

  $date_range = formatted_date_range($start_date, $end_date)
?>

<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <code>
    <?php echo json_encode(get_object_vars($node->field_location_new())); ?>
  </code>
  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">
        <?php print render($title_prefix);?>
        <?php if (!$page): ?>
          <div class="<?php echo ($page) ? "post-img" : ""; ?>">
            <?php print render($content['field_photo']);?>
          </div>
          <div class="jikku-meta lh-solid mt3 mb5">
            <div class="jikku-location ttu b black-60">Hardcoded Location</div>
            <div class="jikku-title f2 b black-80 mt2 mb3">
              <a href="<?php print $node_url; ?>">
                <?php print $title;?>
              </a>
            </div>
            <div><?php echo $date_range; ?></div>
          </div>
        <?php endif; ?>

        <?php print render($title_suffix);?>

        <?php if ($page): ?>
          <div class="row mb6">
            <div class="col-md-8">
              <div class="<?php echo ($page) ? "post-img" : ""; ?>">
                <?php print render($content['field_photo']);?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="m22t4">
                <div class="ttu black-40 b"><?php print render($content['field_location_new']);?></div>
                <div class=""><?php print formatted_date_range($start_date, $end_date)?></div>
                <div class=""><?php print render($content['body'])?></div>
              </div>
            </div>
          </div>
            <hr class="mt-0 mb-0">
             <h3>Artists</h3>
              <?php print views_embed_view('list_exhibitions', 'block_2');?>
              <hr class="mt-0 mb-0">
              <h3>Selected Works</h3>
              <?php print views_embed_view('list_works', 'block_3');?>
          </div>
        <?php endif;?>

    </div>
  </div>
</div>
