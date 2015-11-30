<?php

class Bestelling {
    private $bestelId;
    private $klantId;
    private $winkelwagenId;
    private $datum;
    private $tijdstip;
    private $extraInfo;
    
    function __construct($bestelId, $klantId, $winkelwagenId, $datum, $tijdstip, $extraInfo) {
        $this->bestelId = $bestelId;
        $this->klantId = $klantId;
        $this->winkelwagenId = $winkelwagenId;
        $this->datum = $datum;
        $this->tijdstip = $tijdstip;
        $this->extraInfo = $extraInfo;
    }
    function getBestelId() {
        return $this->bestelId;
    }

    function getKlantId() {
        return $this->klantId;
    }

    function getWinkelwagenId() {
        return $this->winkelwagenId;
    }

    function getDatum() {
        return $this->datum;
    }

    function getTijdstip() {
        return $this->tijdstip;
    }

    function getExtraInfo() {
        return $this->extraInfo;
    }

    function setKlantId($klantId) {
        $this->klantId = $klantId;
    }

    function setWinkelwagenId($winkelwagenId) {
        $this->winkelwagenId = $winkelwagenId;
    }

    function setDatum($datum) {
        $this->datum = $datum;
    }

    function setTijdstip($tijdstip) {
        $this->tijdstip = $tijdstip;
    }

    function setExtraInfo($extraInfo) {
        $this->extraInfo = $extraInfo;
    }


}
