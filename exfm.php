<?php
/*
Plugin Name: exfm music player
Plugin URI: http://ex.fm/site-player
Description: The exfm site player is the easiest way to play back music on your site - mp3's, Soundcloud, Bandcamp and more. It even works on iPhone and Android. It only takes a few seconds to set up.
Author: Extension Entertainment Inc.
Author URI: http://ex.fm
Version: 1.0
*/
function add_player() {
  $player_code = <<<JS
  <script type="text/javascript">
    (function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = 'http://static.extension.fm/exfm.js';
        document.getElementsByTagName('head')[0].appendChild(s);
    })();
  </script>
JS;
	echo $player_code;
  	
}
add_action('wp_head', 'add_player');

?>