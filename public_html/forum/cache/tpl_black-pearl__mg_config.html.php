<?php if (!defined('IN_PHPBB')) exit; if ($this->_tpldata['DEFINE']['.']['MG_CONFIG_SWITCH']) {  ?>

To use these vars you need to include this file in overall header using the
INCLUDE function and then you are able to recall the vars using this syntax:
<?php echo (isset($this->_tpldata['DEFINE']['.']['MG_TBL_H_L'])) ? $this->_tpldata['DEFINE']['.']['MG_TBL_H_L'] : ''; ?>

<?php } $this->_tpldata['DEFINE']['.']['MG_GLOBAL_WIDTH'] = '960px'; $this->_tpldata['DEFINE']['.']['MG_BUTTONS_EXTENSION'] = 'png'; $this->_tpldata['DEFINE']['.']['MG_TBL_H_L'] = '<div><div class="tbl-h-l"><div class="tbl-h-r"><div class="tbl-h-c"><div class="tbl-title">'; $this->_tpldata['DEFINE']['.']['MG_TBL_H_R'] = '</div></div></div></div>'; $this->_tpldata['DEFINE']['.']['MG_TBL_F_L'] = '<div class="tbl-f-l"><div class="tbl-f-r"><div class="tbl-f-c">&nbsp;'; $this->_tpldata['DEFINE']['.']['MG_TBL_F_R'] = '</div></div></div></div>'; $this->_tpldata['DEFINE']['.']['MG_SPACER'] = '<img src="' . (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : '' . '/images/spacer.gif" width="1" height="4" alt="" />'; $this->_tpldata['DEFINE']['.']['MG_MAX'] = '/images/icon_maximize.gif'; $this->_tpldata['DEFINE']['.']['MG_MIN'] = '/images/icon_minimize.gif'; $this->_tpldata['DEFINE']['.']['MG_MAX_PNG'] = '/images/icon_maximize.png'; $this->_tpldata['DEFINE']['.']['MG_MIN_PNG'] = '/images/icon_minimize.png'; ?>