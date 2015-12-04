<?php

 require_once 'includes/init.php';
 require_once 'Business/KlantService.php';
 
 if (isset($_GET['action']) && $_GET['action']== 'bestel')
 
 if (isset($_POST['acount'])){
     header("location:WebklantRegistratie.php");
 }