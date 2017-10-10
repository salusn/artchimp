<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>

  <div class="content"<?php print $content_attributes;?>>
     <?php global $user;?>
  <div class="blog-post">
        <div class="<?php echo ($page) ? "post-img" : "post-prev-img"; ?>">

         <?php print render($content['field_photo']);?>
       </div>

       <?php print render($title_prefix);?>

       <?php if (!$page): ?>
         <div class="post-prev-title mb-5">
         <?php if ($user->roles[4]) {?>
          <h3<?php print $title_attributes;?>><a href="<?php echo url('node/' . $node->nid . '/edit') ?>"><?php print $title;?></a></h3>
          <?php } else {?>
         <h3<?php print $title_attributes;?>><a href="<?php print $node_url;?>"><?php print $title;?></a></h3><?php }?>
       </div>
       <?php endif;?>
       <?php print render($title_suffix);?>

        <div class="post-prev-info">
          <?php
// We hide the comments and links now so that we can render them later.
hide($content['comments']);
hide($content['links']);
hide($content['body']);
hide($content['field_artist_id']);
print render($content);
?>
        </div>
        <?php if ($page): ?>
          <hr class="mt-0 mb-0">
          <?php print render($content['field_artist_id']);?>
        <?php endif;?>

    </div>

  </div>
</div>
