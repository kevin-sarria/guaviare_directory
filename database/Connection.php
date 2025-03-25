<?php

class Connection {

    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $nameDB = 'guaviare_directory';

    public static function connect() {
        try {
            $pdo = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$nameDB . ";charset=utf8",
                self::$username,
                self::$password
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

}

?>