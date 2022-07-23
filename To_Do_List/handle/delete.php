<?php

require_once '../inc/connection.php';
if(isset($_GET['id'])){

    $id = (int)$_GET['id'];
    
 $sta= $conn->prepare("delete from toto where id = (:id) ");

    $sta->bindParam(":id",$id,PDO::PARAM_INT);

    $ext= $sta->execute();
    if($sta){
        header("location: ../index.php");
    }

}