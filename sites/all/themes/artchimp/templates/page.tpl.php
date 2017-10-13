<?php global $base_url;
$path_to_theme = $base_url . '/' . drupal_get_path('theme', 'artchimp');?>
<!-- Jikku | done -->

<div id="wrap" class="boxed ">
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

                  <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('nav', 'navbar-nav'))));?>

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
          <li><a class="cd-search-trigger" href="#cd-search"><span></span></a>
          </li>
        </ul>
        <!-- cd-header-buttons -->
        <div id="cd-search" class="cd-search">
          <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
            <input type="text" value="" name="q" id="q" placeholder="Search...">
          </form>
        </div>

      </div>
      <!-- END header-wrapper -->

    </header>


    <!-- PAGE TITLE SMALL -->
   <!--  <div class="page-title-cont page-title-small grey-light-bg">
      <div class="relative container align-left">
        <div class="row">

          <div class="col-md-8">
            <h1 class="page-title"><?php //print $title;?></h1>
          </div>

          <div class="col-md-4">

            <?php //if ($breadcrumb): ?>
            <div class="breadcrumbs">
                <?php //print $breadcrumb;?>
            </div>
            <?php //endif;?>

          </div>

        </div>
      </div>
    </div> -->

    <?php if ($messages): ?>
      <div class="page-section pt-80">
        <div class="container">
            <?php print $messages;?>
        </div>
      </div>
    <?php endif;?>

    <div class="page-section pv6-ns ph2">
      <div class="container min-h-100">
        <div class="row mt3">
        <div class="tarq-page-title tarq-red"><?=$title?></div>
            <?php if ($page['sidebar_first']): ?>
              <div id="sidebar-second" class="col-sm-4 col-md-3">
                <?php print render($page['sidebar_first']);?>
              </div>
              <div id="main-content" class="col-sm-8">
                <?php print render($page['content']);?>
              </div>
            <?php else: ?>
            <?php print render($page['content']);?>
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

    <footer class="page-section tarq-bg-red">
      <div class="container pa4">
        <div class="">
          <div class="right">
            <a href="" title="Facebook" target="_blank">
              <i class="fa fa-facebook tarq-white ph1"></i>
            </a>
            <a href="" title="Twitter" target="_blank">
              <i class="fa fa-twitter tarq-white ph1"></i>
            </a>
            <a href="" title="LinkedIn" target="_blank">
              <i class="fa fa-linkedin tarq-white ph1"></i>
            </a>
          </div>
          <div class="left">
            <a class="tarq-white" href="http://www.tarq.in/" target="_blank">
             &copy; Tarq 2017
            </a>
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
