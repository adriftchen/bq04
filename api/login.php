<?php include_once "../base.php";
//可同時給會員/管理者 登入用

$db=new DB($_GET['table']);

echo $db->count(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);

switch ($_GET['table']) {
  case 'mem':
    $_SESSION['mem']=$_GET['acc'];
  break;
  
  case 'admin':
    $_SESSION['admin']=$_GET['acc'];
  break;
}

?>