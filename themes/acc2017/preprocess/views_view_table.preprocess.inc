<?php

/**
 * @file
 * Contains preprocess functions for views_view_table.
 */

/**
 * Implements hook_preprocess_views_view_table().
 */
function acc2017_preprocess_views_view_table(&$vars) {
  $vars['attributes']['class'][] = 'bordered';
  $vars['attributes']['class'][] = 'striped';
}
