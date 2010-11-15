<?php
//$id$

$field_name = _media_ytplayer_field_name();
$nodes = $vars['nodes'];
$system_types = _content_type_info();
$field = $system_types['fields']['field_video'];
$yturl_base = "http://www.youtube.com/v/";
$ytargs = "?enablejsapi=1&playerapiid=ytplayer";

?>
<div id="" class="player">
  <ul>
    <?php
      $j = 1;
      foreach ($nodes as $node) {
        $array = (array) $node;
        foreach ($field_name as $key => $name) {
          //print_r($name);
          if(isset($array[$name])){
            $video = $array[$name][0]['value'];
            $thumbnail = $array[$name][0]['data']['thumbnail']['url'];
          }
        }
      ?>
        <li class="video-yt" id="<?php print "li-ytplayer".$j;?>">
          <div id="viewer">
            <div id="ytapiplayer-<?php print $j;?>">
              You need Flash player 8+ and JavaScript enabled to view this video.
            </div>
            <script type="text/javascript">
              var embed = 
              <?php print "\"".$yturl_base.$video.$ytargs.$j."\";";?>
              var id ="ytapiplayer-"+<?php print $j?>;
              var params = { allowScriptAccess: "always" };
              var atts = { id: "myytplayer"+<?php print $j++;?> };
              swfobject.embedSWF(embed, id, "280", "218", "8", null, null, params, atts);

            </script>
          </div>
        </li>
      <?}
    ?>
  </ul> 
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