<?php
//$id$

$field_name = _media_ytplayer_field_name();
$nodes = $vars['nodes'];

?>
<div id="" class="player">
  <?php print theme('embed_youtube_viewer', $nodes, "280", "218")?>  
</div>

<div class="initial">
  <a class="prev" href="#"><</a>
</div>
<div id="" class="videos">
  <ul>
  <?php
    $i = 1;
    foreach($nodes as $k => $node){
      if($i == 1){ $class = 'selected';}
      if($i == 2){ $class = 'midle';}
      $array = (array) $node;
      foreach ($field_name as $key => $name) {
        if(isset($array[$name])){
          $thumbnail = $array[$name][0]['data']['thumbnail']['url'];
        }
      }
    ?>    
    <li>
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
    </li>
    <?
    unset($class);
    }
  ?>
</div>
<div class="end">
  <a class="next" href="#">></a>
</div>
<div class="clear"></div>
<div id="more">
  <a href="<?php print base_path()."more";?>">> more videos</a>
</div>