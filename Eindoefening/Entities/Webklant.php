<?php

class Webklant {
    
    private $loginId;
    private $wachtwoord;
    private $status;
    private $klantId;
    
    function __construct($loginId, $wachtwoord, $status, $klantId) {
        $this->loginId = $loginId;
        $this->wachtwoord = $wachtwoord;
        $this->status = $status;
        $this->klantId = $klantId;
    }

    function setWachtwoord($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setKlantId($klantId) {
        $this->klantId = $klantId;
    }


}

