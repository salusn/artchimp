<html lang="<?php print $language->language;?>" dir="<?php print $language->dir;?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
  <meta name="robots" content="noodp, noydir" />
  <!-- <meta name="apple-itunes-app" content="app-id=361309726"> -->
  <title><?php print $head_title;?></title>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <?php print $head;?>
  <?php print $styles;?>

</head>
<body class="<?php print $classes;?>" <?php print $attributes;?>>
  <?php print $page;?>
  <?php print $scripts;?>
  <script type="text/javascript" src="<?php print drupal_get_path('module', 'wysiwyg') . '/wysiwyg.js';?>
"></script>

  <script src="https://use.fontawesome.com/cd6d4a5a9b.js"></script>
</body>
</html>
