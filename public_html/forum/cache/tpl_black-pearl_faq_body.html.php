<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('breadcrumbs_pages.html'); ?>

<br />

<a name="faqtop"></a>

<div id="pagecontent">

<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo ((isset($this->_rootref['L_FAQ_TITLE'])) ? $this->_rootref['L_FAQ_TITLE'] : ((isset($user->lang['FAQ_TITLE'])) ? $user->lang['FAQ_TITLE'] : '{ FAQ_TITLE }')); ?></div></div></div></div>
<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td class="row1">
	<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

		<span class="gen"><b><?php echo $_faq_block_val['BLOCK_TITLE']; ?></b></span><br />
		<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

			<span class="gen"><a class="postlink" href="#f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"><?php echo $_faq_row_val['FAQ_QUESTION']; ?></a></span><br />
		<?php }} ?>

		<br />
	<?php }} ?>

	</td>
</tr>
<tr><td class="cat-bottom">&nbsp;</td></tr>
</table>
<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

<br clear="all" />

<?php $_faq_block_count = (isset($this->_tpldata['faq_block'])) ? sizeof($this->_tpldata['faq_block']) : 0;if ($_faq_block_count) {for ($_faq_block_i = 0; $_faq_block_i < $_faq_block_count; ++$_faq_block_i){$_faq_block_val = &$this->_tpldata['faq_block'][$_faq_block_i]; ?>

	<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo $_faq_block_val['BLOCK_TITLE']; ?></div></div></div></div>
	<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
	<?php $_faq_row_count = (isset($_faq_block_val['faq_row'])) ? sizeof($_faq_block_val['faq_row']) : 0;if ($_faq_row_count) {for ($_faq_row_i = 0; $_faq_row_i < $_faq_row_count; ++$_faq_row_i){$_faq_row_val = &$_faq_block_val['faq_row'][$_faq_row_i]; ?>

	<tr>
		<?php if (!($_faq_row_val['S_ROW_COUNT'] & 1)  ) {  ?>

			<td class="row1" valign="top">
		<?php } else { ?>

			<td class="row2" valign="top">
		<?php } ?>

			<div class="postbody"><a name="f<?php echo $_faq_block_val['S_ROW_COUNT']; ?>r<?php echo $_faq_row_val['S_ROW_COUNT']; ?>"></a><b>&#187; <?php echo $_faq_row_val['FAQ_QUESTION']; ?></b></div>
			<div class="postbody"><?php echo $_faq_row_val['FAQ_ANSWER']; ?></div>
			<p class="gensmall"><a href="#faqtop"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></p>
		</td>
	</tr>
	<tr><td class="spacer"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/spacer.gif" width="1" height="4" alt="" /></td></tr>
	<?php }} ?>

	<tr><td class="cat-bottom">&nbsp;</td></tr>
	</table>
	<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

	<br clear="all" />
<?php }} ?>


</div>

<?php $this->_tpl_include('breadcrumbs_footer.html'); ?>

<br clear="all" />
<div align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php $this->_tpl_include('jumpbox.html'); ?></div>
<?php $this->_tpl_include('overall_footer.html'); ?>