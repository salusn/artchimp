<?php global $base_url; $path_to_theme=$base_url . '/' . drupal_get_path('theme', 'artchimp');?>
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

                <?php if ($logo) : ?>
                <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home" id="logo" class="clearfix">
            <img
              src="<?php print $logo;?>"
              class="logo-img"
              alt="<?php print t('Home');?>"
              />
          </a>
                <?php endif; ?>

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

                  <?php print theme( 'links__system_main_menu', array( 'links'=> $main_menu, 'attributes' => array('class' => array('nav', 'navbar-nav')) ) ); ?>

                </nav>
              </div>
            </div>
            <!-- END main-menu -->

          </div>
          <!-- END container-m-30 -->

        </div>
        <!-- END main-menu-container -->

        <!-- SEARCH READ DOCUMENTATION -->

      </div>
      <!-- END header-wrapper -->

    </header>

    <div class="homepage-hero-module">
      <div class="video-container">
        <div class="container sm-content-cont text-center title-container">
          <div class="sm-cont-middle">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    </div>

    <?php print render($page[ 'content_front']); ?>
    <!-- SHOP INFO 1 -->
    <div class="shop-info grey-dark-bg font-white pt-110-b-80-cont">
      <div class="container">

      </div>
    </div>

    <!-- CLIENTS 1  -->
    <div class="page-section p-110-cont">
      <div class="container">
        <div class="row client-row border-bot">
        </div>
      </div>
    </div>

    <!-- FOOTER 2 BLACK -->
    <footer class="page-section pb-20 footer2-black">
      <div class="container">

        <!-- Social Links -->
        <div class="footer-2-copy-cont clearfix">
          <div class="footer-2-soc-a right">
            <a href="" title="Facebook" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="" title="Twitter" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="" title="LinkedIn" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
          </div>

          <!-- Copyright -->
          <div class="left">
            <a class="footer-2-copy" href="http://www.artchimp.com/" target="_blank">
                    &copy; ARTCHIMP 2017
                  </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- BACK TO TOP -->
    <p id="back-top">
      <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
    </p>
  </div>
</div>
