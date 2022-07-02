<?php 

namespace model;
use PDO;

class Db {
    static $host = "";
    static $dbname = "";
    static $user = "";
    static $pass = "";

    public static function connect(){
        $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}