<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); $this->_tpl_include('breadcrumbs_pages.html'); ?>

<br />

<div align="center">

<form action="<?php echo (isset($this->_rootref['S_PROFILE_ACTION'])) ? $this->_rootref['S_PROFILE_ACTION'] : ''; ?>" method="post">

<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title"><?php echo ((isset($this->_rootref['L_UCP_RESEND'])) ? $this->_rootref['L_UCP_RESEND'] : ((isset($user->lang['UCP_RESEND'])) ? $user->lang['UCP_RESEND'] : '{ UCP_RESEND }')); ?></div></div></div></div>
<table class="tablebg" width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td class="row1" width="38%"><b class="genmed"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>: </b></td>
	<td class="row2"><input type="text" class="post" name="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_EMAIL_ADDRESS'])) ? $this->_rootref['L_EMAIL_ADDRESS'] : ((isset($user->lang['EMAIL_ADDRESS'])) ? $user->lang['EMAIL_ADDRESS'] : '{ EMAIL_ADDRESS }')); ?>: </b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_EMAIL_REMIND'])) ? $this->_rootref['L_EMAIL_REMIND'] : ((isset($user->lang['EMAIL_REMIND'])) ? $user->lang['EMAIL_REMIND'] : '{ EMAIL_REMIND }')); ?></span></td>
	<td class="row2"><input type="text" class="post" name="email" size="25" maxlength="100" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>" /></td>
</tr>
<tr><td class="cat-bottom" colspan="2"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnmain" />&nbsp;&nbsp;<input type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="btnlite" /></td></tr>
</table>
<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;</div></div></div></div>

<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>

</div>

<?php $this->_tpl_include('overall_footer.html'); ?>