<?php

class db_connection {
    
    static function connect() {
        $connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_BD);
        if ($connection->connect_errno) {
            die("Connection error: " . $connection->connect_error);
        }
        return $connection;
    }
    
}
