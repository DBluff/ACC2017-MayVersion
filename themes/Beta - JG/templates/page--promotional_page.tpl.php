<div id="page">
    <div class="header olay">
        <div id="acc-logo">
          <?php if ($logo) { ?>
              <a class="acc-logo" href="<?php print $front_page; ?>"
                 title="<?php print t('Home'); ?>">
                  <img src="<?php print $logo; ?>"
                       alt="<?php print t('Home'); ?>"/>
              </a>
          <?php }; ?>
        </div>
        <nav class="z-depth-0 audID hide-on-small-only" id="navAud"
             role="navigation">
            <div class="nav-wrapper">
                <div class="row aud_menu">
                    <div class="audID" id="audIDnav">
                      <?php
                      $menua = menu_navigation_links('menu-audience-identifier');
                      print theme('links__menu-audience-identifier', ['links' => $menua]); ?>
                    </div>
                    <div class="searchContainer" id="searchAdj">
                        <form class="searchbox">
                            <input type="search" placeholder="Search ACC"
                                   name="search" class="searchbox-input"
                                   onkeyup="buttonUp();" required>
                            <input type="submit" class="searchbox-submit"
                                   value="GO">
                            <span class="searchbox-icon"><i
                                        class="large material-icons">search</i>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="z-depth-3 priMenu hide-on-small-only" id="navPrim"
             role="navigation">
            <div class="nav-wrapper">
                <div class="row prim_menu nav-transparent">
                    <div class="primaryMenu">
                      <?php
                      $menub = menu_navigation_links('menu-primary-navigation');
                      print theme('links__menu-primary-navigation', ['links' => $menub]); ?>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="mobileNav z-depth-0 hide-on-large-only blue" id="mobNav"
             role="navigation">
            <div class="mobileLogo">
                <a class="acc-logo-mobile" href="<?php print $front_page; ?>"
                   title="<?php print t('Home'); ?>"><img
                            src="/sites/default/files/logo-mobile-2x.png"
                            alt="<?php print t('Home'); ?>">
            </div>
            <div class="hamburger">
                <a href="#" data-activates="slide-out-prim"
                   class="button-collapse"><i
                            class="material-icons large"
                            aria-hidden="true">menu</i></a>
            </div>
        </nav>
    </div>
  <?php
  if ($node = menu_get_object()) {
    $nid = $node->nid;
  }
  $heroImg = db_query('SELECT entity_id FROM field_data_field_promo_hero_image');
  if (!empty($heroImg)) {
    $myHero = $heroImg->fetchCol();
    $hero = entity_load('node', $myHero);
    $hero = json_decode(json_encode($hero), TRUE);
  }
  ?>
    <div class="main">
        <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
            <div class="content"<?php print $content_attributes; ?>>
                <div class="col s12 heroWrapperShort">
                    <?php if (isset($hero[$nid])){ ?>
                    <img class="responsive-img hero"
                         src="<?php print '/sites/default/files/' . substr($hero[$nid]['field_promo_hero_image'][LANGUAGE_NONE][0]['uri'], 9); ?> ">
                           <?php } ?>
                </div>
                <div class="container">
                    <div class="row right">
                        <a class="waves-effect waves-light btn-large purple">APPLY NOW</a>
                        <a class="waves-effect waves-light btn-large purple">REQUEST INFO</a>
                    </div>
                </div>
                <div class="row proTitle">
                    <div class="col m6 s12 offset-m3 proTitle">
                      <?php print render($title_prefix);
                      if ($title) {
                        $titleBreakdown = explode(' ', $title);
                        $titleCount = count($titleBreakdown);
                        $partCount = 0;
                        foreach ($titleBreakdown as $tb) {
                          $partCount++;
                          print '<h1 class="title" id="page-title">' . $tb . '</h1>';
                          if ($partCount < $titleCount) {
                            print '<br />';
                          }
                        }
                      }
                      print render($title_suffix); ?>
                    </div>
                </div>
              <?php if (!empty($page['content_band'])) { ?>
                  <div class="contentBand">
                    <?php print render($page['content_band']); ?>
                  </div>
              <?php } ?>
                <div class="row footerNextStep noSideMargin noBottomMargin">
                    <div class="section">
                        <div class="container">
                            <div class="row nextStep">
                                <div class="col s12 center-align nextStepPrompt white-text">
                                    <div class="row"><h2 class="white-text">GET
                                            STARTED</h2>
                                    </div>
                                </div>
                                <div class="col s12 center-align nextStepButtons">
                                    <div class="row">
                                        <a class="waves-effect waves-light btn-large btn-reverse">APPLY
                                            NOW</a>
                                        <a class="waves-effect waves-light btn-large btn-reverse">REQUEST
                                            INFO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sideNav">
                    <ul id="slide-out-prim" class="side-nav">
                        <div class="mobPrimNav">
                          <?php
                          $menub = menu_navigation_links('menu-primary-navigation');
                          print theme('links__menu-primary-navigation', ['links' => $menub]);
                          ?>
                        </div>
                        <div class="mobAudNav">
                          <?php
                          $menua = menu_navigation_links('menu-audience-identifier');
                          print theme('links__menu-audience-identifier', ['links' => $menua]); ?>
                        </div>
                    </ul>
                </div>
                <div class="footAudNav">
                    <ul id="slide-out-footAud" class="side-nav">
                        <div class="mobAudNav">
                          <?php
                          $menua = menu_navigation_links('menu-audience-identifier');
                          print theme('links__menu-audience-identifier', ['links' => $menua]); ?>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="foot gradientRadBlue">
                <div class="container-wide">
                    <div class="row white-text">
                        <div class="col m3 s12">
                            <div id="acc-logo-foot">
                                <a class="acc-logo-foot"
                                   href="<?php print $front_page; ?>"
                                   title="<?php print t('Home'); ?>">
                                    <img class="responsive-img"
                                         src="/sites/all/themes/acc2017/img/logo.png"
                                         alt="<?php print t('Home'); ?>"/>
                                </a>
                            </div>

                            <div class="col s12 center-align smiconsInv">
                                <a href="#"><i
                                            class="fa fa-facebook fa-2x white-text"></i></a>
                                <a href="#"> <i
                                            class="fa fa-twitter fa-2x white-text"></i></a>
                                <a href="#"><i
                                            class="fa fa-linkedin fa-2x white-text"></i></a>
                                <a href="#"><i
                                            class="fa fa-flickr fa-2x white-text"></i></a>
                                <a href="#"><i
                                            class="fa fa-instagram fa-2x white-text"></i></a>
                                <a href="#"><i
                                            class="fa fa-youtube-play fa-2x white-text"></i></a>
                            </div>
                        </div>
                        <br><br>
                        <div class="col m3 s12">
                            <div class="footMenu">
                              <?php
                              $menua = menu_navigation_links('menu-general-information');
                              print theme('links__menu-general-information', ['links' => $menua]); ?>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="footMenu">
                              <?php
                              $menua = menu_navigation_links('menu-safety');
                              print theme('links__menu-safety', ['links' => $menua]); ?>
                            </div>
                        </div>
                        <div class="col m3 s12">
                            <div class="hide-on-med-and-up">
                                <div class="dividerDiagGrey opacityHalf"></div>
                            </div>
                            <div class="footMenu">
                              <?php
                              $menub = menu_navigation_links('menu-primary-navigation');
                              print theme('links__menu-primary-navigation', ['links' => $menub]); ?>
                            </div>
                            <div class="footMenuAddress footMenu">
                                Austin Community College District<br> 5930
                                Middle
                                Fiskville Rd <br/> Austin, Texas 78752
                                <br/>512-223-4ACC (4222)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <nav class="z-depth-0 audID2 blue" id="navFoot" role="navigation">
            <div class="nav-wrapper foot hide-on-mid-and-down">
                <div class="row aud_menu foot">
                    <div class="audIDbottom">
                      <?php
                      $menua = menu_navigation_links('menu-audience-identifier');
                      print theme('links__menu-audience-identifier', ['links' => $menua]); ?>
                    </div>
                </div>
            </div>
            <div id="topPage">
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large waves-effect waves-light z-depth-2"
                       onclick="topFunction()"><i class="fa fa-chevron-up"
                                                  aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="hide-on-mid-and-up mobAudIcon"><a href="#"
                                                          data-activates="slide-out-footAud"
                                                          class="button-collapse"><i
                            class="material-icons large">person</i></a>
            </div>
            <div class="hide-on-mid-and-up footButL">
                <a class="waves-effect waves-light">APPLY NOW</a>
            </div>
            <div class="hide-on-mid-and-up footButR">
                <a class="waves-effect waves-light">REQUEST INFO</a>
            </div>
            <div class="searchContainer" id="searchFoot">
                <form class="searchbox-foot">
                    <input type="search" placeholder="Search ACC" name="search"
                           class="searchbox-input-foot"
                           onkeyup="buttonUp();" required>
                    <input type="submit" class="searchbox-submit" value="GO">
                    <span class="searchbox-icon-foot"><i
                                class="large material-icons">search</i></span>
                </form>
            </div>
        </nav>
    </div>
    <script>
        window.onload = function () {
            jQuery('.carousel.carousel-slider').carousel({fullWidth: true});
        };
    </script>
</div>