<?php

    require_once '../inc/connection.php';
    if(isset($_GET['id'])){

    $id = (int)$_GET['id'];
     $name = $_GET['name'];
        
    $stm=  $conn->prepare("update toto set status = (:status) where id =(:id)");

    $stm->bindParam(":status", $name,PDO::PARAM_STR);
    $stm->bindParam(":id", $id,PDO::PARAM_INT);
    $rest=$stm->execute();
    if($rest)
    {
        header("location: ../index.php");
    }

    }