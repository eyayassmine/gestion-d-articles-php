<?php
// front/pluton/mvc/models/User.php

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $tel;
    private $created_at;

    // Constructor
    public function __construct($id, $username, $password, $role, $tel = null, $created_at) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->created_at = $created_at;
    }

    // Getters and setters for username
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    // Getters and setters for email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Getters and setters for password
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Getters and setters for role
    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    // Getters and setters for tel
    public function getTel() {
        return $this->tel;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    // Getters and setters for created_at
    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }    


}

?>