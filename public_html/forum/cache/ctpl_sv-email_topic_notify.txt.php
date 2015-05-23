<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Meddelande om svar på tråd — "<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>"

Hej <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Du får detta meddelande för att du bevakar tråden "<?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>" på "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>". Denna tråd har besvarats sedan ditt senaste besök. Du kan använda följande länk för att läsa svaren som gjorts, inga fler meddelanden kommer att skickas förrän du besökt tråden.

Om du vill visa det nyaste inlägget som gjorts sedan ditt senaste besök, klicka på följande länk:
<?php echo (isset($this->_rootref['U_NEWEST_POST'])) ? $this->_rootref['U_NEWEST_POST'] : ''; ?>


Om du vill besöka tråden, klicka på följande länk:
<?php echo (isset($this->_rootref['U_TOPIC'])) ? $this->_rootref['U_TOPIC'] : ''; ?>


Om du vill besöka kategorin, klicka på följande länk:
<?php echo (isset($this->_rootref['U_FORUM'])) ? $this->_rootref['U_FORUM'] : ''; ?>


Om du inte längre vill bevaka denna tråd klickar du antingen på "Sluta bevaka denna tråd"-länken som du hittar ovanför tråden i länken ovan, eller genom att klicka på följande länk:

<?php echo (isset($this->_rootref['U_STOP_WATCHING_TOPIC'])) ? $this->_rootref['U_STOP_WATCHING_TOPIC'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>