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
    private $dni;
    private $image;
    private $uid;
    private $active;
    private $notes;
    private $role;

    public function User(){
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone_number() {
        return $this->phone_number;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDate_of_birth() {
        return $this->date_of_birth;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getImage() {
        return $this->image;
    }

    public function getUid() {
        return $this->uid;
    }

    public function getActive() {
        return $this->active;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getRole() {
        return $this->role;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setFirst_name($first_name): void {
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name): void {
        $this->last_name = $last_name;
    }

    public function setUsername($username): void {
        $this->username = $username;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setPhone_number($phone_number): void {
        $this->phone_number = $phone_number;
    }

    public function setGender($gender): void {
        $this->gender = $gender;
    }

    public function setDate_of_birth($date_of_birth): void {
        $this->date_of_birth = $date_of_birth;
    }

    public function setDni($dni): void {
        $this->dni = $dni;
    }

    public function setImage($image): void {
        $this->image = $image;
    }

    public function setUid($uid): void {
        $this->uid = $uid;
    }

    public function setActive($active): void {
        $this->active = $active;
    }

    public function setNotes($notes): void {
        $this->notes = $notes;
    }

    public function setRole($role): void {
        $this->role = $role;
    }

    public function getDniNumber() {
        return substr($this->dni, 0, -1);
    }

  }

?>