<?php
global $user;
if ($user->name == 'douglasbluff') {
  $res = db_query("SELECT node_id, title, onet FROM onet_codes WHERE node_id <> 0 ORDER BY node_id ASC;");
  $rec = $res->fetchAll();
  foreach ($rec as $r) {
    print '<pre>';
    print_r($r);
    print '</pre>';
  }
}


db_merge('node_table')
  ->key(array('name' => $name))
  ->fields(array(
    'field1' => $value1,
    'field2' => $value2,
  ))
  ->execute();


create database
row onet
row program (node_id)
?>

<div class="row row-band studLifeAct z-depth-1 grey lighten-3 noSideMargins">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col s12 bTCol">
          <h2 class="band-title">Arts & Culture </h2>
          <div class="dividerDiagGrey"></div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <p class="flow-text">Enjoy award-winning theater, music, and dance performances, art exhibitions, renowned guest speakers, and more. There’s lots of fun and inspiring things to experience at Austin Community College. </p>
        </div>
      </div>
      <div class="row">
        <div class="gallery noSideMargin">
          <a>
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL001.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL002.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL003.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL004.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL005.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL006.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL007.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL008.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL009.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL010.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL011.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
          <a href="#">
            <figure> <img class="hover" src="/sites/default/files/cLifeGallery/1024x768/CLArtsCultureL012.JPG" alt="Arts & Culture"><p class="caption white-text center-align">Caption Text</p> </figure>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>