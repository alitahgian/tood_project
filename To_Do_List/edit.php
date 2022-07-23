<?php
require_once 'inc/header.php';
require_once 'App.php';
require_once 'inc/Reques.php';
require_once 'inc/connection.php';

    if(isset($_GET['id'])){

        $id = (int) $_GET['id'];

  $stm = $conn->prepare("select * from toto where id = (:id)");
  $stm->bindParam(":id",$id,PDO::PARAM_INT);
  $rest= $stm->execute();
  if($rest){
       
      $cart= $stm->fetch(PDO::FETCH_ASSOC);
  }else{

    header("loction:index.php");

  }

    }

?>

<body class="container w-50 mt-5">
    <form action="handle/edit.php?id=<?=$cart ['id']?>" method="post">
            <textarea type="text" class="form-control"  name="title" id="" placeholder="enter your note here"><?=$cart['title']?></textarea>
            <div class="text-center">
                <button type="submit" name="submit" class="form-control text-white bg-info mt-3 " >Update</button>
            </div>  
    </form>
</body>
</html>