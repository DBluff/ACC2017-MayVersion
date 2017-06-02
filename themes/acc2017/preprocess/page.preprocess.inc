<?php

/**
 * @file
 * Preprocess functions for page.
 */

/**
 * Implements hook_preprocess_page().
 */
function acc2017_preprocess_page(&$variables) {
  if (drupal_is_front_page()) {
    $vidID = db_query("SELECT field_video_id_value FROM field_data_field_video_id where bundle='youtube_video'");
    $videoID = $vidID->fetchCol();
    foreach ($videoID as $video) {
      $variables['videoID'] = $video;
    }
    $heroImg = db_query('SELECT entity_id FROM field_data_field_homepage_hero_image');
    if (!empty($heroImg)) {
      $myHero = $heroImg->fetchCol();
      $homepageContent = entity_load('node', $myHero);
      $homepageContent = json_decode(json_encode($homepageContent), TRUE);
      $variables['homepageContent'] = $homepageContent;
    }
    $qResult = db_query('SELECT name FROM taxonomy_term_data WHERE vid=2');
    if (!empty($qResult)) {
      $AoSrecord = $qResult->fetchCol();
      $variables['AoSrecord'] = $AoSrecord;
    }
    $socResults = db_query('SELECT sid, embed, imgurl, twittext FROM soc_media;');
    if (!empty($socResults)) {
      $socCount = 0;
      foreach ($socResults as $soc) {
        $variables['embed'][$socCount] = $soc->embed;
        $variables['imgurl'][$socCount] = $soc->imgurl;
        $variables['twittext'][$socCount] = $soc->twittext;
        $socCount++;

      }
    }
    $whaHappen = db_query("SELECT nid, title FROM node WHERE type='happening_at_acc';");
    if (!empty($whaHappen)) {
      foreach ($whaHappen as $theHaps) {
        $nodes[] = node_load($theHaps->nid);
      }
      usort($nodes, function ($a, $b) {
        return strcmp($a->field_priority[LANGUAGE_NONE][0]['value'], $b->field_priority[LANGUAGE_NONE][0]['value']);
      });
      $nodesCount = 0;
      foreach ($nodes as $nodeScrape) {
        $variables['hapTitle'][$nodesCount] = $nodeScrape->title;
        $variables['hapBody'][$nodesCount] = $nodeScrape->body[LANGUAGE_NONE][0]['value'];
        $variables['hapLink'][$nodesCount] = $nodeScrape->field_link_to_event[LANGUAGE_NONE][0]['value'];
        $variables['hapDate'][$nodesCount] = ($nodeScrape->field_date_of_event[LANGUAGE_NONE][0]['value']);
        $nodesCount++;
      }
    }
    $dbspotlight = db_query("SELECT nid, title FROM node WHERE type='in_the_spotlight';");
    if (!empty($dbspotlight)) {
      foreach ($dbspotlight as $spot) {
        $lightnodes[] = node_load($spot->nid);
      }
      usort($lightnodes, function ($a, $b) {
        return strcmp($a->field_spotlight_priority[LANGUAGE_NONE][0]['value'], $b->field_spotlight_priority[LANGUAGE_NONE][0]['value']);
      });
      $lightCount = 0;
      foreach ($lightnodes as $lightScrape) {
        if ($lightScrape->field_appears_on_pages[LANGUAGE_NONE][0]['tid'] === '22') {
          $variables['lightTitle'][$lightCount] = $lightScrape->title;
          $variables['lightBody'][$lightCount] = $lightScrape->body[LANGUAGE_NONE][0]['value'];
          $variables['lightLink'][$lightCount] = $lightScrape->field_spotlight_link[LANGUAGE_NONE][0]['value'];
          $variables['lightImage'][$lightCount] = ($lightScrape->field_spotlight_image[LANGUAGE_NONE][0]['uri']);
          $lightCount++;
        }
      }
    }
    drupal_add_js(drupal_get_path('theme', 'acc2017') . '/js/carouselFix.js');
    $variables['scripts'] = drupal_get_js();
  }
  if (!empty($variables['page']['sidebar_first'])) {
    $left = $variables['page']['sidebar_first'];
  }

  if (!empty($variables['page']['sidebar_second'])) {
    $right = $variables['page']['sidebar_second'];
  }
  // Dynamic sidebars.
  if (!empty($left) && !empty($right)) {
    $variables['main_grid'] = 'col s12 m6';
    $variables['sidebar_left'] = 'col s12 m3';
    $variables['sidebar_right'] = 'col s12 m3';
  }
  elseif (empty($left) && !empty($right)) {
    $variables['main_grid'] = 'col s12 m9';
    $variables['sidebar_left'] = '';
    $variables['sidebar_right'] = 'col s12 m3';
  }
  elseif (!empty($left) && empty($right)) {
    $variables['main_grid'] = 'col s12 m9';
    $variables['sidebar_left'] = 'col s12 m3';
    $variables['sidebar_right'] = '';
  }
  else {
    $variables['main_grid'] = 'col s12';
    $variables['sidebar_left'] = '';
    $variables['sidebar_right'] = '';
  }

  // Primary nav.
  $variables['primary_nav'] = FALSE;
  if ($variables['main_menu']) {
    // Build links.
    $variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    // Provide default theme wrapper function.
    $variables['primary_nav']['#theme_wrappers'] = ['menu_tree__primary'];
  }
  // Secondary nav.
  $variables['secondary_nav'] = FALSE;
  if ($variables['secondary_menu']) {
    // Build links.
    $variables['secondary_nav'] = menu_tree(variable_get('menu_secondary_links_source', 'user-menu'));
    // Provide default theme wrapper function.
    $variables['secondary_nav']['#theme_wrappers'] = ['menu_tree__secondary'];
  }
  // Update menus in sidebars to use separate wrapper.
  acc2017_iscale_page_update_sidebar_menus($variables);
  // As we are placing secondary menu inside the wrapper we need to split menus
  // into two variables.
  $variables['tabs_primary'] = $variables['tabs'];
  unset($variables['tabs_primary']['#secondary']);
  $variables['tabs_secondary'] = $variables['tabs'];
  unset($variables['tabs_secondary']['#primary']);

  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }


}

