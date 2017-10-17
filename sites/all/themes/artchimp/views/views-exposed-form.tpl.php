<?php if (!empty($q)): ?>
  <?php
// This ensures that, if clean URLs are off, the 'q' is added first so that
// it shows up first in the URL.
print $q;
?>
<?php endif;?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget): ?>
      <div id="<?php print $widget->id;?>-wrapper" class="views-exposed-widget col-md-4 views-widget-<?php print $id;?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id;?>">
            <?php print $widget->label;?>
          </label>
        <?php endif;?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator;?>
          </div>
        <?php endif;?>
        <div class="views-widget">
          <?php print $widget->widget;?>
        </div>
        <?php if (!empty($widget->description)): ?>
          <div class="description">
            <?php print $widget->description;?>
          </div>
        <?php endif;?>
      </div>
    <?php endforeach;?>
    <?php if (!empty($sort_by)): ?>
      <div class="views-exposed-widget views-widget-sort-by">
        <?php print $sort_by;?>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
        <?php print $sort_order;?>
      </div>
    <?php endif;?>
    <?php if (!empty($items_per_page)): ?>
      <div class="views-exposed-widget views-widget-per-page">
        <?php print $items_per_page;?>
      </div>
    <?php endif;?>
    <?php if (!empty($offset)): ?>
      <div class="views-exposed-widget views-widget-offset">
        <?php print $offset;?>
      </div>
    <?php endif;?>
    <div class="views-exposed-widget views-submit-button">
      <?php print $button;?>
    </div>
    <?php if (!empty($reset_button)): ?>
      <div class="views-exposed-widget views-reset-button">
        <?php print $reset_button;?>
      </div>
    <?php endif;?>
  </div>
</div>
