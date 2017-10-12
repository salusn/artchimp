<?php // Jikku | Working ?>
<?php
  $_start_date = $node->field_exhibition_date['und']['0']['value'];
  $_end_date = $node->field_exhibition_date['und']['0']['value2'];

  $date_range = formatted_date_range($_start_date, $_end_date);
  $location = $node->field_location_new['und']['0']['value'];
  $isDetailPage = $page
?>

<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">
        <?= render($title_prefix) ?>
        <?php if (!$isDetailPage): ?>
          <div class="<?= $isDetailPage ? "post-img" : ""; ?>">
            <?= render($content['field_photo']);?>
          </div>
          <div class="jikku-meta lh-solid mt3 mb5">
          <div class="jikku-location ttu b black-60"><?= $location ?></div>
            <div class="jikku-title f2 b black-80 mt2 mb3">
              <a href="<?= $node_url ?>">
                <?= $title ?>
              </a>
            </div>
            <div><?= $date_range ?></div>
          </div>
        <?php endif; ?>

        <?= render($title_suffix) ?>
        <code class="jikku-debug"><?= $title_suffix ?></code>

        <?php if ($isDetailPage) : ?>
          <div class="row mb6">
            <div class="col-md-8">
              <div class="<?php echo ($isDetailPage) ? "post-img" : ""; ?>">
                <?php print render($content['field_photo']);?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="ttu black-40 b"><?= $location ?></div>
              <div class="mb4"><?= $date_range ?></div>
              <div class=""><?= render($content['body'])?></div>
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
