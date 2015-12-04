<?php

require_once 'includes/init.php';
require_once 'Business/KlantService.php';

include 'Presentation/Account.php';



if (isset($_GET['action']) && $_GET['action'] == 'account') {
    if ($_POST['wachtwoord'] == $_POST['wachtwoordher']) {
        try {
            $klantService = new KlantService();
            $klantService->registreer($_POST['email'], $_POST['wachtwoord'], $_GET['id']);
            $id=$_GET['id'];
            header("location:Bestel.php?id=$id");
        } catch (EmailadresReedsAcountException $ex) {
            header("location:Account.php?error=EmailadresReedsAccount");
        }
    } else {
        header("location:Account.php?error=WachtwoordFout");
    }
}

