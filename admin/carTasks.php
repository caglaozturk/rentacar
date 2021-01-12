<?php
require_once "config/global.php";

$carObj = new Car;

if(isset($_POST['submit']) || isset($_GET['task'])){
    switch($_REQUEST['task']){
        case 'carEdit':
            $carObj->carUpdate($_POST);
            redirect('listCar.php');
            break;
        case 'carDelete':
            $id = $_GET['id'];
            $img_name = $_GET['img_name'];
            $carObj->imgDelete($img_name);      
            echo $carObj->carDelete($id);
            break;
        case 'carAdd':
            $response = $carObj->carAdd($_POST);
            redirect('addCar.php?durum='.$response);
            break;
        default:
            redirect('listCar.php');
    }
}else{
    redirect('listCar.php');
}