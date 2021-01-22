<?php include "../base.php";

$_POST['pr']=serialize($_POST['pr']);

$Admin->save($_POST);

to("../backend.php?do=main");
// to("../backend.php?do=main");
//array to string conversion....錯誤訊息
//陣列要先轉文字才能存到db -->用serialize()



?>