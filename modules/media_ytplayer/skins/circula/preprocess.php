<?php
//$id$

function template_preprocess_circula(&$vars) {
  media_ytplayer_add_css();
  //print_r($vars);
  media_ytplayer_add_js();
  media_ytplayer_add_js('swfobject');
  media_ytplayer_add_js('youtube');
  media_ytplayer_add_js('jcarousellite');
  
}