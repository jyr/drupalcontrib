<?php
//$id$

//print_r($vars);
$nodes = $vars['nodes'];
$system_types = _content_type_info();
//print_r($system_types['fields']['field_youtubeprev']);
$field = $system_types['fields']['field_video'];
$yturl_base = "http://www.youtube.com/v/";
$ytargs = "?enablejsapi=1&playerapiid=ytplayer";
?>
<div id="player">
  <ul>
  <?php
    $j = 1;
    foreach ($nodes as $node) {
  ?>
    <li class="video-yt" id="<?php print "li-ytplayer".$j;?>">
      <div id="ytapiplayer-<?php print $j;?>">
        You need Flash player 8+ and JavaScript enabled to view this video.
      </div>
      <script type="text/javascript">
        var embed = 
        <?php print "\"".$yturl_base.$node->field_video[0]['value'].$ytargs.$j."\";";?>
        var id ="ytapiplayer-"+<?php print $j?>;
        var params = { allowScriptAccess: "always" };
        var atts = { id: "myytplayer"+<?php print $j++;?> };
        swfobject.embedSWF(embed, id, "290", "218", "8", null, null, params, atts);

      </script>
    </li>
  <?php
    }
  ?>
  </ul>
  
  <div class="clear"></div>
  
  <?php
    $i = 1;
    foreach($nodes as $node){
      if($i == 1){ $class = 'selected';}
      if($i == 2){ $class = 'midle';}
    ?>
      <div class="extrainfo <?php print $class;?>" id="extrainfo-<?php print $i;?>">
        <?php //print theme('emvideo_video_thumbnail', $field, $node->field_video[0], 'emvideo_thumbnails', $node);?>
        <a href="#" class="<?php print $i;?>" onclick="play(<?php print $i++;?>);">
          <div class="thumb">
            <img src="<?php print $node->field_video[0]['data']['thumbnail']['url'];?>" width="70" height="55">
            <?php //print theme('imagecache','youtube',$node->field_youtubeprev[0]['data']['thumbnail']['url']);?>
          </div>
          <?php print node_teaser($node->body,null,60)?>
        </a>
      </div>
    <?
    unset($class);
    }
  ?>
</div>
