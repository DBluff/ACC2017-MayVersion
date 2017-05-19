<div id="page">
    <div class="header overlay">
        <div id="acc-logo">
          <?php if ($logo) { ?>
              <a class="acc-logo" href="<?php print $front_page; ?>"
                 title="<?php print t('Home'); ?>">
                  <img class="responsive-img" src="<?php print $logo; ?>"
                       alt="<?php print t('Home'); ?>"/>
              </a>
          <?php }; ?>
        </div>
        <nav class="z-depth-0 audID hide-on-med-and-down" id="navAud"
             role="navigation">
          <?php
          $menua = menu_navigation_links('menu-audience-identifier');
          print theme('links', [
            'links' => $menua,
            'attributes' => ['class' => 'right'],
          ]); ?>
            <div class="searchContainer" id="searchAdj">
                <form class="searchbox">
                    <input type="search" placeholder="Search ACC"
                           name="search" class="searchbox-input"
                           onkeyup="buttonUp();" required>
                    <input class="searchbox-submit">
                    <span class="searchbox-icon"><i
                                class="large material-icons">search</i>
                            </span>
                </form>
            </div>
        </nav>
        <nav class="z-depth-5 priMenu hide-on-med-and-down" id="navPrim"
             role="navigation">
          <?php
          $menub = menu_navigation_links('menu-primary-navigation');
          print theme('links', [
            'links' => $menub,
            'attributes' => ['class' => 'right'],
          ]); ?>
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
</div>
<div class="main">
    <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
        <div class="content"<?php print $content_attributes; ?>>
            <div class="col s12 lineup">
                <img class="responsive-img hero"
                     src="<?php print '/sites/default/files/' . ltrim($homepageContent[125]['field_homepage_hero_image'][LANGUAGE_NONE][0]['uri'], 'public://'); ?> ">
                <div class="row Title">
                    <div class="col m11 s12 offset-m1 title">
                      <?php print render($title_prefix); ?>
                      <?php if ($homepageContent[125]['title']): ?>
                        <?php $titlePieces = explode(' ', $homepageContent[125]['title']);
                        $tCount = count($titlePieces);
                        $lCount = 0; ?>
                          <h1<?php print $title_attributes; ?>>
                            <?php foreach ($titlePieces as $piece) {
                              $lCount++ ?>
                              <?php print $piece ?>
                              <?php if ($tCount !== $lCount) {
                                print '<br/>';
                              }
                            }
                            ?>
                          </h1>
                      <?php endif;
                      print render($title_suffix); ?>
                        <div class="row nextStep heroNextStep">
                            <a class="waves-effect waves-light btn-large btn-flat">APPLY
                                NOW</a>
                            <a class="waves-effect waves-light btn-large btn-flat">REQUEST
                                INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-band homeSHGT z-depth-1">
                <div class="section">
                    <div class="container">
                        <div class="row lineup">
                            <div class="col s12">
                                <h2 class="band-title blue-text">start here.
                                    get there.</h2>
                                <div class="dividerDiagBlue"></div>
                            </div>
                            <div class="col s12">
                                <p class="flow-text">
                                    <strong> It’s not just our motto,
                                        it’s the Austin Community
                                        College
                                        commitment
                                        to
                                        your
                                        future.
                                    </strong>
                                </p>
                                <p class="flow-text">
                                    More Central Texans find their path
                                    to becoming college graduates and
                                    launch
                                    or
                                    improve
                                    their careers at ACC than any other
                                    college. We can help you get to your
                                    there
                                    with
                                    the
                                    options, resources, and support
                                    needed to achieve your dream.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row homeAoS grey lighten-3 z-depth-4">
                <div class="section row-band">
                    <div class="container">
                        <div class="row lineup">
                            <div class="col m6 s12">
                                <h2 class="band-title">Areas of Study &
                                    Programs</h2>
                            </div>
                            <div class="col m5 s9 fullHeight alignSearch">
                                <div class="input-field">
                                    <input type="text"
                                           id="autocomplete-input"
                                           placeholder="Search Areas of Study & Programs"
                                           name="search"
                                           class="autocomplete"
                                           onkeyup="buttonUp();" required>
                                </div>
                            </div>
                            <div class="col m1 s3 fullHeight alignSearchUp">
                                <a class="waves-effect waves-light btnSearch">
                                    <i class="material-icons">search</i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dividerDiagGrey"></div>
                        </div>
                        <br>
                        <div class="row" id="AoSgrid">
                            <div class="row AoShome">
                                <div class="col s12 m12 l6 AoScards">
                                    <div class="valign-wrapper rectangle">
                                        <div class="valign left-align row">
                                            <p class="flow-text">Explore
                                                the possibilities of an
                                                ACC education
                                                with
                                                100+
                                                programs in 10
                                                areas of study and more,
                                                geared for transfer and
                                                career
                                                training.</p>
                                            <p><a href="#">Explore All
                                                    Academics & Career
                                                    Programs></a></p>
                                        </div>
                                    </div>
                                </div>
                              <?php
                              $AoSCount = 1;
                              $strain = '/(?<=full\:)(.*)(?=\-\-)/U';
                              foreach ($AoSrecord as $AoS) {
                              if ($AoSCount === 3 || $AoSCount === 7){ ?>
                            </div>
                            <div class="row AoShome">
                              <?php }
                              $AoSparse = explode(' ', $AoS);
                              $AoSback = (list($r, $g, $b) = array_map('hexdec', str_split(ltrim($AoSparse[1], 'Primary#'), 2)));
                              preg_match($strain, $AoS, $AoSHead, PREG_OFFSET_CAPTURE, 0); ?>
                              <?php
                              if ($AoSCount === 3 || $AoSCount === 7) { ?>
                                  <div class="col s12 m6 l3 AoScards cardLeft">
                                      <div class="z-depth-2 card-panel square hide-on-small-only"
                                           style="background-image:url('/sites/default/files/<?php print $AoSparse[0] ?>.jpg');">
                                          <div class="AoSoverlay valign-wrapper hide-on-small-only"
                                               style="background-color: rgba(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>,0.7)">
                                              <div class="valign AoSinitialsHome">
                                                  <h5 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="AoSmob valign-wrapper col s12 hide-on-med-and-up"
                                           style="background-color:rgb(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>)">
                                          <h6 class="valign white-text center-align"><?php print $AoSHead[0][0]; ?></h6>
                                      </div>
                                  </div>
                              <?php }
                              elseif ($AoSCount === 2 || $AoSCount === 6 || $AoSCount === 10) { ?>
                                  <div class="col s12 m6 l3 AoScards cardRight">
                                      <div class="z-depth-2 card-panel square hide-on-small-only"
                                           style="background-image:url('/sites/default/files/<?php print $AoSparse[0] ?>.jpg');">
                                          <div class="AoSoverlay valign-wrapper hide-on-small-only"
                                               style="background-color: rgba(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>,0.7)">
                                              <div class="valign AoSinitialsHome">
                                                  <h5 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="AoSmob valign-wrapper col s12 hide-on-med-and-up"
                                           style="background-color:rgb(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>)">
                                          <h6 class="valign white-text center-align"><?php print $AoSHead[0][0]; ?></h6>
                                      </div>
                                  </div>
                              <?php }
                              else {
                                ?>
                                  <div class="col s12 m6 l3 AoScards">
                                      <div class="z-depth-2 card-panel square hide-on-small-only"
                                           style="background-image:url('/sites/default/files/<?php print $AoSparse[0] ?>.jpg');">
                                          <div class="AoSoverlay valign-wrapper hide-on-small-only"
                                               style="background-color: rgba(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>,0.7)">
                                              <div class="valign AoSinitialsHome">
                                                  <h5 class="aos-card white-text"><?php print $AoSHead[0][0]; ?></h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="AoSmob valign-wrapper col s12 hide-on-med-and-up"
                                           style="background-color:rgb(<?php print $AoSback[0] ?>,<?php print $AoSback[1] ?>,<?php print $AoSback[2] ?>)">
                                          <h6 class="valign white-text center-align"><?php print $AoSHead[0][0]; ?></h6>
                                      </div>
                                  </div>
                              <?php }
                              $AoSCount++;
                              } ?>
                            </div>
                        </div>
                        <div class="row" id="AoSlist"
                             style="display:none;">
                            <div class="AoSlist">
                                <ul class="collection">
                                  <?php foreach ($AoSrecord as $AoS) {
                                    $AoSparse = explode(' ', $AoS);
                                    ?>
                                      <li class="collection-item"
                                          style="text-align: center; background-color: <?php print str_replace('Primary', '', $AoSparse[1]); ?>">
                                          <h4><?php print $AoSparse[0]; ?></h4>
                                      </li>
                                  <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-band homeSpotlight noSideMargin">
                <div class="section">
                    <div class="container" id="spotlightCont">
                        <div class="row lineup">
                            <div class="col s12">
                                <h2 class="band-title white-text">in the
                                    spotlight</h2>
                                <a href="#"><span
                                            class="valign right grey-text text-lighten-2 lineupAction">Visit the ACC Newsroom ></span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dividerDiagGrey"></div>
                        </div>
                        <br/>
                        <div class="row row-content" id="spotCar">
                            <div class="carousel carousel-slider hide-on-small-only">
                                <div class="carousel-item">
                                    <div class="row spotlight">
                                      <?php
                                      $spotCounter = 0;
                                      foreach ($lightTitle as $spots){
                                      if ($spotCounter % 4 === 0 && $spotCounter !== 0){ ?>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row spotlight">
                                      <?php } ?>
                                        <div class="col m3 cardHeight">
                                            <div class="card hoverable">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <img class="activator"
                                                         src="<?php print '/sites/default/files/' . ltrim($lightImage[$spotCounter], 'public://'); ?>">
                                                </div>
                                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?php print $spots ?>
                                        <i class="material-icons right">more_vert</i></span>
                                                </div>
                                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php print $lightTitle[$spotCounter] ?>
                                        <i class="material-icons right">close</i></span>
                                                    <p><?php print $lightBody[$spotCounter] ?></p>
                                                    <p>
                                                        <a href="<?php print $lightLink[$spotCounter] ?>">Full
                                                            Story ></a></p>
                                                </div>
                                            </div>
                                        </div>
                                      <?php
                                      $spotCounter++;
                                      }
                                      ?>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel carousel-slider hide-on-med-and-up">
                              <?php
                              $spotCounter = 0;
                              foreach ($lightTitle as $spots) { ?>
                                  <div class="carousel-item">
                                      <div class="row spotlight">
                                          <div class="cardHeight">
                                              <div class="card">
                                                  <div class="card-image">
                                                      <img class="activator"
                                                           src="<?php print '/sites/default/files/' . ltrim($lightImage[$spotCounter], 'public://'); ?>">
                                                  </div>
                                                  <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><?php print $spots ?>
                                        <i class="material-icons right">more_vert</i></span>
                                                  </div>
                                                  <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?php print $lightTitle[$spotCounter] ?>
                                        <i class="material-icons right">close</i></span>
                                                      <p><?php print $lightBody[$spotCounter] ?></p>
                                                      <p>
                                                          <a href="<?php print $lightLink[$spotCounter] ?>">Full
                                                              Story ></a>
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php
                                $spotCounter++;
                              }
                              ?>
                            </div>
                        </div>
                    </div>
                    <div class="row Arrows">
                        <div id="dirArrows">
                            <div id="leftArrow">
                                <i class="fa fa-angle-left white-text"
                                   aria-hidden="true"></i>
                            </div>
                            <div id="rightArrow">
                                <i class="fa fa-angle-right white-text"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fast-stats"
                 class="row row-band grey lighten-3 z-depth-3">
                <div class="section">
                    <div class="container">
                        <div class="row lineup">
                            <div class="col s12">
                                <h2 class="band-title">best choice for
                                    central texans</h2>
                            </div>
                        </div>
                        <div class="row bottomMargin">
                            <div class="dividerDiagGrey"></div>
                        </div>
                        <div class="row">
                            <div class="col m4 BCcard">
                                <img class="responsive-img"
                                     src="/sites/default/files/fstats-affordable.png">
                            </div>
                            <div class="col m4 BCcard">
                                <img class="responsive-img"
                                     src="/sites/default/files/fstats-highDemand.png">
                            </div>
                            <div class="col m4 BCcard">
                                <img class="responsive-img"
                                     src="/sites/default/files/fstats-excellence.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row events noBottomMargin gradientRadBlue white-text z-depth-3">
                <div class="section">
                    <div class="container">
                        <div class="row lineup">
                            <div class="col s12">
                                <h2 class="band-title white-text">Happening
                                    at ACC</h2>
                                <a href="#"><span
                                            class="valign right grey-text text-lighten-2 lineupAction">View all
                                            calendars ></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dividerDiagGrey"></div>
                        </div>
                        <div class="row row-content">
                            <div class="carousel carousel-slider hide-on-small-only">
                                <div class="carousel-item">
                                    <div class="row white-text">
                                      <?php
                                      $eventCounter = 0;
                                      foreach ($hapTitle as $happenings){
                                      $month = date('M', strtotime($hapDate[$eventCounter]));
                                      $date = date('j', strtotime($hapDate[$eventCounter]));
                                      if ($eventCounter % 3 === 0 && $eventCounter !== 0){ ?>
                                    </div>
                                </div>
                                <div class="carousel-item"><br><br>
                                    <div class="row white-text">
                                      <?php } ?>
                                        <div class="col s12 m6 l4 eventLeftBorder">
                                            <div class="row eventUnit">
                                                <div class="col s12 m3">
                                                    <div class="calendarIcon blue card xsCard">
                                                        <div class="card-content white blue-text">
                                                            <span class="card-title eMonth"><?php print strtoupper($month) ?></span>
                                                            <p class="blue white-text"><?php print $date ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m8">
                                                    <p class="eventTitle">
                                                        <strong><?php print $happenings ?></strong>
                                                    </p>
                                                    <p class="eventDetail"><?php print $hapBody[$eventCounter] ?></p>
                                                    <a href="<?php print $hapLink[$eventCounter] ?>"
                                                       class="eventDetailLink white-link">View
                                                        Event ></a>
                                                </div>
                                            </div>
                                        </div>
                                      <?php
                                      $eventCounter++;
                                      }
                                      ?>
                                    </div>
                                </div>
                            </div>
                            <div class="hide-on-med-and-up">
                                <ul class="collection">
                                  <?php
                                  $eventCounter = 0;
                                  foreach ($hapTitle as $happenings) {
                                    $month = date('M', strtotime($hapDate[$eventCounter]));
                                    $date = date('j', strtotime($hapDate[$eventCounter]));
                                    ?>
                                      <li class="collection-item gradientRadBlue white-text">
                                          <div class="row eventUnit">
                                              <div class="col s3">
                                                  <div class="calendarIcon blue card xsCard">
                                                      <div class="card-content white blue-text">
                                                          <span class="card-title eMonth"><?php print strtoupper($month) ?></span>
                                                          <p class="blue white-text"><?php print $date ?></p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col s8 offset-s1">
                                                  <p class="eventTitle">
                                                      <strong><?php print $happenings ?></strong>
                                                  </p>
                                                  <p class="eventDetail hide-on-med-and-down"><?php print $hapBody[$eventCounter] ?></p>
                                                  <a href="<?php print $hapLink[$eventCounter] ?>"
                                                     class="eventDetailLink white-link">View
                                                      Event ></a>
                                              </div>
                                          </div>
                                      </li>
                                    <?php
                                    $eventCounter++;
                                  }
                                  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-band homeStay z-depth-2 grey lighten-3">
                <div class="section">
                    <div class="container">
                        <div class="row lineup">
                            <div class="col s12 m6">
                                <h2 class="band-title">stay connected</h2>
                            </div>
                            <div class="smicons lineupAction">
                                <a href="#"><i
                                            class="fa fa-linkedin fa-2x grey-text valign"></i></a>
                                <a href="#"><i
                                            class="fa fa-flickr fa-2x grey-text valign"></i></a>
                                <a href="#"><i
                                            class="fa fa-youtube-play fa-2x grey-text valign"></i></a>
                                <a href="#"> <i
                                            class="fa fa-instagram fa-2x grey-text valign"></i></a>
                                <a href="#"> <i
                                            class="fa fa-twitter fa-2x grey-text valign"></i></a>
                                <a href="#"> <i
                                            class="fa fa-facebook fa-2x grey-text valign"></i></a>
                            </div>
                        </div>
                        <div class="dividerDiagGrey"></div>
                        <br>
                        <div class="row">
                            <div class="row socialMasonry">
                                <div class="col m4 s12 mason"
                                     id="fullHeight1">
                                    <div id="player"></div>
                                    <div class="smIconsAbs"><i
                                                class="fa fa-youtube"></i>
                                    </div>
                                </div>
                                <div class="col m4 s12 mason">
                                    <div class="col s12 mason">
                                        <a href="#modal0">
                                            <div class="col m6 mason"
                                                 id="fullHeight2">
                                                <img class="masonImg"
                                                     src="<?php print $imgurl[0] ?>">
                                                <div class="smIconsAbs"><i
                                                            class="fa fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#modal1">
                                            <div class="col m6 mason"
                                                 id="fullHeight3">
                                                <img class="masonImg"
                                                     src="<?php print $imgurl[1] ?>">
                                                <div class="smIconsAbs"><i
                                                            class="fa fa-instagram"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#modal2">
                                            <div class="col s12 valign-wrapper blue mason"
                                                 id="halfHeight1">
                                              <?php print '<div class="valign twitterHome white-text">' . $twittext[4] . '</div>'; ?>
                                                <div class="smIconsAbs"><i
                                                            class="fa fa-twitter"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col m4 s12 mason">
                                    <a href="#modal3">
                                        <div class="col s12 valign-wrapper blue mason"
                                             id="halfHeight2">
                                          <?php print '<div class="valign twitterHome white-text">' . $twittext[5] . '</div>'; ?>
                                            <div class="smIconsAbs"><i
                                                        class="fa fa-twitter"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#modal4">
                                        <div class="col m6 mason"
                                             id="fullHeight4">
                                            <img class="masonImg"
                                                 src="<?php print $imgurl[2] ?>">
                                            <div class="smIconsAbs"><i
                                                        class="fa fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#modal5">
                                        <div class="col m6 mason"
                                             id="fullHeight5">
                                            <img class="masonImg"
                                                 src="<?php print $imgurl[3] ?>">
                                            <div class="smIconsAbs"><i
                                                        class="fa fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col m1 mason"></div>
                            </div>
                        </div>
                        <div id="modal0" class="modal">
                            <div class="modal-content">
                              <?php print $embed[0]; ?>
                            </div>
                        </div>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                              <?php print $embed[1]; ?>
                            </div>
                        </div>
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                              <?php print $embed[4] ?>
                            </div>
                        </div>
                        <div id="modal3" class="modal">
                            <div class="modal-content">
                              <?php print $embed[5] ?>
                            </div>
                        </div>
                        <div id="modal4" class="modal">
                            <div class="modal-content">
                              <?php print $embed[2]; ?>
                            </div>
                        </div>
                        <div id="modal5" class="modal">
                            <div class="modal-content">
                              <?php print $embed[3]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footerNextStep gradientRadPurple">
            <div class="section">
                <div class="container">
                    <div class="row nextStep">
                        <div class="col s12 center-align nextStepPrompt white-text">
                            <div class="row"><h3 class="white-text">GET
                                    STARTED</h3>
                            </div>
                        </div>
                        <div class="col s12 center-align nextStepButtons">
                            <div class="row bottomMargin">
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
                <div id="closeSideNav" onclick="closeSide()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
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
      <?php if (!empty($page['content_band'])) { ?>
          <div class="contentBand">
            <?php print render($page['content_band']); ?>
          </div>
      <?php } ?>
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
                        Austin Community College District<br> 5930 Middle
                        Fiskville Rd <br/> Austin, Texas 78752
                        <br/>512-223-4ACC (4222)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<div id="topPage">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light z-depth-2"
           onclick="topFunction()"><i class="fa fa-chevron-up"
                                      aria-hidden="true"></i></a></div>
</div>
<nav class="z-depth-0 audID2 blue" id="navFoot" role="navigation">
    <div class="nav-wrapper foot hide-on-med-and-down">
        <div class="row aud_menu foot">
            <div class="audIDbottom">
              <?php
              $menua = menu_navigation_links('menu-audience-identifier');
              print theme('links', [
                'links' => $menua,
                'attributes' => ['class' => 'vertA'],
              ]); ?>
            </div>
        </div>
    </div>
    <div class="hide-on-large-only mobAudIcon"><a href="#"
                                                  data-activates="slide-out-footAud"
                                                  class="button-collapse"><i
                    class="material-icons large">person</i></a>
    </div>
    <div class="hide-on-large-only footButL">
        <a class="waves-effect waves-light">APPLY NOW</a>
    </div>
    <div class="hide-on-large-only footButR">
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