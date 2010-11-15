<?php
//$id$

$field_name = _media_ytplayer_field_name();
$nodes = $vars['nodes'];

?>
<div id="player">
  <?php print theme('embed_youtube_viewer', $nodes, "230", "218")?>  
  <div class="clear"></div>
  <div id="playlist">
    <?php
      $i = 1;
      foreach($nodes as $node){
        if($i == 1){ $class = 'selected';}
        if($i == 2){ $class = 'midle';}
        $array = (array) $node;
        foreach ($field_name as $key => $name) {
          if(isset($array[$name])){
            $thumbnail = $array[$name][0]['data']['thumbnail']['url'];
          }
        }
      ?>
        <div class="extrainfo <?php print $class;?>" id="extrainfo-<?php print $i;?>">
          <a href="#" class="<?php print $i;?>" onclick="play(<?php print $i++;?>);">
            <div class="thumb">
              <img src="<?php print $thumbnail;?>" width="70" height="55">
            </div>
            <div class="title">
              <?php print $node->title;?>
            </div>
          </a>
        </div>
        <div class="clear"></div>
      <?
      unset($class);
      }
    ?>
  </div>
</div>
