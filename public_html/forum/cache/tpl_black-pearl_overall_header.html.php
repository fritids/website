<?php if (!defined('IN_PHPBB')) exit; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
// Here we want to preload an image so it will be available instant on next page reload
function supports_html5_storage() {
  try {
    return 'localStorage' in window && window['localStorage'] !== null;
  } catch (e) {
    return false;
  }
}
function isIpadInPortrait() {
  return $(window).width() >= 768;
}
function getArcBgImage() {
    var min = 1; var max = 2550; var pow = 2.5;
    var page = Math.floor(min+(max+1-min) * Math.pow(Math.random(), pow));
    $.getJSON('https://www.flickr.com/services/rest/',
    {
	method: 'flickr.people.getPublicPhotos',
	api_key: 'ad301b8a5e3b518001ecb7cd3e7b5378',
	format: 'json',
	user_id: '124293833@N06',
	nojsoncallback: 1,
	page: page,
	per_page: 1
    },
    function(data) {
	var photo = data.photos.photo[0];
	var photoSrc = 'http://farm'+photo.farm+'.staticflickr.com/'+photo.server+'/'+photo.id+'_'+photo.secret;
if (isIpadInPortrait()) {
photoSrc += '_b.jpg';
} else {
photoSrc += '_m.jpg';
}
	var img = new Image();
        localStorage.setItem('arcBgImage', photoSrc)
	img.src = photoSrc;
    });
}

function setArcBgImage() {
	var img = new Image();
        img.onload = function() {
            $('html').css('background-image', 'url(\''+localStorage.getItem('arcBgImage')+'\')');
            $('.background').addClass('bgImgFinishedLoading');
        }
	img.src = localStorage.getItem('arcBgImage');
}
$(function() {
    if (supports_html5_storage()) {
        if (localStorage.getItem('arcBgImage')) {
            setArcBgImage();
            getArcBgImage();
        } else {
            getArcBgImage();
            setArcBgImage();
        }

    }
});
</script>
<?php $this->_tpl_include('_mg_config.html'); ?>


<meta name="google-site-verification" content="_Wa9UOTyxapzcsMZdV9KdMh726b1uk7ttRswPCRD2yQ" /> 
<meta name="verify-v1" content="8+Sh+AyRjWBKWiZaUxdlNnYrE+5KuhJKfH0ZDgTrT4g=" />
<meta http-equiv="content-type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta http-equiv="content-language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="Description" content="Arlanda RC - Forum." /> 
<meta name="Keywords" content="Arlanda, RC, Radiostyrda, Bilar, Bana, Inferno, Kyosho, Sverige, Svealand, Märsta, Flygplats, Forum, Regler, Frekvenser, 1:8" />
<?php echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; ?>

<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> &bull; <?php if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?> &bull; <?php } else if ($this->_rootref['S_IN_UCP']) {  echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?> &bull; <?php } echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>
<script type="text/javascript">
var tapatalkdir="<?php echo (isset($this->_rootref['MOBIQUO_NAME'])) ? $this->_rootref['MOBIQUO_NAME'] : ''; ?>";
var tapatalk_ipad_msg = '<?php echo (isset($this->_rootref['TAPATALK_IPAD_MSG'])) ? $this->_rootref['TAPATALK_IPAD_MSG'] : ''; ?>';
var tapatalk_ipad_url  = '<?php echo (isset($this->_rootref['TAPATALK_IPAD_URL'])) ? $this->_rootref['TAPATALK_IPAD_URL'] : ''; ?>';
var tapatalk_iphone_msg = '<?php echo (isset($this->_rootref['TAPATALK_IPHONE_MSG'])) ? $this->_rootref['TAPATALK_IPHONE_MSG'] : ''; ?>';
var tapatalk_iphone_url  = '<?php echo (isset($this->_rootref['TAPATALK_ANDROID_URL'])) ? $this->_rootref['TAPATALK_ANDROID_URL'] : ''; ?>';
var tapatalk_android_msg = '<?php echo (isset($this->_rootref['TAPATALK_ANDROID_MSG'])) ? $this->_rootref['TAPATALK_ANDROID_MSG'] : ''; ?>';
var tapatalk_android_url  = '<?php echo (isset($this->_rootref['TAPATALK_ANDROID_URL'])) ? $this->_rootref['TAPATALK_ANDROID_URL'] : ''; ?>';
var tapatalk_kindle_msg = '<?php echo (isset($this->_rootref['TAPATALK_KINDLE_MSG'])) ? $this->_rootref['TAPATALK_KINDLE_MSG'] : ''; ?>';
var tapatalk_kindle_url  = '<?php echo (isset($this->_rootref['TAPATALK_KINDLE_URL'])) ? $this->_rootref['TAPATALK_KINDLE_URL'] : ''; ?>';
var tapatalk_chrome_enable = '<?php echo (isset($this->_rootref['TAPATALK_CHROME_ENABLE'])) ? $this->_rootref['TAPATALK_CHROME_ENABLE'] : ''; ?>';
</script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['TAPATALKDETECT_JS'])) ? $this->_rootref['TAPATALKDETECT_JS'] : ''; ?>"></script>

