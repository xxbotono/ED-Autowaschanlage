<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nummer = $_POST['nummer'];
    $nachricht = $_POST['nachricht'];
    $subject = "Kontakt";

    $mailTo = "szabadkaboco@gmail.com"
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$nachricht;

    mail($mailTo, $subject, $txt, $headers);
    header("Locatioin: kontakt.php?mailsend");
}

?>