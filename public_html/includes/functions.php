<?php

//	include_once "./gallery/cpmfetch/cpmfetch.php";

	function getNewsFeed($feed_url, $header, $number_items=5) {

		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);

		foreach($x->channel->item as $entry) {
			if($number_items > 0) {
				echo "<div class='news_item'>";
				echo 	"<div class='news_head'>";
				echo		$entry->title;
				echo 	"</div>";
				echo 	"<div class='news_body'>";
				echo		$entry->description;
				echo 	"</div>";
				echo "</div>";
				$number_items--;
			}
		}
	}

	function getStatus($header, $message, $class='status_open') {

		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
		echo		$header;
		echo 	"</div>";

		echo 	"<div class='feed_content'>";
		echo		"<p class='".$class."'>";
		echo			$message;
		echo		"</p>";
		echo 	"</div>";

		echo "</div>";
	}

	function getFeed($feed_url, $header, $number_items=5) {

		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);


		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
					if(!isset($header)) {
						echo		$x->channel->title;
					} else {
						echo		$header;
					}
		echo 	"</div>";

		echo 	"<div class='feed_content'>";
		echo	"<table class='rss'>";
		foreach($x->channel->item as $entry) {
			if($number_items > 0) {
				echo		"<tr>";
				echo		"<td>";
				echo		"<a href='".$entry->link."' target='external'>".$entry->title."</a>";
				echo		"</td>";
				echo		"</tr>";
				$number_items--;
			}
		}
		echo	"</table>";
		echo 	"</div>";

		echo "</div>";
	}

	function getFeedburner($feed_url, $header, $number_items=5) {

		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);


		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
					if(!isset($header)) {
						echo		$x->channel->title;
					} else {
						echo		$header;
					}
		echo 	"</div>";

		echo 	"<div class='feed_content'>";
		echo	"<table class='rss'>";
		foreach($x->channel->item as $entry) {
			if($number_items > 0) {
				$feedburner	= $entry->children('http://rssnamespace.org/feedburner/ext/1.0');
				echo		"<tr>";
				echo		"<td>";
				echo		"<a href='".$feedburner->origLink."' target='external'>".$entry->title."</a>";
				echo		"</td>";
				echo		"</tr>";
				$number_items--;
			}
		}
		echo	"</table>";
		echo 	"</div>";

		echo "</div>";
	}

	function getYoutubeFeed($feed_url, $header, $number_items=5) {

		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);


		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
					if(!isset($header)) {
						echo		$x->author->name;
					} else {
						echo		$header;
					}
			echo 	"</div>";

		echo 	"<div class='feed_content'>";
		echo	"<table class='rss'>";
		foreach($x->entry as $entry) {
			if($number_items > 0) {
				$id = str_replace("tag:youtube.com,2008:video:", "", $entry->id);
				echo		"<tr>";
				echo		"<td><a href='http://www.youtube.com/watch?v=".$id."' target='external'>".$entry->title."</a></td>";
				echo		"</tr>";
				$number_items--;
			}
		}
		echo	"</table>";
		echo 	"</div>";

		echo "</div>";
	}

	function getLatestYoutubeVideo($feed_url, $width = 600, $height = 480, $number_items=5, $separate = "<br /><br />") {

		$content = file_get_contents($feed_url);
		$x = new SimpleXmlElement($content);

		foreach($x->entry as $entry) {
			if($number_items > 0) {
				$id = str_replace("tag:youtube.com,2008:video:", "", $entry->id);
				generateYoutubePlayer($id, $width, $height);
				if($number_items > 1) {
					echo $separate;
				}
				$number_items--;
			}
		}



	}

	function getLastAddedMediaFromAlbum($rows, $columns, $albumid, $header) {
		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
					echo $header;
		echo 	"</div>";
		echo 	"<div class='feed_content'>";


		// Get latest added media from album
  		$objCpm = new cpm("./gallery/cpmfetch/cpmfetch_config.php");
  		$options = array("subtitle" 	=> "{{pCaption}}",
  						 "alttag" 		=> "{{pTitle}}",
  						 "imagestyle" 	=> "center");
  		$objCpm->cpm_viewLastAddedMediaFromAlbum($rows, $columns, $albumid, $options);
  		$objCpm->cpm_close();

		echo 	"</div>";
		echo "</div>";
	}

	function generateYoutubePlayer($id, $width = 600, $height = 480) {
?>
<object width="640" height="505">
    <param name="movie" value="http://se.youtube.com/v/<?php echo $id; ?>&amp;ap=%2526fmt%223D&amp;ap=%2526fmt%3D22&color1=0x402061&color2=0x9461ca&fs=1"></param>
    <param name="allowFullScreen" value="true"></param>
    <param name="allowscriptaccess" value="always"></param>
    <embed src="http://se.youtube.com/v/<?php echo $id; ?>&amp;ap=%2526fmt%223D&amp;ap=%2526fmt%3D22&color1=0x402061&color2=0x9461ca&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></embed>
</object>
<?php
	}
	
	/**
	 * Return an array of links to forum topics
	 * array[ID] = {Link}
	 * Example: Link = <a href='/forum/viewtopic.php?t=101'>Kvällsarbeten Maj 2011</a>
	 */
	function getLatestTopic($forum_id, $limit=5) {
		$i = 0;
		$links = array();
	
		// Get topics
		$topicsSQL	= "SELECT `t`.`topic_id` as `ID`, `t`.`topic_title` as `TITLE` ".
					  "FROM `phpbb_topics` as `t` ".
					  "WHERE `t`.`forum_id`=".$forum_id." AND `t`.`topic_type`=0 ".
					  "ORDER BY `t`.`topic_time` DESC LIMIT 0,".$limit.";";
		$topicsQuery = mysql_query($topicsSQL);
	
	 	// Add topics to array
		while ($row = mysql_fetch_array($topicsQuery)) {
			$links[$i++] = "<a href='/forum/viewtopic.php?t=".$row["ID"]."' target='external'>".$row["TITLE"]."</a>";
		}
	
	 return $links;
	}
	
	/**
	 * Get Latest Topic
	 */
	function getLatestTopics($header, $forum_id=13, $number_items=5) {
		
		$links = getLatestTopic($forum_id, $number_items);

		echo "<div class='feed'>";
		echo 	"<div class='feed_head'>";
		echo		$header;
		echo 	"</div>";

		echo 	"<div class='feed_content'>";
		echo	"<table class='rss'>";
		foreach($links as $key => $value) {
			if($number_items > 0) {
				echo		"<tr>";
				echo		"<td>";
				echo		$value;
				echo		"</td>";
				echo		"</tr>";
				$number_items--;
			}
		}
		echo	"</table>";
		echo 	"</div>";

		echo "</div>";
	}
	
?>