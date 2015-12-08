<?php

// Load InnekeFramework
require_once('InnekeFramework.class.php');

require_once 'Entities/OrderLijn.php';

// Initialise InnekeFramework
InnekeFramework::init(require_once(__DIR__ . '/config.php'));

// Init session

session_start();

 function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
