<?php

class Webklant {

    private $loginId;
    private $email;
    private $wachtwoord;
    private $status;
    private $klantId;

    function __construct($email, $wachtwoord, $status, $klantId) {
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
        $this->status = $status;
        $this->klantId = $klantId;
    }

    function getLoginId() {
        return $this->loginId;
    }

    function getEmail() {
        return $this->email;
    }

    function getWachtwoord() {
        return $this->wachtwoord;
    }

    function getStatus() {
        return $this->status;
    }

    function getKlantId() {
        return $this->klantId;
    }

    function setEmail($email) {
        $this->email = $email;
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
