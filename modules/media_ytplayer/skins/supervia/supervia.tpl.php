<?php
//$id$

$field_name = _media_ytplayer_field_name();
$nodes = $vars['nodes'];
$system_types = _content_type_info();
$field = $system_types['fields']['field_video'];
$yturl_base = "http://www.youtube.com/v/";
$ytargs = "?enablejsapi=1&playerapiid=ytplayer";

?>
<div id="player-supervia">
  <div id="viewer">
    <ul>
    <?php
      $j = 1;
      foreach ($nodes as $node) {
        $array = (array) $node;
        foreach ($field_name as $key => $name) {
          //print_r($name);
          if(isset($array[$name])){
            $video = $array[$name][0]['value'];
            //print "existe";
          }
        }
    ?>
      <li class="video-yt" id="<?php print "li-ytplayer".$j;?>">
        <div id="ytapiplayer-<?php print $j;?>">
          You need Flash player 8+ and JavaScript enabled to view this video.
        </div>
        <script type="text/javascript">
          var embed = 
          <?php print "\"".$yturl_base.$video.$ytargs.$j."\";";?>
          var id ="ytapiplayer-"+<?php print $j?>;
          var params = { allowScriptAccess: "always" };
          var atts = { id: "myytplayer"+<?php print $j++;?> };
          swfobject.embedSWF(embed, id, "425", "320", "8", null, null, params, atts);

        </script>
      </li>
    <?php
      }
    ?>
    </ul>
  </div>  
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
