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

        <?php if (!$page): ?>

     <div class="post-prev-img">
     <?php if (isset($user->roles[4])) {?>
      <a href="<?php echo url('node/' . $node->nid . '/edit') ?>"><?php print render($content['field_photo']);?></a><?php } else {?>
       <a href="<?php echo url('node/' . $node->nid) ?>"><?php print render($content['field_photo']);?></a><?php }?>
    </div>
  <?php
$name = $node->title . ' ' . $node->field_lastname['und']['0']['value']

?>
    <div class="post-prev-title mb-5">
    <?php if (isset($user->roles[4])) {?>
     <h3<?php print $title_attributes;?>><a href="<?php echo url('node/' . $node->nid . '/edit') ?>"><?php print $name;?></a></h3><?php } else {?>
      <h3<?php print $title_attributes;?>><a href="<?php print $node_url;?>"><?php print $name;?></a></h3><?php }?>
    </div>

        <?php endif;?>

    </div>
  </div>
</div>
