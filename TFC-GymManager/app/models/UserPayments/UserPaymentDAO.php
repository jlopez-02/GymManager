<?php

class UserPaymentDAO
{
    private $conn;

    public function __construct($conn) {
        if (!$conn instanceof mysqli) {
            return false;
        }
        $this->conn = $conn;
    }




}