<?php if (!defined('IN_PHPBB')) exit; $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if (( $_forumrow_val['S_IS_CAT'] && ! $_forumrow_val['S_FIRST_ROW'] ) || $_forumrow_val['S_NO_CAT']) {  ?>

	<tr><td class="cat-bottom" colspan="5">&nbsp;</td></tr>
	</table>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>
	</div>
	<br />
	<?php } if ($_forumrow_val['S_IS_CAT'] || $_forumrow_val['S_FIRST_ROW'] || $_forumrow_val['S_NO_CAT']) {  ?>

		<div id="f_<?php echo $_forumrow_val['FORUM_ID']; ?>_h" style="display:none;">
		<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><img style="padding-top:9px;padding-right:6px;float:right;cursor:pointer;" src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['MG_MAX'])) ? $this->_tpldata['DEFINE']['.']['MG_MAX'] : ''; ?>" onclick="javascript:ShowHide('f_<?php echo $_forumrow_val['FORUM_ID']; ?>','f_<?php echo $_forumrow_val['FORUM_ID']; ?>_h','f_<?php echo $_forumrow_val['FORUM_ID']; ?>');" alt="<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>" /><div class="tbl-title"><h4><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></h4></div></div></div></div>
		<table class="tablebg forumlist" width="100%" cellpadding="0" cellspacing="0">
		<tr><td class="row1"><span class="gensmall">&nbsp;</span></td></tr>
		</table>
		<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>
		<br />
		</div>

		<div id="f_<?php echo $_forumrow_val['FORUM_ID']; ?>">
		<script type="text/javascript">
		<!--
		tmp = 'f_<?php echo $_forumrow_val['FORUM_ID']; ?>';
		if(GetCookie(tmp) == '2')
		{
			ShowHide('f_<?php echo $_forumrow_val['FORUM_ID']; ?>', 'f_<?php echo $_forumrow_val['FORUM_ID']; ?>_h', 'f_<?php echo $_forumrow_val['FORUM_ID']; ?>');
		}
		//-->
		</script>
		<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><img style="padding-top:9px;padding-right:6px;float:right;cursor:pointer;" src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['MG_MIN'])) ? $this->_tpldata['DEFINE']['.']['MG_MIN'] : ''; ?>" onclick="javascript:ShowHide('f_<?php echo $_forumrow_val['FORUM_ID']; ?>','f_<?php echo $_forumrow_val['FORUM_ID']; ?>_h','f_<?php echo $_forumrow_val['FORUM_ID']; ?>');" alt="<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>" /><div class="tbl-title"><h4><?php if ($_forumrow_val['S_IS_CAT']) {  ?><a href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a><?php } else { echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); } ?></h4></div></div></div></div>
		<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
		<tr class="only-desktop">
			<th colspan="2">&nbsp;<?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?>&nbsp;</th>
			<th width="50">&nbsp;<?php echo ((isset($this->_rootref['L_TOPICS'])) ? $this->_rootref['L_TOPICS'] : ((isset($user->lang['TOPICS'])) ? $user->lang['TOPICS'] : '{ TOPICS }')); ?>&nbsp;</th>
			<th width="50">&nbsp;<?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>&nbsp;</th>
			<th>&nbsp;<?php echo ((isset($this->_rootref['L_LAST_POST'])) ? $this->_rootref['L_LAST_POST'] : ((isset($user->lang['LAST_POST'])) ? $user->lang['LAST_POST'] : '{ LAST_POST }')); ?>&nbsp;</th>
		</tr>
	<?php } if (! $_forumrow_val['S_IS_CAT']) {  if ($_forumrow_val['S_IS_LINK']) {  ?>

			<tr>
				<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
				<td class="row1">
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>

						<div style="float:<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>:5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div><div style="float:<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">
					<?php } ?>

					<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>" target="_blank"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
					<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?></div><?php } ?>

				</td>
				<?php if ($_forumrow_val['CLICKS']) {  ?>

					<td class="row2 only-desktop" colspan="3" align="center"><span class="genmed"><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></td>
				<?php } else { ?>

					<td class="row2" colspan="3" align="center">&nbsp;</td>
				<?php } ?>

			</tr>
		<?php } else { ?>

			<tr>
				<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
				<td class="row1" width="100%">
					<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>

						<div style="float:<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>:5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div><div style="float:<?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>;">
					<?php } ?>

					<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
					<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
					<?php if ($_forumrow_val['MODERATORS']) {  ?>

						<p class="forumdesc"><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?></p>
					<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?>

						<p class="forumdesc"><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; ?></p>
					<?php } if ($_forumrow_val['FORUM_IMAGE']) {  ?></div><?php } ?>

				</td>
				<td class="row2 only-desktop" align="center"><p class="topicdetails"><?php echo $_forumrow_val['TOPICS']; ?></p></td>
				<td class="row2 only-desktop" align="center"><p class="topicdetails"><?php echo $_forumrow_val['POSTS']; ?></p></td>
				<td class="row2 only-desktop" align="center"><!-- used to be nowrap here --><?php if ($_forumrow_val['LAST_POST_TIME']) {  ?>

						<p class="topicdetails"><?php echo $_forumrow_val['LAST_POST_TIME']; ?></p>
						<p class="topicdetails"><?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>

							<?php if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo $_forumrow_val['U_LAST_POST']; ?>"><?php echo (isset($this->_rootref['LAST_POST_IMG'])) ? $this->_rootref['LAST_POST_IMG'] : ''; ?></a><?php } ?>

						</p>
					<?php } else { ?>

						<p class="topicdetails"><?php echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?></p>
					<?php } ?>

				</td>
			</tr>
		<?php } } if ($_forumrow_val['S_LAST_ROW']) {  ?>

		<tr><td class="cat-bottom" colspan="5">&nbsp;</td></tr>
		</table>
		<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>
		</div>
	<?php } }} else { ?>

	<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><h4><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></h4></div></div></div></div>
	<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
	<tr><td class="row1" colspan="5" align="center"><p class="gensmall"><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p></td></tr>
	<tr><td class="cat-bottom" colspan="5">&nbsp;</td></tr>
	</table>
	<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>
<?php } ?>