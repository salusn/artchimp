<?php global $base_url;
$path_to_theme = $base_url . '/' . drupal_get_path('theme', 'artchimp');?>

<div id="wrap" class="boxed admin-page">
  <div class="grey-bg">

<!-- HEADER 1 NO-TRANSPARENT -->
<header id="nav" class="header header-1 no-transparent mobile-no-transparent">

  <div class="header-wrapper">
  <div class="container-m-30 clearfix">
    <div class="logo-row">

    <!-- LOGO -->
    <div class="logo-container-2">
        <div class="logo-2">

        <?php if ($logo): ?>
          <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo" class="clearfix">
            <img src="<?php print $logo;?>"  class="logo-img" alt="<?php print t('Home');?>" />
          </a>
        <?php endif;?>

        </div>
      </div>
    <!-- BUTTON -->
    <div class="menu-btn-respons-container">
      <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
        <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
      </button>
    </div>
   </div>
  </div>

  <!-- MAIN MENU CONTAINER -->
  <div class="main-menu-container">

      <div class="container-m-30 clearfix">

        <!-- MAIN MENU -->
        <div id="main-menu">
          <div class="navbar navbar-default" role="navigation">

          <!-- MAIN MENU LIST -->
          <nav class="collapse collapsing navbar-collapse right-1024">

             <?php
print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('nav', 'navbar-nav'))));
?>

          </nav>
          </div>
        </div>
        <!-- END main-menu -->

      </div>
      <!-- END container-m-30 -->

  </div>
  <!-- END main-menu-container -->

  <!-- SEARCH READ DOCUMENTATION -->
  <ul class="cd-header-buttons">
    <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
  </ul> <!-- cd-header-buttons -->
  <div id="cd-search" class="cd-search">
    <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
      <input type="text" value="" name="q" id="q" placeholder="Search...">
    </form>
  </div>

  </div>
  <!-- END header-wrapper -->

</header>


<!-- PAGE TITLE SMALL -->
<div class="page-title-cont page-title-small grey-light-bg">
  <div class="relative container align-left">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">Admin Panel<?php //print $title; ?></h1>
      </div>
      <div class="col-md-12">
        <?php if ($tabs && $menu_position == "top"): ?><div class="tabs"><?php print render($tabs);?></div><?php endif;?>
      </div>
    </div>
  </div>
</div>

<div class="page-section p-20-cont page-dash">
  <div class="container relating-wrapper <?php echo ($title) ? "" : "no-title"; ?>">

   <?php if ($title): ?>
    <div class="row">
      <div class="col-md-12">
        <h3><?php print $title;?></h3>
      </div>
    </div>
    <?php endif;?>

   <?php if ($tabs2): ?>
    <div class="row">
      <div class="col-md-12">
        <?php print render($tabs2);?>
      </div>
    </div>
    <?php endif;?>

   <?php if ($messages): ?>
    <div class="row">
      <div class="col-md-12">
        <?php print $messages;?>
      </div>
    </div>
    <?php endif;?>

    <div class="row">

      <?php if ($page['sidebar_second'] || ($tabs && $menu_position == "left")): ?>
        <div id="sidebar-second" class="col-sm-4 col-md-3">
          <?php if ($tabs && $menu_position == "left"): ?><div class="tabs"><?php print render($tabs);?></div><?php endif;?>
          <?php print render($page['sidebar_second']);?>
        </div>
        <div id="main-content" class="col-sm-8 col-md-9">
          <?php print render($page['content']);?>
        </div>
      <?php else: ?>
      <div id="main-content" class="col-md-12">
        <?php print render($page['content']);?>
      </div>
      <?php endif;?>

   </div>
 </div>
</div>

<?php if ($page['content_footer']): ?>
<hr class="mt-0 mb-80">
<div class="container">
   <?php print render($page['content_footer']);?>
</div>
<?php endif;?>


<!-- FOOTER 2 BLACK -->
<footer class="page-section pt-80 pb-50 footer2-black">
  <div class="container">

    <div class="footer-2-copy-cont clearfix">
      <!-- Social Links -->
      <div class="footer-2-soc-a right">
        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
      </div>

      <!-- Copyright -->
      <div class="left">
        <a class="footer-2-copy" href="http://www.adidas.co.in/" target="_blank">&copy; ARTCHIMP 2016</a>
      </div>


    </div>

  </div>
</footer>

<?php print render($page['footer']);?>

<!-- BACK TO TOP -->
<p id="back-top">
  <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>


</div>
</div>
