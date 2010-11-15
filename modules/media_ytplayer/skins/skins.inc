<?php
// $Id$

/**
 * @file
 * The skins system
 */
 
function _media_ytplayer_init_skins() {
  $path = drupal_get_path('module', 'media_ytplayer');
  $skin = variable_get('media_ytplayer_skins', 'default');
  require_once "./" . $path . "/skins/" . $skin . "/preprocess.php";
  
}

function media_ytplayer_add_js($file = 'base') {
  $path = drupal_get_path('module', 'media_ytplayer');
  $skin = variable_get('media_ytplayer_skins', 'default');
  
  if ($file == 'swfobject') { 
    $file = $file . '/' . $file;
    drupal_add_js($path . '/js/' . $file . '.js');
  }
  elseif ($file == 'base') {
    drupal_add_js($path . '/skins/' . $skin . '/js/' . $file . '.js');
  }
  else {
    drupal_add_js($path . '/js/' . $file . '.js');
  }

}

function media_ytplayer_add_css($file = 'base') {
  $path = drupal_get_path('module', 'media_ytplayer');
  $skin = variable_get('media_ytplayer_skins', 'default');

  drupal_add_css($path . '/skins/' . $skin . '/css/' . $file . '.css');
}
