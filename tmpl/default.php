<?php
// No direct access
defined('_JEXEC') or die;
$count = $params->get('limit');
if(!empty($streams)||!empty($main_streams)){
	echo "<ul class='streaming_nacional'>";
	// Main Stream
	foreach($main_streams as $key => $stream){
		if($count>0){
			echo '<li class="streamer">';
		        echo '<span class="logo" style="background-image: url(' . $stream['channel']['logo'] . ');"></span>';
		        echo '<span class="name">' . $stream['channel']['name'] . '</span>';
		        echo '<span class="flag '. $stream['channel']['broadcaster_language'] . '"></span></a></li>';
		        echo '<li class="details"><ul>';
		        echo '<li>' . $stream['viewers'] . ' assistindo:</br><strong>'. $stream['channel']['status'] . '</strong></li>';
		       	echo '<li><a href="' . $stream['channel']['url'] . '" target="_blank" class="preview"><img src="' . $stream['preview']['medium'] . '" /></a></li>';
		        //echo '<li><a href="' . $stream['channel']['url'] . '" target="_blank" class="btn">Assistir</a></li>';
		        echo '</ul></li>';
			$count--;
		}
	}

	// Secondary Stream
	foreach($streams as $key => $stream){
		if($count>0){
			echo '<li class="streamer">';
		        echo '<span class="logo" style="background-image: url(' . $stream['channel']['logo'] . ');"></span>';
		        echo '<span class="name">' . $stream['channel']['name'] . '</span>';
		        echo '<span class="flag '. $stream['channel']['language'] . '"></span></a></li>';
		        echo '<li class="details"><ul>';
		        echo '<li>' . $stream['viewers'] . ' assistindo:</br><strong>'. $stream['channel']['status'] . '</strong></li>';
		       	echo '<li><a href="' . $stream['channel']['url'] . '" target="_blank" class="preview"><img src="' . $stream['preview']['medium'] . '" /></a></li>';
		        //echo '<li><a href="' . $stream['channel']['url'] . '" target="_blank" class="btn">Assistir</a></li>';
		        echo '</ul></li>';
			$count--;
		}
	}
	echo "</ul>";
}
