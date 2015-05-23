<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('breadcrumbs_pages.html'); ?>

<br />

<div id="pagecontent">

	<form name="confirm" action="<?php echo (isset($this->_rootref['S_CONFIRM_ACTION'])) ? $this->_rootref['S_CONFIRM_ACTION'] : ''; ?>" method="post">
	
	<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></div></div></div></div>
	<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td class="row1" align="center"><br /><p class="gen"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></p><br /><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="confirm" value="<?php echo (isset($this->_rootref['YES_VALUE'])) ? $this->_rootref['YES_VALUE'] : ''; ?>" class="btnmain" />&nbsp;&nbsp;<input type="submit" name="cancel" value="<?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?>" class="btnlite" /></td>
	</tr>
	<tr><td class="cat-bottom">&nbsp;</td></tr>
	</table>
	<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

	</form>
	
</div>

<br clear="all" />

<?php $this->_tpl_include('breadcrumbs_footer.html'); ?>


<br clear="all" />

<div align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php $this->_tpl_include('jumpbox.html'); ?></div>

<?php $this->_tpl_include('overall_footer.html'); ?>