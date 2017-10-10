<?php

function artchimp_preprocess_page(&$variables) {

	if (arg(0) == 'node') {

		if (isset($variables['node']->field_lastname['und']['0']['value'])) {

			$page_title = $variables['node']->title . ' ' . $variables['node']->field_lastname['und']['0']['value'];

			$variables['title'] = $page_title;
		}
	}
}