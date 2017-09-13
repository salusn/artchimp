<?php



define("BCOLOR","gray");
define("BSIZE", "medium");

/**
 * @file
 * The primary PHP file for this theme.
 */

function uberdreams_links__system_main_menu(array $variables) {
  global $user;

  $html = "  <ul class=\"nav navbar-nav\">\n";
  foreach ($variables['links'] as $key => $link) { //print_r($link);
    if ($link['href'] == "cart") {

      $quantity = 0;

      if ($order = commerce_cart_order_load($user->uid)) {
          // Count the number of product line items on the order.
          $wrapper = entity_metadata_wrapper('commerce_order', $order);
          $quantity = commerce_line_items_quantity($wrapper->commerce_line_items, commerce_product_line_item_types());
      }

      $tit = '<div class="main-menu-title"><span aria-hidden="true" class="icon_cart"></span>'.$link['title'].' ('.$quantity.')</div>';

      $html .= "<li id=\"menu-cart\">".l($tit, $link['href'], array("html" => TRUE))."</li>";

    } else {
      $html .= "<li>".l('<div class="main-menu-title">'.$link['title'].'</div>', $link['href'], array("html" => TRUE))."</li>";
    }

  }
  $html .= "  </ul>\n";

  return $html;
}

function uberdreams_preprocess_page(&$variables) {
  global $user;

  $tabs2 = $variables['tabs'];
  $tabs2['#primary'] = array();
  $variables['tabs']['#secondary'] = array();
	$variables['tabs2'] = !empty($tabs2['#secondary']) ? $tabs2 : array();

  if(arg(0) == "product" && is_numeric(arg(1))) {
   if (isset($variables['page']['#views_contextual_links_info'])){
    $view_data = $variables['page']['#views_contextual_links_info']['views_ui']['view'];
    if ($view_data->name == "product_listing"){
      if (isset($view_data->result[0])){
        drupal_set_title($view_data->result[0]->commerce_product_title);
      }
    }
   }
  }
  if(arg(0) == "products") {
   if (isset($variables['page']['#views_contextual_links_info'])){
    $view_data = $variables['page']['#views_contextual_links_info']['views_ui']['view'];
    if ($view_data->name == "products_listing" && $view_data->current_display == "page_1"){
        drupal_set_title(arg(3));
    }
   }
  }
  if(isset($user->roles[3]) || isset($user->roles[4])){ //administrator or admin
		if( (arg(0) == "user" && is_numeric(arg(1)))) {
			$variables['theme_hook_suggestions'][] =  'page__dash';
      $variables['menu_position'] = variable_get('menu_position', 'top');
		}
	}
	if (isset($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}


function uberdreams_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $breadcrumb[] = drupal_get_title();
  if (!empty($breadcrumb)) {

    $seperator = '<span class="slash-divider">/</span>';
    return implode($seperator, $breadcrumb);
  }
}

function uberdreams_preprocess_views_view_table(&$vars) {
  // Add tablesorter class in view .
  $vars['classes_array'][] = 'table';
  $vars['classes_array'][] = 'table-striped';
  $vars['classes_array'][] = 'shopping-cart-table';
}

/**
 * Implements hook_form_alter().
 */
function uberdreams_form_alter(&$form, &$form_state, $form_id) {

   switch ($form_id) {
      case 'commerce_checkout_form_checkout':
          //kpr($form);
          $form['cart_contents']['#title'] = t("Products in your Cart");
          $form['customer_profile_billing']['commerce_customer_address']['#attributes']['class'][] = 'grey-light-bg shipping-cont';
        break;

    case 'commerce_checkout_form_review':
         //kpr($form);
         $form['help']['#markup'] = '<div class="alert alert-info"><span aria-hidden="true" class="alert-icon icon_info_alt"></span>'.strip_tags($form['help']['#markup'])."</div>";
      break;
    case 'views_form_commerce_cart_form_default':
        if (!$form['actions']['checkout']['#access']) {
          $form['actions']['login'] = array(
            '#type' => 'submit',
            '#value' => t('Login to Checkout'),
            '#submit' => array('uberdreams_login_redirect'),
          );
        }
      break;
    }

   if (isset($form['#node']) && $form['#node']->type .'_node_form' == $form_id && $form['#node']->type == "campaign" &&
       arg(2) == "edit") {

     $title_val = $form['#node']->type."s > ".$form['#node']->title;
     drupal_set_title($title_val);

     $destination = isset($_GET['destination']) ? $_GET['destination'] :"user";

    $form['actions']['cancel'] = array(
	    '#markup' => l(t('Cancel'), $destination,array("attributes" => array("class" => "form-submit button medium gray"))),
	    '#weight' => 10,
	  );
   }
}

function uberdreams_login_redirect($form, &$form_state) {
  drupal_goto('user/login', array('query' => array('destination' => 'cart')));
}

function uberdreams_button($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'form-' . $element['#button_type'] . " button ". BSIZE ." ". BCOLOR;
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'form-button-disabled';
  }
  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}


function uberdreams_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );

  $classes = array(
    'status' => "alert alert-success",
    'error' => "alert alert-danger",
    'warning' => "alert alert-warning",
  );

  $icons = array(
    'status' => '<span aria-hidden="true" class="alert-icon icon_like"></span>',
    'error' => '<span aria-hidden="true" class="alert-icon icon_error-triangle_alt"></span>',
    'warning' => '<span aria-hidden="true" class="alert-icon icon_blocked"></span>',
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"$classes[$type]\">\n";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    $output .= $icons[$type];

    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= reset($messages);
    }
    $output .= "</div>\n";
  }
  return $output;
}

function uberdreams_menu_local_tasks(&$variables) {
  $output = '';
  $menu_position = variable_get('menu_position', 'top');
  $class_extra = ($menu_position == "left") ? "nav-pills nav-stacked" : "nav-tabs";
  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="nav '.$class_extra.'">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="nav '.$class_extra.'">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

function uberdreams_preprocess_table(&$variables) {
  if(!isset($variables['attributes']['class'])) {
    $variables['attributes']['class'] = array('table');
  }
  else {
    $variables['attributes']['class'][] = 'table';
  }
 }

function uberdreams_menu_alter(&$items) {
 $items['user/%user']['title callback'] = 'uberdreams_user_page_title';
}

function uberdreams_user_page_title(){
	return "";
}

