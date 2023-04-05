<?php

class UserDAO {
    
    private $conn;

    public function __construct($conn) {
        if (!$conn instanceof mysqli) {
            return false;
        }
        $this->conn = $conn;
    }
    
    public function user_search_by_email($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_object('User');
        
        return $user;
    }
    
    public function user_search_by_username($username) {
        $sql = "SELECT * FROM users WHERE username = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('s', $username);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_object('User');
        
        return $user;
    }
    
    public function user_search_by_dni($dni) {
        $sql = "SELECT * FROM users WHERE dni = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('s', $dni);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_object('User');
        
        return $user;
    }
    
    public function update_uid(User $u) {
        $sql = "UPDATE users SET uid = ? WHERE id = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $id = $u->getId();
        $uid = $u->getUid();
        
        $stmt->bind_param('si', $uid, $id);
        $stmt->execute();
    }
    
    public function create_user(User $u) {
        $sql = "INSERT INTO users (first_name, last_name, username, email, password, phone_number, gender, date_of_birth, dni) VALUES (?,?,?,?,?,?,?,?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $first_name = $u->getFirst_name();
        $last_name = $u->getLast_name();
        $username = $u->getUsername();
        $email = $u->getEmail();
        $password = $u->getPassword();
        $phone_number = $u->getPhone_number();
        $gender = $u->getGender();
        $date_of_birth = $u->getDate_of_birth();
        $dni = $u->getDni();
        
        $stmt->bind_param('sssssisss', $first_name, $last_name, $username, $email, $password, $phone_number, $gender, $date_of_birth, $dni);
        $stmt->execute();
    }

}

?>