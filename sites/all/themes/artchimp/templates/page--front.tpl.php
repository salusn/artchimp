<?php
  global $base_url;
  $path_to_theme = $base_url . '/' . drupal_get_path('theme', 'artchimp')
?>
<div id="wrap" class="boxed ">
  <div class="grey-bg">
Jikku
    <header id="nav" class="header header-1 no-transparent mobile-no-transparent">
      <div class="header-wrapper">
        <div class="container-m-30 clearfix">
          <div class="logo-row">
            <div class="logo-container-2">
              <div class="logo-2">
                <?php if ($logo): ?>
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
                  <?= theme(
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
      <?=render($page['content_front']);?>
    </div>

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

    <p id="back-top">
      <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
    </p>
  </div>
</div>
