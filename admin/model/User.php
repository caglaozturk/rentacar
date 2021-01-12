<?php
require_once "config/global.php";

class User extends Connection{
    public function isLoggedIn(){
        return (isset($_SESSION['user'])) ? true : false;
    }

    public function getAllUsers(){
        $users = $this->conn->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);
        return $users; 
    }

    public function getOneUser($userId){
        $user = $this->conn->prepare("SELECT * FROM users WHERE id =:id");
        $user->execute(array('id' => $userId));
        $response = $user->fetch(PDO::FETCH_OBJ);
        return $response;
    }

    public function getAdminUser(){
        $user = $this->conn->query("SELECT * FROM users WHERE username='admin'")->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function userUpdate($userId,$username,$email,$fullname,$userPosition){
        $sth = $this->conn->prepare("UPDATE users SET username=?, email=?, fullname=?, user_position=? WHERE id=$userId");
        $response = $sth->execute(array($username, $email, $fullname,$userPosition));
        if($response)
            return true;
        return false;
    }

    public function userDelete($id){
        $sth = $this->conn->exec("DELETE FROM users WHERE id=" . $id);
        return ($sth) ? true : false;
    }

    public function login($username, $password, $email){        
        $sth = $this->conn->prepare("SELECT * FROM users WHERE (username=:username OR email=:email) AND password=:password LIMIT 1");
        $sth->execute(array('username'=>$username, 'email'=>$email, 'password'=>$password));
        $response = $sth->fetch(PDO::FETCH_ASSOC);
        if($sth->rowCount()>0){
            $_SESSION['user'] = $response['id'];
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        session_destroy();
        unset($_SESSION['user']);
        return true;
    }
}