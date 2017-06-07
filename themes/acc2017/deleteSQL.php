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