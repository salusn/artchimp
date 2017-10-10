<?php // Jikku Jose : Exhibition detail page and details page ?>
<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>

  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">

        <div class="<?php echo ($page) ? "post-img" : "post-prev-img"; ?>">
         <?php print render($content['field_photo']);?>
       </div>
      <?php //NB:exhibition listing?>
       <?php print render($title_prefix);?>
       <?php if (!$page): ?>
         <div class="post-prev-title mb-5">
         <h3<?php print $title_attributes;?>>
         <a href="<?php print $node_url;?>"><?php print $title;?></a>
         </h3>
       </div>
       <?php endif;?>
        <?php //end exhibition listing?>

         <?php //NB:exhibition detail?>
       <?php print render($title_suffix);?>
       <div class="shop-price-cont">
         <?php echo render($content['field_location_new']); ?>
       </div>
<?php
$startDate = date("d F", strtotime($node->field_exhibition_date['und']['0']['value']));
$endDate = date("d F Y", strtotime($node->field_exhibition_date['und']['0']['value2']));
?>
       <div class="post-prev-more-cont clearfix">
   	 <?php echo $startDate ?> - <?php echo $endDate; ?>
       </div>
        <div class="post-prev-info">
          <?php
// We hide the comments and links now so that we can render them later.
// VP ENGINEERING
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
        <?php if ($page): ?>
          <?php if (isset($user->roles[3]) || isset($user->roles[4])) {?>
<a href="<?php echo url('settings/exhibition/' . $node->nid) ?>">Add Works</a>
<?php }?>
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
