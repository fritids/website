<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Välkommen till "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>"

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>


Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

Forumadress: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>

----------------------------

Ditt konto är för närvarande inaktiverat. Du kan inte använda det förrän du besökt följande länk:

<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


Ditt lösenord har krypteras i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>