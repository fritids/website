<!--
	This is my error page for all the files not found.
-->
<?php 
	$redirect = false;
	$URI = $_SERVER['REQUEST_URI'];
	if(strchr($URI, "/rc/forum")) {
		$URI = substr($URI, 10, strlen($URI));
		$URI = "http://forum.arlandarc.se/".$URI;
		$redirect = true;
	} else if(strchr($URI, "/rc/")) {
		$URI = substr($URI, 4, strlen($URI));
		$URI = "http://www.arlandarc.se/".$URI;
		$redirect = true;
	}
	
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
			if($redirect) {
		?>
        	<meta http-equiv="Refresh" content="5; url=<?php echo $URI; ?>">
        <?php
			}
		?>
        <meta name="Description" content="Arlanda RC." /> 
        <meta name="Keywords" content="Arlanda, RC, Radiostyrda, Bilar, Bana, Inferno, Kyosho, Sverige, Svealand, Mrsta, Flygplats, Forum, Regler, Frekvenser, 1:8" />
        <title>404 Not Found</title>
        <link type="text/css" rel="stylesheet" href="/css/index.css" />
        <link rel="shortcut icon" href="favicon.ico"/>
		<script type="text/javascript" src="/js/menucontents.js"></script>
        <script type="text/javascript" src="/js/anylinkmenu.js"></script>
        <script type="text/javascript"> anylinkmenu.init("menuanchorclass") </script>
    </head>
    <body>
		<?php
			// CONSTANTS
			define("MAIN_FOLDER", "http://".$_SERVER['SERVER_NAME']."/");
			define("RSS_FOLDER", MAIN_FOLDER."rss/");
			// Required functions
        	//require_once "../includes/functions.php";
		?>
        <!-- WRAPPER -->
        <div class="wrapper">
        
            <table width="100%" style="text-align: center;" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="leftshadow" valign="top"><img src="{T_THEME_PATH}/images/spacer.gif" alt="" width="9px" height="1px" /></td>
                    <td class="np-body" valign="top">
                        <!-- HEADER -->
						<?php 
                            require_once("../header.php"); 
                        ?>
                        <div class="maincontainer">
                            <div class="center_content">
                                <div class="content_container">
                                    <div class="content_header">
                                    	Filen hittades inte
                                    </div>
                                    <div class="description">
                                        <br />
                                        <p>Sidan du försökte visa finns inte<?php 
                                        if($redirect) {
                                            echo " längre. <br />
                                                Du kommer nu att bli om dirigerad till en annan sida om ca 5 sekunder. <br />
                                                Eller <a href='/'>klicka här för att gå till startsidan</a>.";
                                        } else { 
                                            echo ". <br /> <br /><a href='/'>Klicka här för att gå till startsidan</a>";
                                        }?>.</p>
                                        <br />
                                        <hr />
                                        <address><?php echo $_SERVER['SERVER_SOFTWARE']." at ".$_SERVER['HTTP_HOST']." Port ".$_SERVER['SERVER_PORT']; ?></address>
                                        <br />
                                    </div>
                                </div>    
                    		</div>
						<?php
 							echo "<!-- FOOTER -->";
                            require_once("../footer.php");
                        ?>
                    	</div>
                    </td>
                    <td class="rightshadow" valign="top"><img src="{T_THEME_PATH}/images/spacer.gif" alt="" width="9px" height="1px" /></td>
                </tr>
            </table>
        </div>
    </body>
</html>
