  <div id="page" class="page">
    <div id="page-inner" class="page-inner">

      <!-- header-top row: width = grid_width -->
      <div id="header-top-wrapper" class="header-top-wrapper full-width">
        <div id="header-top" class="header-top row <?php print $grid_width; ?>">
          <div id="header-top-inner" class="header-top-inner inner clearfix">
            <div id="osu-top-hat">
              <a href="http://oregonstate.edu/" title="Link to OSU homepage">
                <img class="tag" src="<?php print $base_path . $directory . '/images/extension/gif/lay_hdr_tag.gif';?>" width="101px" height="119px" alt="Oregon State University" />
              </a>
            </div><!-- /osu-top-hat -->
             <div id="header-top-links">
                <a href="http://extension.oregonstate.edu/node/312">Donate</a>
                &nbsp; |&nbsp;&nbsp;
                <a href="http://extension.oregonstate.edu/node/3248">Calendar</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="http://outreach.oregonstate.edu">Outreach &amp; Engagement</a>
            </div>
            <?php print render($page['header_top']); ?>
          </div><!-- /header-top-inner -->
        </div><!-- /header-top -->
      </div><!-- /header-top-wrapper -->

      <?php
        if ($page['sidebar_first'] && $page['sidebar_second']) {
          $content_wrapper_class =  'page-sidebar-both';
        } else if ($page['sidebar_first']) {
          $content_wrapper_class =  'page-sidebar-first';
        } else if ($page['sidebar_second']) {
          $content_wrapper_class =  'page-sidebar-second';
        } else {
          $content_wrapper_class =  'page-sidebar-none';
        }
      ?>

      <div id="content-wrapper" class="<?php print $content_wrapper_class ?>">

        <!-- header-group region: width = grid_width -->
        <div id="header-group-wrapper" class="header-group-wrapper full-width clearfix">
          <div id="header-group" class="header-group region <?php print $grid_width; ?>">
            <div id="header-group-inner" class="header-group-inner inner clearfix">
              <div id="header-site-info" class="header-site-info">
                <div id="header-site-info-inner" class="header-site-info-inner gutter">
                  <div id="logo" class="hdrbg-program">
                    <div id="site-name-slogan" class="site-name-slogan">
                      <div class="header-logo">
                        <a href="http://<?php print $_SERVER['SERVER_NAME'] ?>" title="Oregon State University Extension Service">
                          <div id="site-title">
                            <img id="ptitle-img" src="<?php print $base_path . $directory ?>/images/extension/png/header_title_extension.png" alt="<?php print $site_name ?>" />
                          </div><!-- /site-title -->
                        </a>
                    </div><!-- /site-name-slogan -->
                  </div><!-- /logo -->
                </div><!-- /header-site-info-inner -->
              </div><!-- /header-site-info -->
              <?php print render($page['header']); ?>
            </div><!-- /header-group-inner -->
          </div><!-- /header-group -->
        </div><!-- /header-group-wrapper -->
        <div id="header-main-menu-wrapper" class="header-main-menu-wrapper full-width">
          <div id="header-main-menu" class="header-main-menu row <?php print $grid_width; ?>">
            <div id="header-main-menu-inner" class="header-main-menu-inner inner clearfix">
            
              <?php  // hack until this is figured out for D7 theme //                  
                  $filename = 'main_menu.html';
                  if (file_exists($filename)) {
                    include_once($filename);
                  } else {
                    print render($page['main_menu']);
                  }
              ?>
            </div><!-- /header-primary-menu-inner -->
          </div><!-- /header-primary-menu -->
        </div><!-- /header-primary-menu-wrapper -->
        <?php print render($page['preface_top']); ?>
      </div>


      <!-- main region: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width clearfix">
        <div id="main" class="main region <?php print $grid_width; ?>">
          <div id="main-inner" class="main-inner inner clearfix">
            <?php print render($page['sidebar_first']); ?>

            <!-- main group: width = grid_width - sidebar_first_width -->
            <div id="main-group" class="main-group region nested <?php print $main_group_width; ?>">
              <div id="main-group-inner" class="main-group-inner inner">
                <?php print render($page['preface_bottom']); ?>

                <div id="main-content" class="main-content region nested">
                  <div id="main-content-inner" class="main-content-inner inner">
                    <!-- content group: width = grid_width - sidebar_first_width - sidebar_second_width -->
                    <div id="content-group" class="content-group region nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
                        <?php print theme('grid_block', array('content' => $breadcrumb, 'id' => 'breadcrumbs')); ?>
                        <?php print theme('grid_block', array('content' => $messages, 'id' => 'content-messages')); ?>

                        <div id="content-region" class="content-region region nested">
                          <div id="content-region-inner" class="content-region-inner inner">
                            <a name="main-content-area" id="main-content-area"></a>
                            <?php print theme('grid_block', array('content' => render($tabs), 'id' => 'content-tabs')); ?>
                            <?php print theme('grid_block', array('content' => render($page['help']), 'id' => 'content-help')); ?>
                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?>
                            <h1 class="title gutter"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>
                            <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul>
                            <?php endif; ?>
                            <?php if ($page['content']): ?>
                              <?php print render($page['content']); ?>
                            <?php endif; ?>
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->

                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->
                    <?php print render($page['sidebar_second']); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->

                <?php print render($page['postscript_top']); ?>
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->

</div><!-- /content-wrapper -->



      <?php print render($page['postscript_bottom']); ?>
      <?php print render($page['footer']); ?>
      
      





      <?php // create link to login page or logout depending on user status
        if (!$logged_in) {
          if (function_exists('osu_sso_perm')) {
              $log_path = 'login';
          } else {
              $log_path = 'user/login';
          }
          $log_print = 'login';
        } else {
          $log_path = 'logout';
          $log_print = 'logout';
        }
      ?>

      <div id="footer-message-wrapper" class="footer-message-wrapper full-width">
        <div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
          <div id="footer-message-inner" class="footer-message-inner inner clearfix">
            <div style="display: block; float: right; text-align: right; width: 0px; overflow: visible; margin-right: 40px;"><a rel="nofollow" style="color:#666;" href="<?php print $base_path.$log_path; ?>"><?php print $log_print; ?></a></div>
            <div style="display: inline; width: 100%; margin: auto; text-align: center;">
              <span><a href="http://oregonstate.edu/main/about/copyright">Copyright</a> &copy; 1995-<?php print date('Y');?> <a href="http://oregonstate.edu">Oregon State University</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://oregonstate.edu/main/about/disclaimer/">Web Disclaimer</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://extension.oregonstate.edu/node/3299">Equal Opportunity&#47;Accessibility</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://extension.oregonstate.edu/employee/bryan-mayjor">Contact the Webmaster</a></span>
            </div>
          </div><!-- /footer-message-inner -->
        </div><!-- /footer-message -->
      </div><!-- /footer-message-wrapper -->


    </div><!-- /page-inner -->
  </div><!-- /page -->
