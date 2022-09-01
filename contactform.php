<?php

if (isset($_POST['submit'])){

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "scottzico2004@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$firstName. " ".$lastName."\n\n".$message."\n\n"."telefoon nummer: ".$phone;

    mail($mailTo, "Mail van website", $txt, $headers);
    header("Location: index.php?mailsend");
}