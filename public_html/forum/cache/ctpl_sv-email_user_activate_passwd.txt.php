<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Aktivera nytt lösenord

Hej <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Du får detta meddelande för att du (eller någon som utger sig för att vara dig) har begärt ett nytt lösenord för ditt konto på "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>". Om du inte begärt detta, ignorera detta meddelande. Om du fortsätter att få samma meddelande som detta, kontakta administratören.

För att kunna använda det nya lösenordet måste du aktivera det. Klicka på nedanstående länk för att göra detta.

<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


När du aktiverat det kan du logga in med ditt nya lösenord:

Lösenord: <?php echo (isset($this->_rootref['PASSWORD'])) ? $this->_rootref['PASSWORD'] : ''; ?>


Du kan självklart sedan byta detta lösenord i kontrollpanelen. Kontakta administratören om några problem uppstår.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>