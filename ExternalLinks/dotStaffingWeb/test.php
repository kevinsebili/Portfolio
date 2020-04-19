<?php
if($_POST["message"]) {
    mail("kevin.sebili@gmial.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>