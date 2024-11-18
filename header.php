<?php
/* TS SE Default Template (Header) by xam - Version 1.4.1
+--------------------------------------------------------------------------
|   TS Special Edition v.7.5
|   ========================================
|   by xam
|   (c) 2005 - 2015 Template Shares Services
|   http://templateshares.net
|   ========================================
|   Web: http://templateshares.net
|   Time: $_ts_date_
|   Signature Key: $_ts_signature_key_
|   Email: contact@templateshares.net
|   TS SE IS NOT FREE SOFTWARE!
+---------------------------------------------------------------------------
*/






if(!defined('IN_TRACKER')) die('Hacking attempt!');
/*
ob_start();

header('Cache-Control: no-cache, must-revalidate'); // HTTP/1.1
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

header('X-Powered-By: TSSE '.O_SCRIPT_VERSION);
header('Content-Type: text/html; charset='.$charset);
header('X-UA-Compatible: IE=edge,chrome=1');
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="en" id="tsse_html">
<head>

<href="<?php echo $URL; ?>/" />
<title><?php echo $title; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />

<meta name="viewport" content="width=device-width" />
<meta name="MobileOptimized" content="width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="description" content="<?php echo $metadesc; ?>" />

<link rel="stylesheet" href="<?php echo $URL; ?>/style.php?theme=<?php echo $defaulttemplate; ?>&amp;style=style.css&amp;v=3a" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $URL; ?>/scripts/colorbox/colorbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $URL; ?>/scripts/jquery-ui-1.10.4.custom/css/flick/jquery-ui-1.10.4.custom.min.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $URL; ?>/rss.php" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php echo $URL; ?>/rss.php" />

<link rel="shortcut icon" href="<?php echo $URL; ?>/favicon.ico" type="image/x-icon" />
<?php include "greeklanguagemenu.html";?>

<script type="text/javascript">
	//<![CDATA[
	var baseurl="<?php echo htmlspecialchars_uni($URL); ?>";
	var dimagedir="<?php echo $pic_base_url; ?>";
	var themedir="<?php echo $URL; ?>/include/templates/<?php echo $defaulttemplate; ?>/";
	var charset="<?php echo $charset; ?>";
	var userid="<?php echo (isset($CURUSER['id']) ? (int)$CURUSER['id'] : 0); ?>";
	var securitytoken = "<?php echo (isset($CURUSER['securitytoken']) ? $CURUSER['securitytoken'] : ''); ?>";
	var lang_resized = "<?php echo $lang->global['resized']; ?>";
	if (window.top !== window.self) {document.write = "";window.top.location = window.self.location; setTimeout(function(){document.body.innerHTML='';},1);window.self.onload=function(evt){document.body.innerHTML='';};}
	//]]>
</script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/jquery-1.11.2.min.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/jquery.lazyload.mini.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/colorbox/jquery.colorbox-min.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/bookmarkscroll.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/main.js?uv=3a&v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/menu.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/collapse.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/tooltip.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>
<script type="text/javascript" src="<?php echo $URL; ?>/scripts/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js?v=<?php echo O_SCRIPT_VERSION; ?>"></script>

<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function()
	{
		if ( !navigator.userAgent.match( /ipad/i ) )
		{
			jQuery("#lazyload img").lazyload({placeholder : themedir+"images/loading.gif", effect:"fadeIn"});
		}
		jQuery("a#ts_show_preview").colorbox({photo: true, title: function()
		{
			var url = jQuery(this).attr('href');
			return '<a href="'+url+'" target="_blank"><font color="white"><?php echo $lang->header['open_new_window']; ?></font></a>';
		}});
	});
	//]]>
</script>
<?php

$lang->load('scripts');
$langdir = scandir(INC_PATH.'/languages');
$dirlist = '';
foreach ($langdir as $language)
{
	if ($language != '.' AND $language != '..' AND is_dir(INC_PATH.'/languages/'.$language))
	{
		$dirlist .= '
		<a href="'.$URL.'/set_language.php?language='.$language.'&amp;redirect=yes"><img src="'.$URL.'/include/languages/'.$language.'/flag/flag.gif" alt="'.$language.'" title="'.$language.'" width="32" height="20" border="0" class="inline" /></a> ';
	}
}

echo '
'.(isset($includescripts) ? $includescripts : '').'
</head>
<body class="yui-skin-sam">';

if(user_options($CURUSER['options'], 'fb-shoutbox') AND !user_options($CURUSER['options'], 'shoutbox'))
{
	include(TSDIR.'/ts_shoutbox/fb-shoutbox.php');
}

echo (isset($CURUSER) && $CURUSER['id'] > 0 ? '' : '
<div id="topbar" class="subheader">
	<img src="'.$pic_base_url.'close.gif" border="0" alt="" class="middle pointer" id="closebar" style="vertical-align: middle;" />
	'.sprintf($lang->global['unregistered'], $URL).'
	<div id="loginbox" style="display: none; padding-top: 5px;">
		<form method="post" action="'.$URL.'/takelogin.php">
		<table style="width: 99%; border:0" width="99%" cellpadding="2" cellspacing="0">
			<tr><td class="none" align="right">'.$lang->login['username'].'</td><td class="none"><input type="text" name="username" id="usernameloginphp" class="inputUsername" value="" /></td></tr>
			<tr><td class="none" align="right">'.$lang->login['password'].'</td><td class="none"><input type="password" name="password" class="inputPassword" value="" /></td></tr>
			'.($iv == 'yes' ? '<tr><td class="none" align="right">'.$lang->global['seccode'].'</td><td class="none"><input type="text" name="imagestring" class="inputPassword" value="" /></td></tr>' : '').'
			'.show_image_code2().'
			<tr><td class="none"></td><td class="none"><input type="submit" value="'.$lang->login['login'].'" style="vertical-align: middle;" /> <input type="reset" value="'.$lang->login['reset'].'" style="vertical-align: middle;" /></td></tr>
		</table>
		</form>
	</div>
</div>
').'
<div class="content">
	<div id="top">
		<div class="top_text">
		'.(isset($CURUSER) && $CURUSER['id'] > 0 ? '
			<script type="text/javascript">
				//<![CDATA[
				function TSPanel(PanelID)
				{
					if (TSGetID(PanelID).style.display == "none")
					{
						ts_show(PanelID);
					}
					else
					{
						ts_hide(PanelID);
					}
				}
				function FormAction()
				{
					SearchZone = TSGetID("select_zone").value;
					if (SearchZone == "forum")
					{
						document.search_form.action = "'.$URL.'/tsf_forums/tsf_search.php?action=do_search";
					}
					else if (SearchZone == "request")
					{
						document.search_form.action = "'.$URL.'/viewrequests.php?do=search_request";
					}
					else if (SearchZone == "subtitle")
					{
						document.search_form.action = "'.$URL.'/ts_subtitles.php?action=search";
					}
					else
					{
						document.search_form.action = "'.$URL.'/browse.php?do=search&search_type=t_both";
					}
				}
				//]]>
			</script>
			<a href="javascript:void(0);" onclick="javascript: TSPanel(\'ts_search_form\'); return false;"><img src="'.$URL.'/include/templates/'.$defaulttemplate.'/images/search.png" border="0" alt="'.$lang->header['qsearch'].'" title="'.$lang->header['qsearch'].'" /></a>
			<form method="post" action="'.$URL.'/browse.php?do=search&search_type=t_both" name="search_form" style="display: inline;">
			<input type="hidden" name="search_type" value="t_both" />
			<input type="hidden" name="do" value="search" />
			<input type="hidden" name="postthread" value="1" />
			<input type="hidden" name="forums[]" value="all" />
			<div id="ts_search_form" style="display: none; position: absolute;">
				<table border="0" cellpadding="2" cellspacing="0" width="420px;">
					<tr>
						<td class="thead">
							<span style="float: right; cursor: pointer;" onclick="javascript: TSPanel(\'ts_search_form\'); return false;"><img src="'.$pic_base_url.'close.gif" border="0" alt="" /></span>
							'.$lang->header['qsearch'].'
						</td>
					</tr>
					<tr>
						<td>
							'.$lang->global['storrent2'].'
							<input type="text" size="20" value="" name="keywords" /> '.$lang->header['in'].'
							<select name="search_zone" id="select_zone" onchange="FormAction();">
								<option value="torrent" >'.$lang->header['torrents'].'</option>
								<option value="forum" >'.$lang->header['forums'].'</option>
								<option value="request" >'.$lang->header['requests'].'</option>
								<option value="subtitle" >'.$lang->header['subtitles'].'</option>
							</select>
							<input type="submit" value="'.$lang->global['buttonsearch'].'" />
						</td>
					</tr>
				</table>
			</div>
			</form>
			'.(count($langdir) > 1 ? '
			<a href="javascript:void(0);" onclick="javascript: TSPanel(\'language_form\'); return false;"><img src="'.$URL.'/include/templates/'.$defaulttemplate.'/images/language.png" border="0" alt="'.$lang->header['slanguage'].'" title="'.$lang->header['slanguage'].'" /></a>
			<div id="language_form" style="display: none; position: absolute;">
				<table border="0" cellpadding="2" cellspacing="0" width="300">
					<tr>
						<td class="thead">
							<span style="float: right; cursor: pointer;" onclick="javascript: TSPanel(\'language_form\'); return false;"><img src="'.$pic_base_url.'close.gif" border="0" alt="" /></span>
							'.$lang->header['slanguage'].'
						</td>
					</tr>
					<tr>
						<td align="left">
							'.$dirlist.'
						</td>
					</tr>
				</table>
			</div>' : '') : '
			'.$lang->header['recoverpassword'].' <a href="'.$URL.'/recover.php">'.$lang->header['viaemail'].'</a> | <a href="'.$URL.'/recoverhint.php">'.$lang->header['viaquestion'].'</a>
			').'
		</div>
		<div class="padding" align="center">';
if (isset($CURUSER) && $CURUSER['id'] > 0)
{
?>
	<span>
	<?php echo $lang->global['welcomeback']; ?> <a href="<?php echo ts_seo($CURUSER['id'], $CURUSER['username']); ?>"><?php echo get_user_color($CURUSER['username'],$usergroups['namestyle']); ?></a> <?$medaldon?> <?$warn?> (<?php echo htmlspecialchars_uni($CURUSER['ip']); ?>) <a href="<?php echo $URL?>/logout.php?logouthash=<?php echo md5(USERIPADDRESS); ?>" onclick="return log_out()"><?php echo $lang->global['logout']; ?></a></span>    	<span><?php echo $lang->global['ratio']; ?> <?php echo $ratio?>  <?php echo $lang->global['bonus']; ?> <a href="<?php echo $URL?>/mybonus.php"><?php echo number_format($CURUSER['seedbonus'], 2)?></a>  <?php echo (intval($usergroups['slotlimit']) ? sprintf($lang->global['slots'], $usergroups['slotlimit']) : '').$lang->global['uploaded']; ?> <font color="green"><?php echo mksize($CURUSER['uploaded'])?></font>  <?php echo $lang->global['downloaded']; ?> <font color="red"><?php echo mksize($CURUSER['downloaded'])?></font></span>    <?php
	echo ($inboxpic ? '<a href="'.$URL.'/messages.php">'.$inboxpic.'</a>' : '').'
	<a href="'.$URL.'/friends.php"><img border="0" alt="'.$lang->header['extrafriends'].'" title="'.$lang->header['extrafriends'].'" src="'.$URL.'/include/templates/'.$defaulttemplate.'/images/group.png" /></a>
	<a href="'.$URL.'/users.php"><img border="0" alt="'.$lang->header['extramembers'].'" title="'.$lang->header['extramembers'].'" src="'.$URL.'/include/templates/'.$defaulttemplate.'/images/user_go.png" /></a>
	<a href="'.$URL.'/getrss.php"><img border="0" alt="'.$lang->header['extrarssfeed'].'" title="'.$lang->header['extrarssfeed'].'" src="'.$URL.'/include/templates/'.$defaulttemplate.'/images/rss.png" /></a>';
}
?>
</div>
</div>
<div id="header"></div>
<?php
if (isset($usergroups['showads']) AND $usergroups['showads'] == 'no' AND !defined('DISABLE_ADS'))
{
	define('DISABLE_ADS', true);
}

if (!defined('DISABLE_ADS') AND (isset($TSSECache->Cache['ads']) AND $ads = $TSSECache->Cache['ads']['content']))
{
	$str  = '<table class="main" border="1" cellspacing="0" cellpadding="0" width="100%"><tr><td class="text">';
	if (strstr($ads, '[TS_ADS]'))
	{
		$ts_ads_count = explode('[TS_ADS]', $ads);
		$random_ts_ads = rand(0, (count($ts_ads_count) -1));
		$str .= $ts_ads_count[$random_ts_ads];
	}
	else $str .= $ads;
	$str .= '</td></tr></table>';
	echo $str;
	unset($ads, $str);
}
?>
<div id="menu">
	<?php
	$menu_language = (isset($_COOKIE['ts_language']) ? $_COOKIE['ts_language'] : $defaultlanguage);
	if (file_exists($rootpath.'/'.$cache.'/menu_'.$menu_language.'.php'))
		require_once($rootpath.'/'.$cache.'/menu_'.$menu_language.'.php');
	else
		require_once($rootpath.'/'.$cache.'/menu_english.php');
	?>
</div>
<div id="main">
	<div class="left_side">
<?php
if ($offlinemsg)
{
	$warnmessages[] = sprintf($lang->header['trackeroffline'], $URL);
}

if ($is_mod AND !defined('SKIP_MOD_QUERIES') AND !defined('IN_AJAX'))
{
	$_staffmessages = mysqli_num_rows(sql_query('SELECT id FROM staffmessages WHERE answeredby = \'0\''));
	$_ts_reports = mysqli_num_rows(sql_query('SELECT rid FROM ts_reports WHERE confirmed = \'0\''));
	$_unbanrequests = mysqli_num_rows(sql_query('SELECT id FROM unbanrequests WHERE reply = \'\''));

	if ($_staffmessages OR $_ts_reports OR $_unbanrequests)
	{
		$lang->load('staff_announcements');
	}

	if ($_staffmessages)
	{
		$infomessages[] = sprintf($lang->staff_announcements['msg1'], $_staffmessages, $URL);
	}

	if ($_ts_reports)
	{
		$infomessages[] = sprintf($lang->staff_announcements['msg2'], $_ts_reports, $URL);
	}

	if ($_unbanrequests)
	{
		$infomessages[] = sprintf($lang->staff_announcements['msg3'], $_unbanrequests, $URL);
	}
}

if (!defined('IN_AJAX') && !$is_mod && isset($CURUSER) && $CURUSER['donoruntil'] != '0000-00-00 00:00:00' && warn_donor(TS_MTStoUTS($CURUSER['donoruntil']) - gmtime()) && $CURUSER['id'] > 0)
{
	require_once(INC_PATH.'/functions_mkprettytime.php');
	$warnmessages[] = sprintf($lang->header['warndonor'], $URL, mkprettytime(TS_MTStoUTS($CURUSER['donoruntil']) - gmtime()));
}

if((!defined('IN_AJAX') && isset($CURUSER) && $CURUSER['id'] > 0 && $CURUSER['downloaded'] > 0 && $CURUSER['leechwarn'] == 'yes' AND TS_MTStoUTS($CURUSER['leechwarnuntil']) > TIMENOW))
{
	$TSSEConfig->TSLoadConfig('CLEANUP');
	require_once(INC_PATH.'/functions_mkprettytime.php');
	$warnmessages[] = sprintf($lang->header['warned'], $leechwarn_remove_ratio, mkprettytime(TS_MTStoUTS($CURUSER['leechwarnuntil']) - TIMENOW));
}

if (isset($CURUSER) AND $CURUSER['id'] > 0 AND $CURUSER['announce_read'] == 'no')
	$infomessages[] = '<span id="new_ann" style="display: block;"><a href="'.$URL.'/clear_ann.php" id="readAnnouncement">'.$lang->header['newann'].'</a></span>
	<script>jQuery("#readAnnouncement").colorbox({iframe:true, innerWidth:650, innerHeight:300});</script>';

if ($CURUSER['pmunread'] > 0 AND $msgalert)
	$infomessages[] = '<a href="'.$URL.'/messages.php">'.sprintf($lang->header['newmessage'], ts_nf($CURUSER['pmunread'])).'</a>';

if (isset($warnmessages))
{
	echo show_notice(implode('<br />',$warnmessages), true);
	unset($warnmessages);
}

if (isset($infomessages))
{
	echo show_notice(implode('<br />',$infomessages));
	unset($infomessages);
}