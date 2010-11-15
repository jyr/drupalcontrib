<?php
//$id$

$field_name = _media_ytplayer_field_name();
$nodes = $vars['nodes'];
?>
<div id="player-supervia">
  <?php print theme('embed_youtube_viewer', $nodes, "425", "320")?>  
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
            <?php print $node->title;?>
          </a>
        </div>
      <?
      unset($class);
      }
    ?>
    <div class="clear"></div>
    
    <div id="more">
      <a href="<?php print base_path()."more";?>">> more</a>
    </div>
  </div>
</div>
