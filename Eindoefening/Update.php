<?php
require_once 'includes/init.php';
require_once 'Business/KlantService.php';

$klantService = new KlantService;
$klant = $klantService->getKlantById($_SESSION['id']);

include_once 'Presentation/UpdateKlant.php';

if(isset($_GET['action'])&& $_GET['action']== 'update'){
    $klant = new Klant($_POST['naam'], $_POST['voornaam'], $_POST['adres'], $_POST['huisnummer'], $_POST['postcode'], $_POST['gemeente'], $_POST['tel']);
    $klantService->updateKlant($klant);
    header("location:Bestel.php");
}
