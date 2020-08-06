<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");


if(!isset($_SESSION)){
    session_start();
}
$_SESSION = array();
// セッションクッキーを削除
if (isset($_COOKIE["PHPSESSID"])) {
  setcookie("PHPSESSID", '', time() - 1800, '/');
}
// セッションの登録データを削除
session_destroy();

//セッションを消してからヘッダー出力
require_once("inc_header.php");
$smarty->assign('page', $header_items);
//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
