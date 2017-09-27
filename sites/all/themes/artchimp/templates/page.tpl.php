<?php global $base_url;
$path_to_theme = $base_url . '/' . drupal_get_path('theme', 'artchimp');?>

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

      <div class="col-md-8">
        <h1 class="page-title"><?php print $title;?></h1>
      </div>

      <div class="col-md-4">

        <?php if ($breadcrumb): ?>
          <div class="breadcrumbs"><?php print $breadcrumb;?></div>
        <?php endif;?>

      </div>

    </div>
  </div>
</div>

<?php if ($messages): ?>
  <div class="page-section pt-80">
    <div class="container">
      <?php print $messages;?>
    </div>
  </div>
<?php endif;?>

<div class="page-section p-80-cont">
  <div class="container">
    <div class="row">

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

<?php if ($page['content_footer']): ?>fdfddfd
<hr class="mt-0 mb-80">
<div class="container">
   <?php print render($page['content_footer']);?>
</div>
<?php endif;?>


<!-- NEWS LETTER -->
<div class="page-section nl-cont">
  <div class="container">
    <div class="relative" >
      <div id="mc_embed_signup" class="nl-form-container clearfix">
        <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
          <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

          <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
        </form>
        <div id="notification_container"  ></div>
      </div>
    </div>
  </div>
</div>



        <!-- FOOTER 2 BLACK -->
        <footer class="page-section pt-80 pb-50 footer2-black">
          <div class="container">
            <div class="row">

              <div class="col-md-3 col-sm-3 widget">
                <div class="logo-footer-cont">
                  <a href="<?php print $front_page;?>">
                    <img class="logo-footer" src="<?php echo $path_to_theme; ?>/images/logo.png" alt="logo">
                  </a>
                </div>
                <div class="footer-2-text-cont">
                  <address>
                    555 California str, Suite 100<br>
                    San&nbsp;Francisco, CA 94107
                  </address>
                </div>
                <div class="footer-2-text-cont">
                  1-800-312-2121<br>
                  1-800-310-1010
                </div>
                <div class="footer-2-text-cont">
                  <a class="a-text" href="mailto:info@adidas.com">info@adidas.com</a>
                </div>
              </div>

              <div class="col-md-3 col-sm-3 widget">
                <h4>INFO</h4>
                <ul class="links-list a-text-cont" >
                  <li><a href="<?php print $front_page;?>">COMPANY</a></li>
                  <li><a href="<?php print $front_page;?>">WHAT WE DO</a></li>
                  <li><a href="<?php print $front_page;?>">HELP CENTER</a></li>
                  <li><a href="<?php print $front_page;?>">TERMS OF SERVICE</a></li>
                  <li><a href="<?php print $front_page;?>">CONTACT</a></li>
                </ul>
              </div>
            </div>

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
                <a class="footer-2-copy" href="http://www.adidas.co.in/" target="_blank">&copy; ADIDAS 2016</a>
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
