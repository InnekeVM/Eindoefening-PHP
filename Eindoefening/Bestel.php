<?php

 require_once 'includes/init.php';
 require_once 'Business/KlantService.php';
 
 include_once 'Presentation/Afrekenen.php';
 
 $bestelService = new BestelService;
 
 $bestelService->getPrijs($_GET['id'], $ProductId);