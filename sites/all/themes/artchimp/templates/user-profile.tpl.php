<div class="row profile"<?php print $attributes; ?>>
	<div class="col-md-2 round-img">
	  <?php print render($user_profile['user_picture']); ?>
	</div>
	<div class="col-md-10">
	  <h3><?php print render($user_profile['field_name']); ?></h3>
	  <a type="button" class="btn btn-default button-right" href="<?php echo url("user/".arg(1)."/edit"); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>
	  <?php print render($user_profile); ?>
	</div>
</div>