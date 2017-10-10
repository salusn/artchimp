<?php // // Jikku Jose : Artist details page.Artist listing page is views-view--list-artists--page-1.tpl.php(You already added changes here.)?>
<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix" <?php print $attributes;?>>
  <div class="content" <?php print $content_attributes;?>>
    <div class="blog-post">

        <?php if ($page): ?>

      <div class="row">
        <div class="col-md-4">
          <div class="post-img">
            <?php print render($content['field_photo']);?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="post-text">
            <?php print render($content['body']);?>
          </div>
        </div>
      </div>

      <hr class="mt-0 mb-20">

      <h3>Exhibitions</h3>
        <?php print views_embed_view('list_exhibitions', 'block_1');?>

      <hr class="mt-0 mb-20">
      <h3>Works</h3>
        <?php print views_embed_view('list_works', 'block_1');?>


        <?php endif;?>

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
