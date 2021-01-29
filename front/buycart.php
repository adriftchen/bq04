<?php
//若顯示出現 "header has already been declared..." 重複發送錯誤
//將此段程式碼移到index.php，並在最外面加上一層判斷:
// <?php include_once "base.php";

// if(isset($_GET['do']) && $_GET['do']=='buycart'){

//     if(isset($_GET['goods'])){
//         $_SESSION['cart'][$_GET['goods']]=$_GET['qt'];
//     }

//     if(empty($_SESSION['mem'])){
//         to("../index.php?do=login");
//         exit();
//     }
// }


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
  <td><img src="icon/0415.jpg" onclick="delItem(<?=$id;?>)"></td>
  </tr>
<?php

}
?>
</table>
<div class="ct">
  <a href="index.php"><img src="icon/0411.jpg" alt=""></a>
  <a href="?do=checkout"><img src="icon/0412.jpg" alt=""></a>
</div>

<script>
function delItem(id){
  $.post("api/del_item.php",{id},function(){
    // location.reload();
    //用reload最後一筆商品會刪不掉，改href
    location.href="?do=buycart";
  })
}
</script>