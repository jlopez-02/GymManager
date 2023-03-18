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
            die("SQL ERROR" . $this->conn->error);
        }
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_object('User');
        
        return $user;
    }
    
    public function create_user(User $u) {
        $sql = "INSERT INTO users (first_name, last_name, username, email, password, phone_number, gender, date_of_birth) VALUES (?,?,?,?,?,?,?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("Error al preparar la sentencia: " . $this->conn->error);
        }
        $first_name = $u->getFirstName();
        $last_name = $u->getLastName();
        $username = $u->getUsername();
        $email = $u->getEmail();
        $password = $u->getPassword();
        $phone_number = $u->getPhoneNumber();
        $gender = $u->getGender();
        $date_of_birth = $u->getDateOfBirth();
        
        $stmt->bind_param('sssssiss', $first_name, $last_name, $username, $email, $password, $phone_number, $gender, $date_of_birth);
        $stmt->execute();
    }

}

?>