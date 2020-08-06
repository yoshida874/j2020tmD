<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");



function logout(){
  // セッション変数を全て削除
  $_SESSION = array();
  // セッションクッキーを削除
  if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
  }
  // セッションの登録データを削除
  session_destroy();
}

function delete_user($member_id){
  $chenge = new cchange_ex();
  // $chenge->delete("user","user_id= " . '"' . $member_id . '"');
  $chenge->delete("user","user_id=". '"' . $member_id . '"');
  cutil::redirect_exit("/~j2020tmD/sources/front/Home_Page.php");
}


$user_id = $_SESSION["j2020tmD_user"]["user_id"];
echo $user_id;
logout();
delete_user($user_id);
//セッションを消してからヘッダー出力
require_once("inc_header.php");