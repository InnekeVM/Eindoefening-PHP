<?php

require_once 'includes/init.php';
require_once 'Entities/Status.php';

class statusDAO {

    public function getById($klantId) {
        $sql = "select * from statussen inner join webklanten on statussen.statusId = webklanten.statusId where where klantId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $status = new Status($rij['statusId'], $rij['naam']);
        $dbh = null;
        return $status;
    }

}
