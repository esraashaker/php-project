<?php
try{
    $connection=new PDO('mysql:dbname=marketdb;host=localhost','root','');
}catch (PDOException $exception){
    echo $exception->getMessage();
}

