<?php

// Include drupal theme and helper functions.
require_once dirname(__FILE__) . '/inc/menu.inc';
require_once dirname(__FILE__) . '/inc/form.inc';
require_once dirname(__FILE__) . '/inc/breadcrumb.inc';

function acc2017_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'acc2017') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
      'acc2017_preprocess_user_login'
    ),
  );
  return $items;
}

function acc2017_preprocess_html(&$variables)
{
    drupal_add_css('https://fonts.googleapis.com/icon?family=Material+Icons', array('type' => 'external'));
    drupal_add_css('https://fonts.googleapis.com/css?family=Archivo+Black', array('type' => 'external'));
    drupal_add_css('https://fonts.googleapis.com/css?family=Droid+Serif', array('type' => 'external'));
}

function acc2017_preprocess_page(&$vars, $hook)
{
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
}