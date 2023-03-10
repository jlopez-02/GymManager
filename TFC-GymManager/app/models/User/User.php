<?php

class User {
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $email;
    private $password;
    private $phone_number;
    private $gender;
    private $date_of_birth;
    private $image;
    private $uid;
    private $active;
    private $notes;

    public function User(){
        
    }
    
    public function getId() {
      return $this->id;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function getFirstName() {
      return $this->first_name;
    }
  
    public function setFirstName($first_name) {
      $this->first_name = $first_name;
    }
  
    public function getLastName() {
      return $this->last_name;
    }
  
    public function setLastName($last_name) {
      $this->last_name = $last_name;
    }
  
    public function getUsername() {
      return $this->username;
    }
  
    public function setUsername($username) {
      $this->username = $username;
    }
  
    public function getEmail() {
      return $this->email;
    }
  
    public function setEmail($email) {
      $this->email = $email;
    }
  
    public function getPassword() {
      return $this->password;
    }
  
    public function setPassword($password) {
      $this->password = $password;
    }
  
    public function getPhoneNumber() {
      return $this->phone_number;
    }
  
    public function setPhoneNumber($phone_number) {
      $this->phone_number = $phone_number;
    }
  
    public function getGender() {
      return $this->gender;
    }
  
    public function setGender($gender) {
      $this->gender = $gender;
    }
  
    public function getDateOfBirth() {
      return $this->date_of_birth;
    }
  
    public function setDateOfBirth($date_of_birth) {
      $this->date_of_birth = $date_of_birth;
    }
  
    public function getImage() {
      return $this->image;
    }
  
    public function setImage($image) {
      $this->image = $image;
    }
  
    public function getUid() {
      return $this->uid;
    }
  
    public function setUid($uid) {
      $this->uid = $uid;
    }
  
    public function getActive() {
      return $this->active;
    }
  
    public function setActive($active) {
      $this->active = $active;
    }
  
    public function getNotes() {
      return $this->notes;
    }
  
    public function setNotes($notes) {
      $this->notes = $notes;
    }
  }

?>