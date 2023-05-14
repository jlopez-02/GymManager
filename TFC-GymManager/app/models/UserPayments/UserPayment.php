<?php
class UserPayment
{
    private $id;
    private $user_id;
    private $pay_plan_id;
    private $payment_status;
    private $active;
    private $price;
    private $start_date;
    private $expiration_date;
    private $record_date;

    public function UserPayment(){

    }
    
    public function getId() {
        return $this->id;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function getPay_plan_id() {
        return $this->pay_plan_id;
    }

    public function getPayment_status() {
        return $this->payment_status;
    }

    public function getActive() {
        return $this->active;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStart_date() {
        return $this->start_date;
    }

    public function getExpiration_date() {
        return $this->expiration_date;
    }

    public function getRecord_date() {
        return $this->record_date;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }

    public function setPay_plan_id($pay_plan_id): void {
        $this->pay_plan_id = $pay_plan_id;
    }

    public function setPayment_status($payment_status): void {
        $this->payment_status = $payment_status;
    }

    public function setActive($active): void {
        $this->active = $active;
    }

    public function setPrice($price): void {
        $this->price = $price;
    }

    public function setStart_date($start_date): void {
        $this->start_date = $start_date;
    }

    public function setExpiration_date($expiration_date): void {
        $this->expiration_date = $expiration_date;
    }

    public function setRecord_date($record_date): void {
        $this->record_date = $record_date;
    }

}