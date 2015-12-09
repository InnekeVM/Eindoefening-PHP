<?php

require_once 'includes/init.php';
require_once 'Business/KlantService.php';
include_once 'Presentation/Klantgegevens.php';

if (isset($_GET['action']) && $_GET['action'] == 'registreer') {
    $klantService = new KlantService();  
    $_SESSION['klantId'] = $klantService->voegToe($_POST['naam'], $_POST['voornaam'], $_POST['adres'] . $_POST['huisnummer'], $_POST['postcode'], $_POST['gemeente'], $_POST['tel']);
    if (isset($_POST['acount'])) {
        header("location:WebklantRegistratie.php");
    } else {
        header("location:Bestel");
    }
}

 

 

