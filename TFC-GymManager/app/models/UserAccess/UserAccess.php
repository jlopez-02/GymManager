<?php

class UserAccess {
    private $id;
    private $user_id;
    private $time;
    private $type;
    
    public function getId() {
        return $this->id;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function getTime() {
        return $this->time;
    }

    public function getType() {
        return $this->type;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }

    public function setTime($time): void {
        $this->time = $time;
    }

    public function setType($type): void {
        $this->type = $type;
    }
}
