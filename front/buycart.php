<?php

//判斷有無已加入的商品
if(isset($_GET['goods'])){
  $_SESSION['cart'][$_GET['goods']]=$_GET['qt'];
}

//判斷是否為會員
if(empty($_SESSION['mem'])){
  to("../index.php?do=login");
  exit();
}

?>
<h2 class="ct"><?=$_SESSION['mem'];?>的購物車</h2>

<?php
if(empty($_SESSION['cart'])){
  echo "您目前尚未選購任何商品";
  exit();
}

?>
<table class="all">
  <tr class="tt ct">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小計</td>
    <td>刪除</td>
  </tr>
<?php
  foreach ($_SESSION['cart'] as $id=>$qt) {
    $g=$Goods->find($id);
  
?>

<tr class="pp ct">
  <td><?=$g['num'];?></td>
  <td><?=$g['name'];?></td>
  <td><?=$qt;?></td>
  <td><?=$g['quota'];?></td>
  <td><?=$g['price'];?></td>
  <td><?=$qt*$g['price'];?></td>
  <td><img src="icon/0415.jpg" alt=""></td>
  </tr>
<?php

}
?>
</table>
<div class="ct">
  <a href="index.php"><img src="icon/0411.jpg" alt=""></a>
  <a href="?do=checkout"><img src="icon/0412.jpg" alt=""></a>
</div>