<link rel="stylesheet" href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" type="text/css" />
<link rel="shortcut icon" href="http://www.arlandarc.se/favicon.ico" />

<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/scripts.js"></script>
<script type="text/javascript">
// <![CDATA[
<?php if ($this->_rootref['S_USER_PM_POPUP']) {  ?>

	if (<?php echo (isset($this->_rootref['S_NEW_PM'])) ? $this->_rootref['S_NEW_PM'] : ''; ?>)
	{
		popup('<?php echo (isset($this->_rootref['UA_POPUP_PM'])) ? $this->_rootref['UA_POPUP_PM'] : ''; ?>', 400, 225, '_phpbbprivmsg');
	}
<?php } ?>


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:', '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>');
	var perpage = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';

	if (page !== null && !isNaN(page) && page > 0)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * perpage);
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}

<?php if (sizeof($this->_tpldata['_file'])) {  ?>


	/**
	* Play quicktime file by determining it's width/height
	* from the displayed rectangle area
	*
	* Only defined if there is a file block present.
	*/
	function play_qt_file(obj)
	{
		var rectangle = obj.GetRectangle();

		if (rectangle)
		{
			rectangle = rectangle.split(',')
			var x1 = parseInt(rectangle[0]);
			var x2 = parseInt(rectangle[2]);
			var y1 = parseInt(rectangle[1]);
			var y2 = parseInt(rectangle[3]);

			var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;
			var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;
		}
		else
		{
			var width = 200;
			var height = 0;
		}

		obj.width = width;
		obj.height = height + 16;

		obj.SetControllerVisible(true);

		obj.Play();
	}
<?php } ?>


// ]]>
</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/pngfix.js"></script>
<![endif]-->
</head>
<body class="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>">

<div class="background"></div>

<a name="top"></a>

<!-- <div id="wrapper"> -->
<div style="max-width:<?php echo (isset($this->_tpldata['DEFINE']['.']['MG_GLOBAL_WIDTH'])) ? $this->_tpldata['DEFINE']['.']['MG_GLOBAL_WIDTH'] : ''; ?>;clear:both;margin: 0 auto;">
<table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="leftshadow" width="9" valign="top"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/spacer.gif" alt="" width="9" height="1" /></td>
		<td class="np-body" width="100%" valign="top">

<div id="top_logo">
<div class="time" style="display: none;">
<p><strong>&Ouml;ppettider</strong></p>
<p>Onsdag: <span id="open">18-21</span></p>
<p>Söndag: <span id="open">11-16</span></p>
</div>
<a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>"><?php echo (isset($this->_rootref['SITE_LOGO_IMG'])) ? $this->_rootref['SITE_LOGO_IMG'] : ''; ?></a>
</div>

<?php $this->_tpl_include('menu_block.html'); if ($this->_rootref['S_BOARD_DISABLED'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?><span style="color:#CC3333;"><?php echo ((isset($this->_rootref['L_BOARD_DISABLED'])) ? $this->_rootref['L_BOARD_DISABLED'] : ((isset($user->lang['BOARD_DISABLED'])) ? $user->lang['BOARD_DISABLED'] : '{ BOARD_DISABLED }')); ?></span><?php } ?>


<div id="wrapcentre">

<?php if ($this->_rootref['S_USER_PM_POPUP'] && $this->_rootref['S_NEW_PM']) {  ?>

<div style="margin-top:50px;margin-bottom:50px;text-align:center;clear:both;"><div class="popuppm-new"><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a></div></div>
<?php } ?>