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

        $sql = "Select * From user_payments Where user_id=? AND payment_status = 1 order by id desc";
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
    
    public function list_payments() {
        $sql = "SELECT * FROM user_payments Where payment_status = 1 order by id desc";
        if (!$result = $this->conn->query($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $payments_array = array();
        while ($payment = $result->fetch_object('UserPayment')) {
            $payments_array[] = $payment;
        }
        return $payments_array;
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

    public function payment_search_by_id($id) {
        $sql = "SELECT * FROM user_payments WHERE id = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $payment = $result->fetch_object('UserPayment');

        return $payment;
    }
    
    public function update_payment_status(UserPayment $payment) {

        $sql = "UPDATE user_payments SET payment_status = ? WHERE id = ?";
        
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $payment_status = $payment->getPayment_status();
        $id = $payment->getId();
        $stmt->bind_param('ii', $payment_status, $id);
        $stmt->execute();

        return $id;
    }


}