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

    public function list_payments_by_user(int $user_id) {

        $sql = "Select * From user_payments Where user_id=? order by id desc";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
       }

        $stmt->bind_param('i', $user_id);
        $stmt->execute();

        $result = $stmt->get_result();

        $payment_list = array();
        while ($payment = $result->fetch_object('UserPayment')) {
            $payment_list[] = $payment;
        }

        return $payment_list;
    }
    
    public function create_payment(UserPayment $payment) {
        $sql = "INSERT INTO user_payments (user_id, pay_plan_id, payment_status, price, start_date, expiration_date, record_date) VALUES (?,?,?,?,?,?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $user_id = $payment->getUser_id();
        $pay_plan_id = $payment->getPay_plan_id();
        $payment_status = $payment->getPayment_status();
        $price = $payment->getPrice();
        $start_date = $payment->getStart_date();
        $expiration_date = $payment->getExpiration_date();
        $record_date = $payment->getRecord_date();
        
        $stmt->bind_param('iiiisss', $user_id, $pay_plan_id, $payment_status, $price, $start_date, $expiration_date, $record_date);
        $stmt->execute();
        
        return $stmt->insert_id;
    }



}