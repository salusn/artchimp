<?php
global $base_url, $user;
$path_to_theme = $base_url . '/' . drupal_get_path('theme', 'artchimp');
$logo = $path_to_theme . '/' . 'logo.png';

if (user_is_anonymous()) {
	$user_data = user_load(1);
} else {
	$user_data = user_load($user->uid);
}

//$logo = file_create_url($user_data->field_logo['und']['0']['uri']);
$chimp_title = 'ArtChimp';
$chimp_logo = $logo;
$chimp_foreground = $user_data->field_foreground_colour['und']['0']['jquery_colorpicker'];
$chimp_background = $user_data->field_background_colour['und']['0']['jquery_colorpicker'];
$chimp_facebook = $user_data->field_facebook_url['und']['0']['value'];
$chimp_twitter = $user_data->field_twitter_url['und']['0']['value'];
$chimp_instagram = $user_data->field_instagram_url['und']['0']['value'];
$chimp_website = 'http://artchimp.com';

?>
<div id="wrap" class="boxed ">
  <div class="grey-bg">
    <header id="nav" class="header header-1 no-transparent mobile-no-transparent">
      <div class="header-wrapper">
        <div class="container-m-30 clearfix">
          <div class="logo-row">
            <div class="logo-container-2">
              <div class="logo-2">
                <?php if ($chimp_logo): ?>
                  <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo" class="clearfix">
                    <img
                      src="<?=$chimp_logo?>"
                      class="logo-img"
                      alt="<?php print t('Home');?>"
                      />
                  </a>
                <?php endif;?>
              </div>
            </div>
            <div class="menu-btn-respons-container">
              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
            </div>
          </div>
        </div>
        <div class="main-menu-container">
          <div class="container-m-30 clearfix">
            <div id="main-menu">
              <div class="navbar navbar-default" role="navigation">
                <nav class="collapse collapsing navbar-collapse right-1024">
                  <?=theme(
	'links__system_main_menu',
	array('links' => $main_menu, 'attributes' => array('class' => array('nav', 'navbar-nav'))))
?>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container min-h-100">
      <?=render($page['content_front'])?>
    </div>

    <footer class="page-section tarq-bg-red">
      <div class="container pa4">
        <div class="">
          <div class="right">
          <a href="<?=$chimp_facebook?>" title="Facebook" target="_blank">
              <i class="fa fa-facebook tarq-white ph1"></i>
            </a>
            <a href="<?=$chimp_twitter?>" title="Twitter" target="_blank">
              <i class="fa fa-twitter tarq-white ph1"></i>
            </a>
            <a href="<?=$chimp_instagram?>" title="Instagram" target="_blank">
              <i class="fa fa-instagram tarq-white ph1"></i>
            </a>
          </div>
          <div class="left">
          <a class="tarq-white" href="<?=$chimp_website?>" target="_blank">
          &copy; <?=$chimp_title?>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <?php print render($page['footer']);?>

    <p id="back-top">
      <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
    </p>
    <script type="text/javascript">
      (function() {
        var chimpBackground = '#<?=$chimp_background?>';
        var chimpForeground = '#<?=$chimp_foreground?>';
        console.log(chimpBackground, chimpForeground)

        var icon = document.querySelector(".icon_menu");
        var navBar = document.querySelector(".header-wrapper");
        var navLinks = document.querySelectorAll("#nav li a");
        var footer = document.querySelector("footer");

        icon.style.color = chimpForeground

        navBar.style.background = chimpBackground;
        navLinks.forEach(link => link.style.color = chimpForeground);

        footer.style.background = chimpBackground;
        footer.style.color = chimpForeground
      })();
    </script>
  </div>
</div>
