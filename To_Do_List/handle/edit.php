<?php

require_once '../inc/connection.php';

if(isset($_POST['submit'])){

    $id =(int) $_GET['id'];
    $title = $_POST['title'];
    
    $stm = $conn->prepare("update toto set `title` = (:title) where id =(:id)");
    $stm->bindParam(":title",$title,PDO::PARAM_STR);
    $stm->bindParam(":id",$id,PDO::PARAM_INT);
     $rest= $stm->execute();
    if($rest){
        
        header("location:../index.php");
    }
    

}
