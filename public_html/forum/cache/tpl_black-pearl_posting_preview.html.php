<?php if (!defined('IN_PHPBB')) exit; ?><div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?></div></div></div></div>
<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
<tr><td class="row-post-top"><div style="float:right;"><span class="postdetails"><?php echo ((isset($this->_rootref['L_POST_SUBJECT'])) ? $this->_rootref['L_POST_SUBJECT'] : ((isset($user->lang['POST_SUBJECT'])) ? $user->lang['POST_SUBJECT'] : '{ POST_SUBJECT }')); ?>: <?php echo (isset($this->_rootref['PREVIEW_SUBJECT'])) ? $this->_rootref['PREVIEW_SUBJECT'] : ''; ?></span></div><?php echo (isset($this->_rootref['MINI_POST_IMG'])) ? $this->_rootref['MINI_POST_IMG'] : ''; ?>&nbsp;<span class="postdetails"><?php echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo (isset($this->_rootref['POST_DATE'])) ? $this->_rootref['POST_DATE'] : ''; ?></span></td></tr>
<?php if ($this->_rootref['S_HAS_POLL_OPTIONS']) {  ?>

	<tr>
		<td class="row2" align="center"><br clear="all" />
			<table cellspacing="0" cellpadding="4" border="0" align="center">
			<tr><td align="center"><span class="gen"><b><?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></b></span><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); ?></span></td></tr>
			<tr>
				<td align="center">
					<table cellspacing="0" cellpadding="2" border="0">
					<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

						<tr>
							<td>
							<?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?>

								<input type="checkbox" class="radio" name="vote_id" value="" />
							<?php } else { ?>

								<input type="radio" class="radio" name="vote_id" value="" />
							<?php } ?>

							</td>
							<td><span class="gen"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></span></td>
						</tr>
					<?php }} ?>

					</table>
				</td>
			</tr>
			<tr><td align="center"><span class="gensmall"><?php echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); ?></span></td></tr>
			</table>
		</td>
	</tr>
<?php } ?>

<tr>
	<td class="row-post-body">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="postbody"><?php echo (isset($this->_rootref['PREVIEW_MESSAGE'])) ? $this->_rootref['PREVIEW_MESSAGE'] : ''; ?></div>
			<?php if (sizeof($this->_tpldata['attachment'])) {  ?>

				<br clear="all" /><br />

				<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
				<tr><th><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></th></tr>
				<?php $_attachment_count = (isset($this->_tpldata['attachment'])) ? sizeof($this->_tpldata['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$this->_tpldata['attachment'][$_attachment_i]; ?>

					<tr><td class="row2"><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></td></tr>
				<?php }} ?>

				</table>
			<?php } if ($this->_rootref['PREVIEW_SIGNATURE']) {  ?><div class="postbody"><br />_________________<br /><?php echo (isset($this->_rootref['PREVIEW_SIGNATURE'])) ? $this->_rootref['PREVIEW_SIGNATURE'] : ''; ?></div><?php } ?></td>
		</tr>
		</table>
	</td>
</tr>
<tr><td class="spacer"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/spacer.gif" width="1" height="4" alt="" /></td></tr>
<tr><td class="cat-bottom">&nbsp;</td></tr>
</table>
<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

<br clear="all" />