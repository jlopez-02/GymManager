<?php

class PayPlanDAO {
    private $conn;

    public function __construct($conn) {
        if (!$conn instanceof mysqli) {
            return false;
        }
        $this->conn = $conn;
    }
    
    public function create_payplan(PayPlan $pp) {
        $sql = "INSERT INTO pay_plans (name, price, monthly_cycle) VALUES (?,?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        
        $name = $pp->getName();
        $price = $pp->getPrice();
        $monthly_cycle = $pp->getMonthly_cycle();
        
        $stmt->bind_param('sii', $name, $price, $monthly_cycle);
        $stmt->execute();
        
        return $stmt->insert_id;
    }
    
    public function list_payplans() {
        $sql = "SELECT * FROM pay_plans";
        if (!$result = $this->conn->query($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $pplans_array = array();
        while ($pp = $result->fetch_object('PayPlan')) {
            $pplans_array[] = $pp;
        }
        return $pplans_array;
    }
    
}
