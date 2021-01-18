<h2>管理登入</h2>
<!-- 從front/login h2以下複製過來 -->
<!-- table.all>tr*3>td.tt+td.pp>input -->
<table class="all">
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td class="tt">驗證碼</td>
    <td class="pp"><input type="text" name="ans" id="ans"></td>
  </tr>
</table>
<div class="ct">
  <button onclick="login()">確定</button>
</div>