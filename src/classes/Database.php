<?php

    namespace XPA\Classes;

    use PDO;
    use PDOException;

    class Database {
        private static $host;
        private static $db_name;
        private static $username;
        private static $password;
        private static $conn;

        public static function connect() {
            self::set_db_creds();
            self::$conn = null;

            try {
                self::$conn = new PDO('mysql:host='.self::$host.';dbname='.self::$db_name,
                self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();        
            }
            return self::$conn;
        }

        public static function disconnect() {
            self::$conn = null;
        }

        private static function set_db_creds() {
            self::$host = $_ENV['DB_HOST'];
            self::$db_name = $_ENV['DB_NAME'];
            self::$username = $_ENV['DB_USER'];
            self::$password = $_ENV['DB_PASS'];
        }
    }