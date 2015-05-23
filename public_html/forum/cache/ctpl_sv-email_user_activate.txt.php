<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Återaktivera ditt konto

Hej <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Ditt konto på "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" har inaktiverats, förmodligen på grund av att förändringar har gjorts till din profil. För att återaktivera ditt konto måste du klicka på länken nedan:

<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>