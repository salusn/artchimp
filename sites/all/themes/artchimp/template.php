<?php

function artchimp_preprocess_page(&$variables) {

	if (arg(0) == 'node') {

		if (isset($variables['node']->field_lastname['und']['0']['value'])) {

			$page_title = $variables['node']->title . ' ' . $variables['node']->field_lastname['und']['0']['value'];

			$variables['title'] = $page_title;
		}
	}
}

function exhibition_date_markup($range) {
	return "<div class='jikku-date'>$range</div>";
}

function formatted_date_range($date_1, $date_2) {
	$start_date = date("d F", strtotime($date_1));
	$end_date = date("d F Y", strtotime($date_2));

	return "$start_date — $end_date";
}
