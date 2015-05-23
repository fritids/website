<!--
	This is my error page for all the internal server error.
-->
<?php 	
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Description" content="Arlanda RC." /> 
        <meta name="Keywords" content="Arlanda, RC, Radiostyrda, Bilar, Bana, Inferno, Kyosho, Sverige, Svealand, Mrsta, Flygplats, Forum, Regler, Frekvenser, 1:8" />
        <title>500 Internal Server Error</title>
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
                                    	Internal Server Error
                                    </div>
                                    <div class="description">
                                        <br />
                                        <p>The server encountered an internal error or misconfiguration and was unable to complete your request.</p>
                                        <p>Please contact the server administrator, webmaster@arlandarc.se and inform them of the time the error occurred, 
                                        and anything you might have done that may have the error.</p>
                                        <p>More information about this error may be available in the server error log.</p>
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
