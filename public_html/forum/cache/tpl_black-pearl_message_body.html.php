<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('breadcrumbs_pages.html'); ?>

<br />

<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo (isset($this->_rootref['MESSAGE_TITLE'])) ? $this->_rootref['MESSAGE_TITLE'] : ''; ?></div></div></div></div>
<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
<tr><td class="row1" align="center"><br /><p class="gen"><?php echo (isset($this->_rootref['MESSAGE_TEXT'])) ? $this->_rootref['MESSAGE_TEXT'] : ''; ?></p><br /></td></tr>
<tr><td class="cat-bottom">&nbsp;</td></tr>
</table>
<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

<br clear="all" />

<?php $this->_tpl_include('breadcrumbs_footer.html'); $this->_tpl_include('overall_footer.html'); ?>