<?php
//ブックマーク・予約確認・過去に参加したイベントのリスト

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('front/mypage/event_list.tmpl');

?>
