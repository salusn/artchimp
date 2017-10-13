<?php //Jikku publication details page?>
<?php $isDetailPage = $page;?>
<div id="node-<?php print $node->nid;?>" class="<?php print $classes;?> clearfix"<?php print $attributes;?>>
  <div class="content"<?php print $content_attributes;?>>
    <div class="blog-post">
        <?=render($title_prefix)?>
        <?php if ($isDetailPage): ?>
          <div class="row mb6">
            <div class="col-md-8">
              <div class="<?php echo ($isDetailPage) ? "post-img" : ""; ?>">
                <?php print render($content['field_photo']);?>
              </div>
            </div>
            <div class="col-md-4">
              <div class=""><?=render($content['body'])?></div>
            </div>
          </div>
          </div>
        <?php endif;?>
    </div>
  </div>
</div>