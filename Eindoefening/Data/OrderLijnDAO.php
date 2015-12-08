<?php

require_once 'includes/init.php';
require_once 'Entities/OrderLijn.php';
require_once 'Entities/Bestelling.php';

class OrderLijnDAO {

    public function getByBestelId($id) {
        $sql = "select * from orderlijnen where bestelId = :id";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $resultset = $stmt->fetch(PDO::FETCH_ASSOC);
        $lijst = array();

        foreach ($resultSet as $rij) {
            $orderlijn = new Orderlijn($rij['$productId'], $rij['aantal']);
            $lijst[] = $orderlijn;
        }
        $dbh = null;
        return $lijst;
    }
    
       function voegToe($productId, $aantal, $bestelId, $prijs) {
        $sql = "insert into bestellingen (productId, aantal, bestelId, prijs) values (:productId, :aantal, :bestelId, :prijs)";
        $dbh = InnekeFramework::getDatabase();
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':productId'=>$productId, ':aantal'=>$aantal, ':bestelId', ':prijs'=>$prijs ));
       
    }
    

}
