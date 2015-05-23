<?php
	// Required functions
	require_once "includes/functions.php";
?>

<div class="center_content">
	<div class="news_item">
    	<div class="news_head">
        	<?php echo utf8_encode("Välkomna till Arlanda RC!"); ?>
        </div>
        <div class="news_body">
        	<?php echo utf8_encode("<p style='font-size: 16px; color: #FFA500;'>En bana för radiostyrda bilar i klasserna 1:8 och även 1:10 fungerar.<br />
            Nu har ni chansen och vara med att påverka banans framtid. <br />
			Så kasta er in i forumet och gör er hörda =D</p>"); ?>
        </div>
    </div>
<?php
	// Generate news
	getNewsFeed(RSS_FOLDER."nyheter.xml", 5);
?>
</div>