<?php

class Klant {

    private $klantId;
    private $naam;
    private $voornaam;
    private $adres;
    private $postcode;
    private $gemeente;
    private $telefoonnummer;
    private $email;

    function __construct($klantId, $naam, $voornaam, $adres, $postcode, $gemeente, $telefoonnummer, $email) {
        $this->klantId = $klantId;
        $this->naam = $naam;
        $this->voornaam = $voornaam;
        $this->adres = $adres;
        $this->postcode = $postcode;
        $this->gemeente = $gemeente;
        $this->telefoonnummer = $telefoonnummer;
        $this->email = $email;
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

    function getPostcode() {
        return $this->postcode;
    }

    function getGemeente() {
        return $this->gemeente;
    }

    function getTelefoonnummer() {
        return $this->telefoonnummer;
    }

    function getEmail() {
        return $this->email;
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

    function setPostcode($postcode) {
        $this->postcode = $postcode;
    }

    function setGemeente($gemeente) {
        $this->gemeente = $gemeente;
    }

    function setTelefoonnummer($telefoonnummer) {
        $this->telefoonnummer = $telefoonnummer;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
