<?php include_once "../base.php";

$Mem->save($_POST); /* 表單有帶id過來 */

// $mem=$Mem->find($_POST['id']); /* 先撈資料比對 */

// $mem['name']=$_POST['name'];
// $mem['tel']=$_POST['tel'];
// $mem['addr']=$_POST['addr'];
// $mem['email']=$_POST['email'];

// $Mem->save($mem);

to("../backend.php?do=mem");

?>