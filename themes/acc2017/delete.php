<?php
global $user;
if ($user->name == 'douglasbluff') {
  print 'hello world';
  $ccProgList = array();
  $res = db_query("SELECT DISTINCT node_id FROM onet_codes WHERE node_id <> 0 ORDER BY node_id ASC;");
  $rec = $res->fetchCol();
  if (isset($rec)) {
    foreach ($rec as $r) {
      class programOnet {
      function set_title($new_title) {

      }
      }
      $ti = db_query("SELECT title FROM node WHERE nid = $r;");
      $par = $ti->fetchCol();
      $ccProgList += [$r => $par[0]];
    }
  }
  foreach ($ccProgList as $c => $cc) {
    $c = (string)$c;
    $netArray = '$net' . $c;
    $retonet = db_query("SELECT onet FROM onet_codes WHERE node_id = $c ORDER BY onet ASC;");
    $reconet = $retonet->fetchCol();
    foreach ($reconet as $a) {
      ${$netArray}[] = $a;
    }
    print '<pre>';
    print_r(${$netArray});
    print '</pre>';
  }
}



${$variableName} = $value;

node / onet;
node / onet;



  foreach ($rec as $r) {
    if (isset($r->node_id)) {
      $ti = db_query("SELECT title FROM node WHERE nid = $r->node_id ORDER BY title ASC;");
      $par = $ti->fetchCol();
      foreach ($par as $p) {
        if (isset($p)) {
          $arrayName = $p . 'Array';
          print '<br />';
          print_r($arrayName);
        }
      }
    }
  }
}


//GOAL OUTPUT
$title = array('12345onet','12345onet','12345onet');