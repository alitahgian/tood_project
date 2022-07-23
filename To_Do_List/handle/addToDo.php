<?php

require_once '../inc/connection.php';

if(isset($_POST['submit'])){

    //   $id =(int) $_POST['id'];
    $title = $_POST['title'];
    
    
    $stm = $conn->prepare("INSERT INTO toto (`title`) values (:title)");
    $stm->bindParam(":title",$title,PDO::PARAM_STR);
      $rest= $stm->execute();
    if($rest){
        
        header("location:../index.php");
    }
    

}

    


