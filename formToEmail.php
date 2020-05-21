
<?php
if($_POST["message"]) {
    mail("galaminimitch@yahoo.co.uk", "Form to email message", $_POST["message"], "From: steve@gmail.com");
}
?>
