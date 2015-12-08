<?php

require_once 'includes/init.php';
require_once 'Entities/Status.php';

class StatusDAO {

    public function getById($klantId) {
        $sql = "select * from statussen inner join webklanten on statussen.statusId = webklanten.statusId where klantId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $klantId));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $statusId = $rij['statusId'];
        return $statusId;
    }

}
