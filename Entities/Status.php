<?php

class Status {
    private $statusId;
    private $naam;
    
    function __construct($statusId, $naam) {
        $this->statusId = $statusId;
        $this->naam = $naam;
    }
    function getStatusId() {
        return $this->statusId;
    }

    function getNaam() {
        return $this->naam;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }


}

