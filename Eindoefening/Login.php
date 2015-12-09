<?php

require_once 'includes/init.php';
require_once 'Business/KlantService.php';
include_once 'Presentation/LoginForm.php';

if (isset($_GET['action']) && $_GET['action'] == 'login') {
    try {
        $klantService = new KlantService();
        $klantService->login($_POST['email'], $_POST['wachtwoord']);
        setcookie('email', $_POST['email']);
        header("location:Bestel.php");
    } catch (KlantBestaatNietException $exc) {

        header("location:KlantRegistratie.php?error=KlantBestaatNiet");
        exit(0);
    } catch (WachtwoordFoutException $exc) {
        header("location:Login.php?error=WachtwoordFout");
        exit(0);
    }
}

