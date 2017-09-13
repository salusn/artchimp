<div class="hybridauth-widget-wrapper"><?php
  print theme('item_list',
    array(
      'items' => $providers,
      'title' => "Add Integration",
      'type' => 'ul',
      'attributes' => array('class' => array('hybridauth-widget')),
    )
  );
?></div>