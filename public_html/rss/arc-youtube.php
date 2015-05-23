<?php
include_once("../cache/caching.php");
$cachefile = begin_caching("", "xml", 60*10, "arc-youtube");

if($cachefile != NULL) {

	// GENERATE - http://gdata.youtube.com/feeds/base/users/ArlandaRC/uploads?client=ytapi-youtube-search&v=2&max-results=5
	@readfile('http://gdata.youtube.com/feeds/base/users/ArlandaRC/uploads?client=ytapi-youtube-search&v=2&max-results=5');
	
	end_caching($cachefile);
}
?>