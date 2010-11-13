<?php
// $Id$

function template_preprocess_player(&$vars) {
  media_ytplayer_add_css();
  //print_r($vars);
  media_ytplayer_add_js();
  media_ytplayer_add_js('swfobject');
  media_ytplayer_add_js('youtube');
  media_ytplayer_add_js('jcarousellite');
  
}

function template_preprocess_player_circula(&$vars) {
  media_ytplayer_add_css();
  //print_r($vars);
  media_ytplayer_add_js();
  media_ytplayer_add_js('swfobject');
  media_ytplayer_add_js('youtube');
  media_ytplayer_add_js('jcarousellite');
  
}

function template_preprocess_player_supervia(&$vars) {
  media_ytplayer_add_css('player_supervia');
  //print_r($vars);
  media_ytplayer_add_js('player_supervia');
  media_ytplayer_add_js('swfobject');
  media_ytplayer_add_js('youtube');
  media_ytplayer_add_js('jcarousellite');
  
}

function template_preprocess_player_record(&$vars) {
  media_ytplayer_add_css();
  //print_r($vars);
  media_ytplayer_add_js();
  media_ytplayer_add_js('swfobject');
  media_ytplayer_add_js('youtube');
  media_ytplayer_add_js('jcarousellite');
  
}

function media_ytplayer_add_js($file = 'base') {
  $path = drupal_get_path('module', 'media_ytplayer');

  if ($file == 'swfobject') { 
    $file = $file . '/' . $file;
  }

  drupal_add_js($path . '/js/' . $file . '.js');
}

function media_ytplayer_add_css($file = 'media_ytplayer') {
  $path = drupal_get_path('module', 'media_ytplayer');
  
  drupal_add_css($path . '/css/' . $file . '.css');
}
