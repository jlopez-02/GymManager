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

    public function list_active_payplans() {
        $sql = "SELECT * FROM pay_plans Where active = 1";
        if (!$result = $this->conn->query($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $pplans_array = array();
        while ($pp = $result->fetch_object('PayPlan')) {
            $pplans_array[] = $pp;
        }
        return $pplans_array;
    }

    public function plan_search_by_id($id) {
        $sql = "SELECT * FROM pay_plans WHERE id = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $plan = $result->fetch_object('PayPlan');

        return $plan;
    }

    public function update_state(PayPlan $plan) {

        if($plan->getActive() == 0){
            $sql = "UPDATE pay_plans SET active = 1 WHERE id = ?";
        }else{
            $sql = "UPDATE pay_plans SET active = 0 WHERE id = ?";
        }


        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $id = $plan->getId();
        $stmt->bind_param('i', $id);
        $stmt->execute();

        return $id;
    }

    public function update_pplan(PayPlan $plan) {

        $sql = "UPDATE pay_plans SET name = ?, price = ?, monthly_cycle = ? WHERE id = ?";

        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $name = $plan->getName();
        $price = $plan->getPrice();
        $monthly_cycle = $plan->getMonthly_cycle();
        $id = $plan->getId();
        $stmt->bind_param('siii', $name,$price,$monthly_cycle, $id);
        $stmt->execute();

        return $id;
    }


    
}
