<?php
#include_once("sql.php");
if ($_SESSION['user_id'] == "on"){
    include_once("user.php");
} else {
    echo '
<form id="f">
  <div class="form-group">
    <label for="email">tên tài khoản:</label>
    <input type="text" class="form-control" id="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button id="login" type="button" class="btn btn-primary">đang nhập</button>
  <button id="logins" type="button" class="btn btn-primary">đang ký</button>
</form>
';
    
}
