<?php
	// Required functions
	require_once "includes/functions.php";
?>

<div class="center_content">
	<div class="news_item">
    	<div class="news_head">
        	<?php echo utf8_encode("V�lkomna till Arlanda RC!"); ?>
        </div>
        <div class="news_body">
        	<?php echo utf8_encode("<p style='font-size: 16px; color: #FFA500;'>En bana f�r radiostyrda bilar i klasserna 1:8 och �ven 1:10 fungerar.<br />
            Nu har ni chansen och vara med att p�verka banans framtid. <br />
			S� kasta er in i forumet och g�r er h�rda =D</p>"); ?>
        </div>
    </div>
<?php
	// Generate news
	getNewsFeed(RSS_FOLDER."nyheter.xml", 5);
?>
</div>