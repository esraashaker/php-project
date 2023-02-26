<?php
session_start();
//First Connect to DATABASE
require_once "connection.php";
//Products Data
if(!empty($_SESSION['username'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $pro_name=$_POST['product_name'];
        $pro_brand=$_POST['product_brand'];
        $exp_date=$_POST['expiry_date'];
        $imageArray=$_FILES['product_image'];
        if(isset($pro_name,$pro_brand,$exp_date)){
            if(!empty($imageArray)){
                $filename=$imageArray['name'];
                $fileTemp=$imageArray['tmp_name'];
                $explode=explode('.',$filename);
                $fileExt=end($explode);
                $allowedExt=['jpg','png','jpeg'];
                if(in_array($fileExt,$allowedExt)){
                    move_uploaded_file($fileTemp,'../images/'.$filename);
                    //prepare SQL statement protect you CODE FROM[SQL injection]
                    $insert=$connection->prepare('INSERT INTO products (product_name,product_brand,product_image,expiry_date)VALUES (?,?,?,?)');
                    $insert->execute([$pro_name,$pro_brand,$filename,$exp_date]);
                    header('Location: ../index.php');
                }else{
                    echo "Sorry! Not Allowed to upload that file";
                }
            }
        }
        else{
           header('Location: index.php');
        }
    }
}else{
    header('Location: login.php');
}