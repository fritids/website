<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Nytt personligt meddelande

Hej <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Du har fått ett nytt personligt meddelande från "<?php echo (isset($this->_rootref['AUTHOR_NAME'])) ? $this->_rootref['AUTHOR_NAME'] : ''; ?>" till ditt konto på "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" med ämnet:

<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>


Du kan läsa meddelandet genom att klicka på följande länk:

<?php echo (isset($this->_rootref['U_INBOX'])) ? $this->_rootref['U_INBOX'] : ''; ?>


Du har begärt att bli meddelad vid nya personliga meddelanden, men kom ihåg att du alltid kan välja att inte bli meddelad om nya meddelanden genom att ändra inställningarna i din profil.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>