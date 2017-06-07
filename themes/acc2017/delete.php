<div class="carouselBand noSideMargin">
    <div class="container" id="spotlightCont">
        <div class="row lineup">
            <h2 class="band-title white-text">in the
                spotlight</h2>
            <a href="#"
               class="right-align grey-text text-lighten-2 lineupAction">Visit
                the ACC Newsroom ></a>
        </div>
        <div class="row">
            <div class="dividerDiagGrey"></div>
        </div>
        <br/>
        <div class="row" id="spotCar">
            <div class="slider">
              <?php
              $spotCounter = 0;
              foreach ($lightTitle as $spots) { ?>
                  <div class="card z-depth-2">
                      <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator"
                               src="<?php print '/sites/default/files/' . ltrim($lightImage[$spotCounter], 'public://'); ?>">
                      </div>
                      <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php print $spots ?>
                        <i
                                class="material-icons right">more_vert</i></span>
                      </div>
                      <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php print $spots ?>
                        <i
                                class="material-icons right">close</i></span>
                          <p><?php print $lightBody[$spotCounter] ?></p>
                          <p>
                              <a href="<?php print $lightLink[$spotCounter] ?>">Full
                                  Story ></a>
                          </p>
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
                <h2><i class="fa fa-angle-left white-text"
                       aria-hidden="true"></i></h2>
            </div>
            <div id="rightArrow">
                <h2><i class="fa fa-angle-right white-text"
                       aria-hidden="true"></i></h2>
            </div>
        </div>
    </div>
</div>