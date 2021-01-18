<?php
include_once "../base.php";

// echo $Mem->count(['acc'=>$_GET['acc']]);

$acc=$_GET['acc'];

$chk=$Mem->count(['acc'=>$acc]); /* 無帳號>0 有帳號>1 */

echo $chk;
?>