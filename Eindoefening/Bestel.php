<?php

require_once 'includes/init.php';

require_once 'Business/BestelService.php';

include_once 'Presentation/Afrekenen.php';

if (isset($_GET['action']) && $_GET['action'] == 'bestel') {
    $bestelService = new BestelService;
    $bestelService->bestel($_SESSION['id'], $_POST['extraInfo']);
    header("location:Presentation/Slot.php");
}