<?php // Jikku | Working ?>
<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">

      <div class="jikku-meta lh-solid mt3 mb5">



        <?php print render($title_prefix);?>
        <?php if (!$page): ?>

                <div class="<?php echo ($page) ? "post-img" : ""; ?>">
        <?php print render($content['field_photo']);?>
      </div>

          <div class="jikku-location ttu b black-60">Hardcoded Location</div>
          <div class="jikku-title f2 b black-80 mt2 mb3">
            <a href="<?php print $node_url;?>">
              <?php print $title;?>
            </a>
          </div>
        <?php endif;?>
        <?php print render($title_suffix);?>
        <?php
$start_date = $node->field_exhibition_date['und']['0']['value'];
$end_date = $node->field_exhibition_date['und']['0']['value2'];

?>
      </div>
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
          <?php if (isset($user->roles[3]) || isset($user->roles[4])) {?>
          <a href="<?php echo url('settings/exhibition/' . $node->nid) ?>">Add Works</a>
        <?php }?>
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
