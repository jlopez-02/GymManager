<?php

class UserAccessDAO {
    private $conn;

    public function __construct($conn) {
        if (!$conn instanceof mysqli) {
            return false;
        }
        $this->conn = $conn;
    }
    
    public function create_access(UserAccess $access) {
        $sql = "INSERT INTO user_accesses (user_id, type) VALUES (?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $user_id = $access->getUser_id();
        $type = $access->getType();
        
        $stmt->bind_param('is', $user_id, $type);
        $stmt->execute();
        
        return $stmt->insert_id;
    }
    
    public function list_accesses() {
        $sql = "SELECT * FROM user_accesses Order By user_id, id desc";
        if (!$result = $this->conn->query($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $accesses = array();
        while ($access = $result->fetch_object('UserAccess')) {
            $accesses[] = $access;
        }
        return $accesses;
    }
    
    public function last_user_access($user_id) {
        $sql = "SELECT * FROM user_accesses WHERE user_id = ? Order By id desc LIMIT 1";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("SQL ERROR " . $this->conn->error);
        }
        $stmt->bind_param('i', $user_id);
        $stmt->execute();

        $result = $stmt->get_result();
        $access = $result->fetch_object('UserAccess');

        return $access;
    }
    
    


}
