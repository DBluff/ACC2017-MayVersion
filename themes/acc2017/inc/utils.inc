<?php

/**
 * @file
 * acc2017 helper functions.
 */

/**
 * Checks if there is library with specified file.
 */
function acc2017_check_library($library_name, $file_name) {
  if (!module_exists('libraries')) {
    drupal_set_message(t('acc2017 requires the Libraries API module, please install it from https://drupal.org/project/libraries before using the theme.'), 'error', FALSE);
    return FALSE;
  }

  $path = libraries_get_path($library_name);
  if ($path && is_file($path . '/' . $file_name)) {
    return TRUE;
  }
  return FALSE;
}
