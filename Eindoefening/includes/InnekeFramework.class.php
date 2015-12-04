<?php

class InnekeFramework {

    private static $database;
    private static $config;

    public static function init($config) {
        self::$config = $config;
    }
    
    public static function getDatabase() {
        if (!self::$database) {
            self::$database = new PDO(self::$config['db_engine'] . ':dbname=' . self::$config['db_database'] . ';host=' . self::$config['db_host'] . '; charset=utf8', self::$config['db_username'], self::$config['db_password']);
            self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$database;
    }

}
