<?php

require_once 'includes/init.php';
require_once 'Entities/OrderLijn.php';
require_once 'Entities/Bestelling.php';

class BestellingDAO {

    function voegToe($datum, $extraInfo, $klantId, $tijdstip) {
        $sql = "insert into bestellingen (datum, extraInfo, klantId, tijdstip) values (:datum, :extrainfo, :klantId, :tijdstip)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':datum'=>$datum, ':extraInfo'=>$extraInfo, ':klantId'=>$klantId, ':tijdstip'=>$tijdstip ));
        $id = $dbh->lastInsertId();
        return $id;
    }

}