/**
 * Update menu if it is placed in a sidebar.
 *
 * By default Drupal renders block title above the block. It would be good to
 * render it as a menu title inside menu structure (with classes "header item").
 *
 * @param array $variables
 *   An array of variables passed from hook_preprocess_page().
 */
function acc2017_iscale_page_update_sidebar_menus(&$variables) {
  $menus = menu_get_menus(TRUE);
  $sidebars = ['sidebar_first', 'sidebar_second'];

  // Walk through both sidebars.
  foreach ($sidebars as $sidebar) {
    $sidebar_elements = isset($variables['page'][$sidebar]) ? element_children($variables['page'][$sidebar]) : [];
    foreach ($sidebar_elements as $element_name) {
      $element = $variables['page'][$sidebar][$element_name];

      // Check if sidebar element is a menu.
      if (isset($element['#block']) &&
        in_array($element['#block']->module, ['system', 'menu']) &&
        array_key_exists($element['#block']->delta, $menus)
      ) {

        // Do not add title item if it is empty.
        if (!empty($variables['page'][$sidebar][$element_name]['#block']->subject)) {
          $menu_header['menu_header'] = [
            '#prefix' => '<h4 class="collection-header">',
            '#suffix' => '</h4>',
          ];
          $menu_header['menu_header']['header'] = [
            '#markup' => $variables['page'][$sidebar][$element_name]['#block']->subject,
          ];

          $variables['page'][$sidebar][$element_name] = $menu_header + $variables['page'][$sidebar][$element_name];
        }

        $variables['page'][$sidebar][$element_name]['#is_menu'] = TRUE;
      }
    }
  }
}
