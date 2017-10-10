<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix" <?php print $attributes;?>>
  <div class="content" <?php print $content_attributes;?>>
    <div class="blog-post">

        <?php if ($page) : ?>

      <div class="row">
        <div class="col-md-3">
          <div class="post-img">
            <?php print render($content[ 'field_photo']);?>
          </div>
        </div>
        <div class="col-md-9">
          <div class="post-prev-info">
            <div class="field field-label-inline clearfix">
              <div class="field-label">Name:&nbsp;</div>
              <div class="field-items">
                <?php print $node->title . ' ';?>
                <?php if (isset($node->field_lastname['und'])) : ?>
                <?php print $node->field_lastname['und'][0]['value'];?>
                <?php endif;?>
              </div>
            </div>

            <?php print render($content[ 'field_date_of_birth']);?>
            <?php print render($content[ 'field_location']);?>
            <?php print render($content[ 'field_website']);?>

          </div>
          <div class="post-text">
            <?php print render($content[ 'body']);?>
          </div>
        </div>
      </div>

      <hr class="mt-0 mb-20">

      <h3>Exhibitions</h3>
        <?php print views_embed_view('list_exhibitions', 'block_1');?>

      <hr class="mt-0 mb-20">
      <h3>Works</h3>
        <?php print views_embed_view('list_works', 'block_1');?>


        <?php endif; ?>

        <?php //if (!$page): ?>

      <!-- <div class="post-prev-img">VP ENGINEERING
        <?php //print render($content['field_photo']);?>
    </div> -->


      <!-- <div class="post-prev-title mb-5">
    <h3<?php //print $title_attributes;?>><a href="<?php //print $node_url;?>"><?php //print $title;?></a></h3>
    </div> -->

        <?php //endif ;?>

    </div>
  </div>
</div>
