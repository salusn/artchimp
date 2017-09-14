<?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed;?>
    </div>
  <?php endif;?>
<?php if (!empty($view->style_plugin->rendered_fields)) {?>

<div class="row">

  <?php foreach ($view->style_plugin->rendered_fields as $keys => $value) { //print_r($value);exit;?>

  <div class="col-md-4 col-lg-4 pb-80" >

    <div class="post-prev-img">
		<?php echo $value['field_photo']; ?>
    </div>

    <div class="post-prev-title mb-5">
      <h3><?php echo $value['province']; ?></h3>
    </div>

    <div class="shop-price-cont">
     <?php echo $value['title']; ?>
    </div>

    <div class="post-prev-more-cont clearfix">
	 <?php echo $value['field_exhibition_date']; ?>
    </div>

  </div>


  <?php }?>

</div>

<?php } else {?>

    <div class="view-empty">
      <?php print $empty;?>
    </div>

<?php }?>
