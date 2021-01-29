<?php include_once "../base.php";
//從api/add_goods.php複製

if(!empty($_FILES['img']['tmp_name'])){
  $_POST['img']=$_FILES['img']['name'];
}else{
  $goods=$Goods->find($_POST['id']);
  $_POST['img']=$goods['img'];
}

// print_r($_POST);

$Goods->save($_POST);

to("../backend.php?do=th");


?>