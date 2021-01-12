<?php

require_once "config/global.php";

$usrObj = new User;

if(isset($_POST['submit']) || isset($_GET['task'])){
    switch($_REQUEST['task']){
        case 'login':
            $username = $_POST['username'];
            $password = md5(sha1($_POST['password']));
            $email    = $_POST['username'];            
            if($usrObj->login($username, $password, $email))    redirect('index.php');
            else    redirect('login.php?error=login');
            break; 
        case 'userEdit' :
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $fullname = $_POST['fullname'];
            $position = $_POST['position'];             
            $usrObj->userUpdate($_GET["userId"],$username,$email,$fullname,$position);
            redirect('listUser.php');
            break;
        case 'userDelete':
            $id = $_GET['id'];
            echo $usrObj->userDelete($id);
            break;
        case 'logout':
            $usrObj->logout();
            redirect('login.php');
            break;
        default:
            redirect('login.php');
    }
}else{
    redirect('login.php');
}