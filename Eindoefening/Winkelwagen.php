<?php

require_once 'includes/init.php';
require_once 'Business/WinkelwagenService.php';

if (isset($_GET['action']) && $_GET['action'] == 'bestel') {
    $winkelwagenService = new WinkelwagenService();
    $bestel = $winkelwagenService->bestel();
    header("location:Overzicht.php");
}


if (isset($_GET['verwijder'])) {
    $winkelwagenService = new WinkelwagenService();
    $bestel = $winkelwagenService->verwijder();
    header("location:Winkelwagen.php");
}

if (isset($_GET['action']) && $_GET['action'] == 'wijzig') {
    $winkelwagenService = new WinkelwagenService();
    $bestel = $winkelwagenService->wijzig();
    header("location:Winkelwagen.php");
}

include_once 'Presentation/WinkelwagenOverzicht.php';
