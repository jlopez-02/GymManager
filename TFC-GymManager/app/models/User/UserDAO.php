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
    
    public function list_users() {
        $sql = "SELECT * FROM users";
        if (!$result = $this->conn->query($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $users_array = array();
        while ($user = $result->fetch_object('User')) {
            $users_array[] = $user;
        }
        return $users_array;
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

    public function user_search_by_uid($uid) {
        $sql = "SELECT * FROM users WHERE uid = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('s', $uid);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_object('User');

        return $user;
    }
    
    public function user_search_by_id($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('s', $id);
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
    
    public function update_role(User $u) {
        $sql = "UPDATE users SET role = ? WHERE id = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $id = $u->getId();
        $role = $u->getRole();
        
        $stmt->bind_param('si', $role, $id);
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
        
        return $stmt->insert_id;
    }
    
    public function update_user(User $user) {

        $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ?, phone_number = ?, gender = ?, date_of_birth = ?, dni = ?, notes = ? WHERE id = ?";

        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $first_name = $user->getFirst_name();
        $last_name = $user->getLast_name();
        $email = $user->getEmail();
        $phone_number = $user->getPhone_number();
        $gender = $user->getGender();
        $birthdate = $user->getDate_of_birth();
        $dni = $user->getDni();
        $notes = $user->getNotes();
        $id = $user->getId();
        $stmt->bind_param('sssissssi', $first_name,$last_name,$email, $phone_number, $gender, $birthdate, $dni, $notes, $id);
        $stmt->execute();

        return $id;
    }
    
    public function update_image(User $user) {

        $sql = "UPDATE users SET image = ? WHERE id = ?";
        
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $image = $user->getImage();
        $id = $user->getId();
        $stmt->bind_param('si', $image, $id);
        $stmt->execute();

        return $id;
    }

}

?>