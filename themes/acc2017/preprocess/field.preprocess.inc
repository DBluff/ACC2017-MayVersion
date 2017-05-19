<?php

/**
 * @file
 * Contains preprocess functions for field.
 */

/**
 * Implements hook_preprocess_field().
 */
function acc2017_preprocess_field(&$vars) {
  if ($vars['element']['#field_name'] == 'field_tags' || $vars['element']['#field_name'] == 'taxonomy_forums') {
    array_walk($vars['items'], 'acc2017_update_element_classes');
  }
}

/**
 * Adds necessary classes for the field element.
 */
function acc2017_update_element_classes(&$el) {
  $el['#options']['attributes']['class'][] = 'chip';
}
