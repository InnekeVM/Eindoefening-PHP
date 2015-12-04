<?php

require_once 'includes/init.php';
require_once 'Business/KlantService.php';
include_once 'Presentation/Klantgegevens.php';

if (isset($_GET['action']) && $_GET['action'] == 'registreer') {
    $klantService = new KlantService();
    $adres = $_POST['adres'] . $_POST['huisnummer'];
    $id = $klantService->voegToe($_POST['naam'], $_POST['voornaam'], $adres, $_POST['postcode'], $_POST['gemeente'], $_POST['tel']);
    if (isset($_POST['acount'])) {
        header("location:WebklantRegistratie.php?id=$id");
    } else {
        header("location:Bestel?id=$id");
    }
}
 

 

