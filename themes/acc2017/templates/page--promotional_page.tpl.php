<div id="page">
    <div class="header overlay">
        <div id="acc-logo">
          <?php if ($logo) { ?>
              <a class="acc-logo" href="<?php print $front_page; ?>"
                 title="<?php print t('Home'); ?>">
                  <img src="<?php print $logo; ?>"
                       alt="<?php print t('Home'); ?>"/>
              </a>
          <?php }; ?>
        </div>
        <nav class="z-depth-0 audID hide-on-med-and-down" id="navAud"
             role="navigation">
            <div class="nav-wrapper">
                <div class="row aud_menu">
                    <div class="audID valign-wrapper" id="audIDnav">
                      <?php
                      $menua = menu_navigation_links('menu-audience-identifier');
                      print theme('links', [
                        'links' => $menua,
                        'attributes' => ['class' => 'vertA'],
                      ]); ?>
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
        <nav class="z-depth-5 priMenu hide-on-med-and-down" id="navPrim"
             role="navigation">
            <div class="nav-wrapper">
                <div class="row prim_menu noSideMargin">
                    <div class="primaryMenu valign-wrapper">
                      <?php
                      $menub = menu_navigation_links('menu-primary-navigation');
                      print theme('links', [
                        'links' => $menub,
                        'attributes' => ['class' => 'vertA'],
                      ]); ?>
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
    <div class="main">
        <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
            <div class="content"<?php print $content_attributes; ?>>
                <div class="content">
                    <div class="col s12 lineup">
                        <img class="responsive-img hero"
                             src="/sites/default/files/CLHero.jpg">
                        <div class="row Title">
                            <div class="col m6 s12 offset-m3 proTitle purShade">
                              <?php print render($title_prefix);
                              if ($node = menu_get_object()) {
                                $nid = $node->nid;
                              }
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
                    </div>
                    <div class="row row-band cLWelcome z-depth-1 noSideMargins">
                        <div class="section">
                            <div class="container">
                                <div class="row bottomMargin">
                                    <div class="col s12">
                                        <h2 class="band-title blue-text">welcome
                                            riverbats</h2>
                                        <div class="dividerDiagBlue"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <p class="flow-text"><strong> A
                                                    community where you belong.
                                                </strong></p>
                                            <p class="flow-text"> Step foot on
                                                any ACC campus and you’re sure
                                                to catch the special energy and
                                                excitement. This is Riverbat
                                                country, and big things are
                                                always happening here! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-band cLPride">
                    <div class="section">
                        <div class="container">
                            <div class="row bottomMargin">
                                <div class="col s12">
                                    <h2 class="band-title white-text">Pride &
                                        Traditions</h2>
                                    <div class="dividerDiagGrey"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m6">
                                    <p class="flow-text white-text">
                                        ACC’s four-decade history is steeped in
                                        an abundance of pride where our beloved
                                        mascot, R.B. the Riverbat, symbolizes
                                        the strength of more than 40,000
                                        students. We honor the spirit of the ACC
                                        community with traditional Welcome Week
                                        events at every campus in the fall and
                                        spring semesters and the annual Riverbat
                                        Bash.
                                    </p>
                                </div>
                                <div class="col s12 m6">
                                    <div class="video-container">
                                        <iframe width="853" height="480"
                                                src="https://www.youtube.com/embed/0H2BDOfhMYA?rel=0"
                                                frameborder="0"
                                                allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-band cLActivities noSideMargins">
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <h2 class="band-title blue-text">get
                                        involved!</h2>
                                    <div class="dividerDiagBlue"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <p class="flow-text"><strong> No matter your
                                            interests, there’s something here
                                            for you to do, see, and experience.
                                        </strong></p>
                                    <p class="flow-text"> Student activities
                                        help you gain valuable skills and simply
                                        add a little fun to your time at ACC.
                                        There are more than 70 student
                                        organizations and a number of
                                        activities, focusing on everything from
                                        student government to intramural sports,
                                        to honor societies such as Phi Theta
                                        Kappa. If you don't see what you’re
                                        looking for, you can even create your
                                        own organization! </p>
                                </div>
                            </div>
                            <div class="row rowGetInvolved">
                                <div class="col s12 m4">
                                    <div class="card">
                                        <div class="card-image"><img
                                                    src="/sites/default/files/cLGetInvolved1.jpg"
                                                    class="responsive-img">
                                            <span class="card-title gradientRadPurple white-text">Student Government</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card">
                                        <div class="card-image"><img
                                                    src="/sites/default/files/cLifeSLA-2.jpg"
                                                    class="responsive-img">
                                            <span class="card-title gradientRadPurple white-text">Intramural Sports</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="card">
                                        <div class="card-image"><img
                                                    src="/sites/default/files/cLifeSLA-3.jpg"
                                                    class="responsive-img">
                                            <span class="card-title gradientRadPurple white-text">Campus Events</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"></div>
                        </div>
                    </div>
                </div>
                <div class="row row-band CLTestimonial testimonial gradientRadPurple white-text z-depth-2 noSideMargin">
                    <div class="section">
                        <div class="container">
                            <div class="row beginQuote">
                                <div class="col s1 qMark no-pad"><img
                                            src="/sites/default/files/leftQuoteWhite.png"
                                            class="responsive-img"></div>
                                <div class="col s11 quote">
                                    <p class="white-text flow-text"><em>Being
                                            part of the intramurals program has
                                            been a great way to relieve stress
                                            from classes and work. It's a
                                            judgment-free zone with a lot of
                                            motivating and encouraging people
                                            around you.” </em></p>
                                    <p class="right-align white-text serif">
                                        -<em> Fiona F., Intramurals

                                        </em></p>
                                </div>
                                <img class="responsive-img circle imgTestimonial z-depth-1"
                                     src="/sites/default/files/CLtestimonial.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-band SLActivities noSideMargins">
                    <div class="section">
                        <div class="container">
                            <div class="row nav nav-transparent">
                                <div class="col s12 nav-wrapper">
                                    <h2 class="band-title brand-logo">
                                        Student Life Programs</h2>
                                    <div class="dividerDiagGreen"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <p class="flow-text">The Student Life Office
                                        is the hub for out-of-the classroom
                                        programs that complement your academic
                                        experience. Want to explore your
                                        leadership potential, make a meaningful
                                        mark in the community, or help be the
                                        voice of the student body? Do it with
                                        Student Life. </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row fFacts">
                                <div class="col s12 m4 center-align lightgreen-text">
                                    <i class="material-icons large ">add_a_photo</i>
                                    <br>
                                    <h5 class="center-align lightgreen-text">
                                        <strong>Student
                                            Media</strong></h5>
                                    <div class="dividerDiagGreen"></div>
                                    <br>
                                    <p class="center-align">Lend your talents to
                                        help create student-led publications and
                                        multimedia productions.</p>
                                </div>
                                <div class="col s12 m4 center-align lightgreen-text">
                                    <i class="material-icons large">nature_people</i>
                                    <br>
                                    <h5 class="center-align lightgreen-text">
                                        <strong>Volunteer
                                            Opportunities</strong></h5>
                                    <div class="dividerDiagGreen"></div>
                                    <br>
                                    <p class="center-align">Connect and give
                                        back to the community with a variety of
                                        service opportunities.</p>
                                </div>
                                <div class="col s12 m4 center-align lightgreen-text">
                                    <i class="material-icons large">people</i>
                                    <br>
                                    <h5 class="center-align lightgreen-text">
                                        <strong>Leadership
                                            Development</strong></h5>
                                    <div class="dividerDiagGreen"></div>
                                    <br>
                                    <p class="center-align"> Build skills to
                                        lead with workshops and other
                                        opportunities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-band studLifeAct z-depth-1 grey lighten-3 noSideMargins">
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <h2 class="band-title">Arts & Culture </h2>
                                    <div class="dividerDiagGrey"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <p class="flow-text">Enjoy award-winning
                                        theater, music, and dance performances,
                                        art exhibitions, renowned guest
                                        speakers, and more. There’s lots of fun
                                        and inspiring things to experience at
                                        Austin Community College. </p>
                                </div>
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL001.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL002.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL003.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL004.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL005.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL006.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL007.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL008.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL009.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL010.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL011.JPG"
                                     alt="Arts & Culture">
                            </div>
                            <div class="masonPad">
                                <img class="responsive-img"
                                     src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL012.JPG"
                                     alt="Arts & Culture">
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
                      print theme('links__menu-primary-navigation', ['links' => $menub]); ?>
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