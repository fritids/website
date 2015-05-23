<?php    include("redirect_to_forum.php");
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	if(!isset($_GET['sida'])) {
		$page = "main";
	} else {
		switch( $_GET['sida'] ) {
			case "hem";
				$page = "main";
				break;
			case "info";
				$page = "info";
				break;
			default:
				$page = "home";
				break;
		}
	}
	define("IN_ARC", true);    
	// Start DB Connection
	require_once "includes/db_start.php";
	$connection->dbSelect(constant("DATABASE"));
?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="Arlanda RC." />
		<meta name="Keywords" content="Arlanda, RC, Radiostyrda, Bilar, Bana, Inferno, Kyosho, Sverige, Svealand, Mrsta, Flygplats, Forum, Regler, Frekvenser, 1:8" />
		<meta name="google-site-verification" content="_Wa9UOTyxapzcsMZdV9KdMh726b1uk7ttRswPCRD2yQ" />
		<meta name="msvalidate.01" content="9B823C771728332300AD0AA2A19ED88E" />
		<meta name="verify-v1" content="8+Sh+AyRjWBKWiZaUxdlNnYrE+5KuhJKfH0ZDgTrT4g=" />
		<title>Arlanda RC</title>
		<link type="text/css" rel="stylesheet" href="/css/<?php echo $page; ?>.css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="/favicon.png" />		<script type="text/javascript" src="/js/menucontents.js"></script>
		<script type="text/javascript" src="/js/anylinkmenu.js"></script>
		<script type="text/javascript"> anylinkmenu.init("menuanchorclass") </script>
		<script type="text/javascript" src="/js/google-analytics.js"></script>
	</head>
    <body>
		<?php
			// CONSTANTS
			define("MAIN_FOLDER", "http://www.arlandarc.se/");
			define("RSS_FOLDER", MAIN_FOLDER."rss/");
			// Required functions
        	require_once "includes/functions.php";
		?>
        <!-- WRAPPER -->
        <div class="wrapper">
            <table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="leftshadow" width="9" valign="top"><img src="{T_THEME_PATH}/images/spacer.gif" alt="" width="9" height="1" /></td>
                    <td class="np-body" width="100%" valign="top"><?php require_once("header.php"); ?>
                        <div class="maincontainer">
                        <?php
							require_once($page.".php");
                            require_once("footer.php");
                        ?>
                        </div>
                    </td>
                    <td class="rightshadow" width="9" valign="top"><img src="{T_THEME_PATH}/images/spacer.gif" alt="" width="9" height="1" /></td>
                </tr>
            </table>
        </div>
    </body>
</html>
<?php
	// Stop DB Connection
	require_once "includes/db_stop.php";
?>