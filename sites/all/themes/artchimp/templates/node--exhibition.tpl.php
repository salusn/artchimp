<?php // Jikku | Working ?>
<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">
      <div class="<?php echo ($page) ? "post-img" : ""; ?>">
        <?php print render($content['field_photo']);?>
      </div>
      <div class="jikku-meta">
        <?php print render($title_prefix);?>
        <?php if (!$page) : ?>
          <div class="jikku-location">Hardcoded Location</div>
          <div class="jikku-title">
            <a href="<?php print $node_url;?>">
              <?php print $title;?>
            </a>
          </div>
        <?php endif; ?>
        <?php print render($title_suffix);?>
        <?php
          function date_markup($range) {
            return "<div class='jikku-date'>$range</div>";
          }

          $start_date = date("d F", strtotime($node->field_exhibition_date['und']['0']['value']));
          $end_date = date("d F Y", strtotime($node->field_exhibition_date['und']['0']['value2']));
          $range = "$start_date — $end_date";

          echo date_markup($range);
        ?>
      </div>
        <?php if ($page) : ?>
          <div class="jikku-delete">
            <?php
              hide($content['comments']);
              hide($content['links']);
              hide($content['body']);
              hide($content['field_artist_id']);
              print render($content);
            ?>
          </div>
          <div class="post-text">
            <?php print render($content['body']);?>
          </div>
        <?php if (isset($user->roles[3]) || isset($user->roles[4])) { ?>
          <a href="<?php echo url('settings/exhibition/' . $node->nid) ?>">Add Works</a>
        <?php } ?>
          <hr class="mt-0 mb-0">
           <h3>Artists</h3>
            <?php //print views_embed_view('list_exhibitions', 'block_2');?>
            <hr class="mt-0 mb-0">
            <h3>Selected Works</h3>
            <?php print views_embed_view('list_works', 'block_3');?>
        <?php endif;?>

    </div>
  </div>
</div>
