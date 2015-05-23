<?php

	/**
	 * Begin caching
	 * $cachedir = Directory to cache files in (keep outside web root)
	 * $cacheext = Extension to give cached files (usually cache, htm, txt)
	 * $cachetime = Seconds to cache files for
	 */
	function begin_caching($cachedir = "/cache/", $cacheext = 'txt', $cachetime = 600, $page) {
	 
		// Ignore List
		$ignore_list = array(
			'addedbytes.com/rss.php',
			'addedbytes.com/search/'
		);
	 
		// Script
		if(!isset($page)) {
			$page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // Requested page
			$page = md5($page);
		}
		$cachefile = $cachedir . $page . '.' . $cacheext; // Cache file to either load or create
	 
		$ignore_page = false;
		for ($i = 0; $i < count($ignore_list); $i++) {
			$ignore_page = (strpos($page, $ignore_list[$i]) !== false) ? true : $ignore_page;
		}
	 
		$cachefile_created = ((@file_exists($cachefile)) and ($ignore_page === false)) ? @filemtime($cachefile) : 0;
		@clearstatcache();
	 
		// Show file from cache if still valid
		if (time() - $cachetime < $cachefile_created) {
	 
			//ob_start('ob_gzhandler');
			@readfile($cachefile);
			//ob_end_flush();
			//exit();
			return NULL;
	 
		}
	 
		// If we're still here, we need to generate a cache file
	 
		ob_start();
		
		return $cachefile;
	}
	
	function end_caching($cachefile) {
		// Now the script has run, generate a new cache file
		$fp = @fopen($cachefile, 'w'); 
	 
		// save the contents of output buffer to the file
		@fwrite($fp, ob_get_contents());
		@fclose($fp); 
	 
		ob_end_flush(); 
	}
 
?>