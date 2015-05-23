<?php
include_once("../cache/caching.php");
$cachefile = begin_caching("", "xml", 60, "nyheter");

if($cachefile != NULL) {

	define('IN_PHPBB', true);
	$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../forum/';
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	include($phpbb_root_path . 'common.' . $phpEx);
	include($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
	
	// Start session
	$user->session_begin();
	$auth->acl($user->data);
	$user->setup();
	
	
	function make_xml_compatible($text,$bbcode_uid, $bbcode_bitfield,$bbcode_options,$board_url)
	{
		 global $config;
		 $text = html_entity_decode(generate_text_for_display($text, $bbcode_uid, $bbcode_bitfield, $bbcode_options));
		 $text = nl2br($text);     
		 $text = str_replace('<a href="#" onclick="selectCode(this); return false;">Select all</a>','',$text); // to make valid rss
		 $text = str_replace('this.target=\'_blank\';','',$text);  // to make valid rss
		 $text = str_replace('this.target="_blank";','',$text);  // to make valid rss
		 $text = str_replace('onclick="window.open(this.href);return false;"','',$text); // to make valid rss
		 $text = str_replace('./',$board_url."/",$text); //fix for smiley(Relative path problem :( ) to make valid rss
		 $text = str_replace('&pound', '&amp;#163;', $text);
		 $text = str_replace('&copy;', '(c)', $text);
		 $text = htmlspecialchars($text);	 
		 return $text; 
	}
	//Get the board url address
	$board_url = generate_board_url();
	
	//$atomlink = $board_url."/news.$phpEx";
	$servername = $_SERVER['SERVER_NAME'];
	$atomlink = "http://".$servername.$_SERVER['PHP_SELF'];
	
	$f = 2;
	
	$rows = get_forum_branch($f, 'children', 'descending', true);
	$f='AND (';
	foreach ($rows as $row){
	  $f .= 'OR f.forum_id = ' . $row['forum_id'] . "\n";
	}
	$f.=')';
	$f = str_replace("(OR ","(",$f);
	
	// Start RSS output
	$rss_result = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
	<rss version=\"2.0\"  xmlns:atom=\"http://www.w3.org/2005/Atom\">
	<channel>
	<atom:link href=\"".$atomlink."\" rel=\"self\" type=\"application/rss+xml\" /> 
	  <title>".$config['sitename']."</title>
	  <link>".$board_url."</link>
	  <description>".$config['site_desc']."</description>
	  <language>".$config['default_lang']."</language>
	  <copyright>".$user->lang['RSS_COPYRIGHT']."  ".$config['sitename']."</copyright>     
	  <managingEditor>".$config['board_email']." (".$config['sitename'].")</managingEditor>  
	   <generator>".$config['sitename']."</generator>
	  <ttl>1</ttl>  
	";

$timestamp = mktime(0, 0, 0, 1, 1, date("Y"));
$time_sql = " AND p.post_time > ".$timestamp." ";
			
	$sql = 'SELECT f.forum_id,f.forum_name, f.forum_desc_options, 
					t.topic_title, t.topic_id, t.topic_first_post_id, t.topic_first_poster_name, 
					p.post_time, p.post_text, p.bbcode_uid, p.bbcode_bitfield, u.username, u.user_id
					FROM  '. FORUMS_TABLE .'  f,'.TOPICS_TABLE.' t, '.POSTS_TABLE.' p,'.USERS_TABLE.' u
					WHERE t.forum_id = f.forum_id
					AND p.post_id = t.topic_first_post_id 
					AND u.user_id = p.poster_id
					'.$f.$time_sql.'
					ORDER BY t.topic_id DESC'; 					
			
			if(!$result = $db->sql_query_limit($sql,30))
			{
					trigger_error($user->lang['RSS_FAILURE']);               
			}
			while($row = $db->sql_fetchrow($result))
			{
				   $forumid=$row['forum_id'];
				   $topicid=$row['topic_id'];
				   if($auth->acl_get('f_read',$forumid))	   //getting authentication
				   {
					   $post_link    = $board_url."/viewtopic.".$phpEx."?t=".$topicid."#p".$row['topic_first_post_id'];
					   $topic_link   = $board_url."/viewtopic.".$phpEx."?t=".$topicid;
					   $description  = "<div class='author'>".$user->lang['POST_BY_AUTHOR']." ".$row['topic_first_poster_name']." (".$user->lang['POSTED']." ".$user->format_date($row['post_time'],"D, d M Y").")</div><br/>".$row['post_text']."<br /><br /><a href=\"".$topic_link."\">".$user->lang['RSS_READ_TOPIC']."</a>";                          
					   $rss_result .= "
									  <item>
									  <title>".$row['topic_title']."</title>
									  <link>".$post_link."</link>
									  <description>".make_xml_compatible($description, $row['bbcode_uid'], $row['bbcode_bitfield'], $row['forum_desc_options'],$board_url)."</description>
																	<pubDate>".$user->format_date($row['post_time'],"D, d M Y H:i:s T")."</pubDate>                                        
										<guid isPermaLink=\"true\">".$post_link."</guid>		   					
										  </item>";
					}
			}
	
	
	$rss_result .= '</channel></rss>';
	echo $rss_result;
	$db->sql_freeresult($result);
	
	

	end_caching($cachefile);
}

?>
