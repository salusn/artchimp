
<?php if ($rows): ?>

<?php $data = array();?>

<?php foreach ($view->style_plugin->rendered_fields as $key => $value) {
	//print_r($value);
	if ($value['field_exhibition_date'] == '') {
		$value['field_exhibition_date'] = 0;
	}
	if ($value['field_latitude'] == '') {
		$value['field_latitude'] = 0;
	}
	if ($value['field_longitude'] == '') {
		$value['field_longitude'] = 0;
	}

	$data[] = $value;

}

$json_data = drupal_json_output(array("data" => $data));
return $json_data;

?>


<?php endif;?>