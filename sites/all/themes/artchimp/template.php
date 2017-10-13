<?php

function artchimp_preprocess_page(&$variables) {

}

function exhibition_date_markup($range) {
	return "<div class='jikku-date'>$range</div>";
}

function formatted_date_range($date_1, $date_2) {
	$start_date = date("d F", strtotime($date_1));
	$end_date = date("d F Y", strtotime($date_2));

	return "$start_date — $end_date";
}
