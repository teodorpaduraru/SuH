<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (userName, userPassword, userEmail) VALUES(:username, :password, :email)');

        //Bind values
        $this->db->bind(':username', $data['userName']);
        $this->db->bind(':email', $data['userEmail']);
        $this->db->bind(':password', $data['userPassword']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();
        if($row) {
            $hashedPassword = $row->userPassword;

            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }
        else {
            return false;
        }
        return false;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE userEmail = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByUserName($username) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE userName = :username');

        //Email param will be binded with the email variable
        $this->db->bind(':username', $username);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserPoints($uid, $username){
        $this->db->query('SELECT standings.points FROM standings INNER JOIN users on standings.uid=users.uid
        WHERE users.uid= :userId');

        $this->db->bind(':userId',$uid);

        if($this->db->rowCount() > 0) {
            $row = $this->db->single();
            return $row;
        } else {
            if($this->setStandingData($uid))
            {
                $this->db->query('SELECT standings.points FROM standings INNER JOIN users on standings.uid=users.uid
                WHERE users.uid= :userId');
                $this->db->bind(':userId',$uid);
                $row = $this->db->single();
                return $row;
            }
            return false;
        }
    }

    public function setStandingData($uid) {
        $this->db->query('INSERT INTO standings (uid, Points) VALUES (:userId, 0)');
        $this->db->bind(':userId',$uid);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
} 