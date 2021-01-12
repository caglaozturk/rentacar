<?php
require_once "config/global.php";

class Car extends Connection{
    public function getAllCars(){
        $cars = $this->conn->query("SELECT * FROM cars")->fetchAll(PDO::FETCH_OBJ);
        return $cars;
    }

    public function getOneCar($id){
        $car = $this->conn->query("SELECT * FROM cars WHERE id=".$id)->fetch(PDO::FETCH_OBJ);
        return $car;
    }

    public function carUpdate($car){
        global $file_path;
        $sth = $this->conn->prepare("UPDATE cars SET name=:name, info=:info, stock=:stock, status=:status WHERE id=:id");
        $sth->execute(array(
            'name'      => $_POST['name'],
            'info'      => $_POST['description'],
            'stock'     => $_POST['stock'],
            'status'    => $_POST['status'],
            'id'        => $_POST['car_id']
        ));

        if($_FILES['project_file']['tmp_name'] != ""){
            $ext = end(explode(".", $_FILES["project_file"]["name"]));
            $filehash = uniqid("car_");
            $filename = $filehash . "." . $ext;            
            move_uploaded_file($_FILES["project_file"]["tmp_name"], $file_path . $filename);            
            if(file_exists($file_path . $filename)){
                $dosya_yukleme = $this->conn->prepare("UPDATE cars SET pic = ? WHERE id = ?");
                $dosya_yukleme->execute([$filename, $_POST["car_id"]]);
            }
        }
    }

    public function carAdd(){
        global $file_path;
        $sth = $this->conn->prepare("INSERT INTO cars SET name=:name, info=:info, stock=:stock, status=:status");
        $sth->execute(array(
            'name'      => $_POST['name'],
            'info'      => $_POST['description'],
            'stock'     => $_POST['stock'],
            'status'    => $_POST['status']
        ));

        $response = "warning";
        if($_FILES['project_file']['tmp_name'] != ""){
            $ext = end(explode(".", $_FILES["project_file"]["name"]));
            $filehash = uniqid("car_");
            $filename = $filehash . "." . $ext;            
            move_uploaded_file($_FILES["project_file"]["tmp_name"], $file_path . $filename);            
            if(file_exists($file_path . $filename)){
                $end_add_id =  $this->conn->lastInsertId();
                $dosya_yukleme = $this->conn->prepare("UPDATE cars SET pic = ? WHERE id = ?");
                $dosya_yukleme->execute([$filename, $end_add_id]);
                $response = ($dosya_yukleme->rowCount()>0) ? 'success' : 'danger';
            }
        }
        return $response;
    }

    public function imgDelete($img_name){
        global $file_path;
        if(file_exists($file_path.$img_name)){
            unlink($file_path.$img_name);
        }
    }

    public function carDelete($id){
        $sth = $this->conn->exec("DELETE FROM cars WHERE id=".$id);
        return ($sth) ? true : false;
    }
}