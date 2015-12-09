<?php

require_once 'includes/init.php';

require_once 'Business/BestelService.php';
require_once 'Business/KlantService.php';

$bestelService = new BestelService;
$klantservice = new KlantService;
/*@var $klant Klant*/
$klant = $klantservice->getKlantById($_SESSION['klantId']);
$totaal = 0;

include_once 'Presentation/Afrekenen.php';

if (isset($_GET['action']) && $_GET['action'] == 'bestel') {
    $bestelService = new BestelService;
    $bestelService->bestel($_SESSION['klantId'], $_POST['extraInfo']);
    session_destroy();
    header("location:Presentation/Slot.php");
}