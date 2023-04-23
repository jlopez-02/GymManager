<?php

class PayPlan {
    private $id;
    private $name;
    private $price;
    private $monthly_cycle;
    private $active;
    
    public function PayPlan(){
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getMonthly_cycle() {
        return $this->monthly_cycle;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setPrice($price): void {
        $this->price = $price;
    }

    public function setMonthly_cycle($monthly_cycle): void {
        $this->monthly_cycle = $monthly_cycle;
    }

    public function setActive($active): void {
        $this->active = $active;
    }


}
