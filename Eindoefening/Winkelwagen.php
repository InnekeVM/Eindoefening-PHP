<?php

require_once 'includes/init.php';
require_once 'Business/WinkelwagenService.php';

if (isset($_GET['action']) && $_GET['action'] == 'bestel') {
    $winkelwagenService = new WinkelwagenService();
    $winkelwagenService->bestel();
    header("location:Winkelwagen.php");
}


if (isset($_GET['verwijder'])) {
    $winkelwagenService = new WinkelwagenService();
    $winkelwagenService->verwijder();
    header("location:Winkelwagen.php");
}

if (isset($_GET['action']) && $_GET['action'] == 'wijzig') {
    $winkelwagenService = new WinkelwagenService();
    $winkelwagenService->wijzig();
    header("location:Winkelwagen.php");
}

include_once 'Presentation/WinkelwagenOverzicht.php';
