<?php

class Klant {

    private $klantId;
    private $naam;
    private $voornaam;
    private $adres;
    private $nummer;
    private $postcode;
    private $gemeente;
    private $telefoonnummer;
    
    function __construct($naam, $voornaam, $adres, $nummer, $postcode, $gemeente, $telefoonnummer) {
        $this->naam = $naam;
        $this->voornaam = $voornaam;
        $this->adres = $adres;
        $this->nummer = $nummer;
        $this->postcode = $postcode;
        $this->gemeente = $gemeente;
        $this->telefoonnummer = $telefoonnummer;
    }

    function getKlantId() {
        return $this->klantId;
    }

    function getNaam() {
        return $this->naam;
    }

    function getVoornaam() {
        return $this->voornaam;
    }

    function getAdres() {
        return $this->adres;
    }
    function getNummer() {
        return $this->nummer;
    }

        function getPostcode() {
        return $this->postcode;
    }

    function getGemeente() {
        return $this->gemeente;
    }

    function getTelefoonnummer() {
        return $this->telefoonnummer;
    }
  
    function setNaam($naam) {
        $this->naam = $naam;
    }

    function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

    function setAdres($adres) {
        $this->adres = $adres;
    }
    function setNummer($nummer) {
        $this->nummer = $nummer;
    }

    
    function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

    function setGemeente($gemeente) {
        $this->gemeente = $gemeente;
    }

    function setTelefoonnummer($telefoonnummer) {
        $this->telefoonnummer = $telefoonnummer;
    }

 


}
