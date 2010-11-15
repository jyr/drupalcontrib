<div id="viewer">
  <ul>
  <?php
    $j = 1;
    foreach ($nodes as $node) {
      $array = (array) $node;
      foreach ($field as $key => $name) {
        if(isset($array[$name])){
          $video = $array[$name][0]['value'];
        }
      }
  ?>
    <li class="video-yt" id="<?php print "li-ytplayer".$j;?>">
      <div id="ytapiplayer-<?php print $j;?>">
        You need Flash player 8+ and JavaScript enabled to view this video.
      </div>
      <script type="text/javascript">
        var embed = <?php print "\"".$url.$video.$args.$j."\";";?>
        var id ="ytapiplayer-"+<?php print $j?>;
        var params = { allowScriptAccess: "always" };
        var atts = { id: "myytplayer"+<?php print $j++;?> };
        var width = <?php print "\"" . $width . "\";";?>
        var height = <?php print "\"" . $height . "\";";?>
        swfobject.embedSWF(embed, id, width, height, "8", null, null, params, atts);

      </script>
    </li>
  <?php
    }
  ?>
  </ul>
</div>