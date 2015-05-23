<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Meddelande om nytt inlägg i kategori — "<?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>"

Hej <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Du får detta meddelande för att du bevakar kategorin "<?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" på "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>". Denna kategori har fått ett nytt svar i tråden "<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>" sedan ditt senaste besök. Du kan använda följande länk för att visa det senaste olästa svaret, inga fler meddelanden kommer att skickas till dig förrän du besökt tråden.

<?php echo (isset($this->_rootref['U_NEWEST_POST'])) ? $this->_rootref['U_NEWEST_POST'] : ''; ?>


Om du vill besöka tråden, klicka på följande länk:
<?php echo (isset($this->_rootref['U_TOPIC'])) ? $this->_rootref['U_TOPIC'] : ''; ?>


Om du vill besöka kategorin, klicka på följande länk:
<?php echo (isset($this->_rootref['U_FORUM'])) ? $this->_rootref['U_FORUM'] : ''; ?>


Om du inte längre vill bevaka denna kategori kan du antingen klicka på "Sluta bevaka denna kategori"-länken som du hittar i kategorin ovan, eller genom att klicka på följande länk:

<?php echo (isset($this->_rootref['U_STOP_WATCHING_FORUM'])) ? $this->_rootref['U_STOP_WATCHING_FORUM'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>