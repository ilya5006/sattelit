<?php
    class Database
    {
        private $mysqli;
        private static $created = 0;

        private function __construct($host, $login, $password, $database)
        {
            $this->mysqli = new mysqli($host, $login, $password, $database);

            if ($this->mysqli->connect_errno)
            {
                die ('Не удалось подключиться к MySQL: (' . $this->mysqli->connect_errno . ') ' . $this->mysqli->connect_error);
            }
        }

        public static function init($host, $login, $password, $database)
        {
            if (static::$created == 0)
            {
                return new self($host, $login, $password, $database);
                static::$created = 1;
            }
            else
            {
                die ('Может быть создан лишь один экземпляр класса "Database"');
            }
        }

        public function query($query)
        {
            $result = $this->mysqli->query($query);
            return $result->fetch_assoc();
        }

        public function queryAll($query)
        {
            $result = $this->mysqli->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        
        public function queryExecute($query)
        {
            return $this->mysqli->query($query);
        }

        public function escapeString($str)
        {
            return $this->mysqli->escape_string($str);
        }
    }

    $db = Database::init('localhost', 'root', '', 'sattelit');
?>