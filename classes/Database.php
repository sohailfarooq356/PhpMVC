<?php

class Database
{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $dbname = 'lms';
    private static $pass = '';

    /**
     * Description of $conn
     *  Connection variable for database.
     * @author SohailFarooq
     */

    private static function connect() {
        try {
            $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: Error on Line " . $e->getLine() . ' in Filename ' . $e->getFile() . $e->getMessage();
            die();
        }
    }
    public static function query($query, $params = array()){
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
        }
    }
}