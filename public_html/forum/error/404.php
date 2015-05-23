<!--
	--------------------------------------------------
	This is my error page for all the files not found.
	--------------------------------------------------
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
        <title>404 Error Page</title>
    </head>
    <body>
        <h1>Error: 404</h1>
        <h2>Filen finns inte</h2>
        <p>Länken du skrev in finns inte<?php if($redirect) {echo " längre. <br />
		Du kommer nu att bli om dirigerad till en annan sida om ca 5 sekunder. <br />
		Eller <a href='/'>klicka här för att gå till startsidan</a>.";} else { echo ". <br /><a href='/'>Klicka här för att gå till forumet</a>."; }?>.</p
    </body>
</html>
