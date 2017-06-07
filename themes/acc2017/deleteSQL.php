<?php
if (!db_table_exists('wponet')) {
  $wponet_schema = [
    'description' => 'Table that keeps track of onet assignment.',
    'fields' => [
      'nid' => ['type' => 'int', 'unsigned' => TRUE, 'not null' => TRUE],
      'program' => [
        'type' => 'varchar',
        'length' => 256,
        'not null' => TRUE,
        'default' => '',
      ],
      'onet' => [
        'type' => 'varchar',
        'length' => 256,
        'not null' => TRUE,
        'default' => '',
      ],
      'title' => [
        'type' => 'varchar',
        'length' => 256,
        'not null' => TRUE,
        'default' => '',
      ],
    ],
  ];
  db_create_table('wponet', $wponet_schema);
}
$res = db_query("SELECT node_id, title, onet FROM onet_codes WHERE node_id <> 0 ORDER BY node_id ASC;");
$rec = $res->fetchAll();
foreach ($rec as $r) {
  $lkup = db_query("SELECT title FROM node WHERE nid = $r->node_id;");
  $lkupF = $lkup->fetchField();
  db_merge('wponet')
    ->key(['onet' => $r->onet])
    ->fields([
      'nid' => $r->node_id,
      'program' => $lkupF,
      'onet' => $r->onet,
      'title' => $r->title,
    ])
    ->execute();
}

