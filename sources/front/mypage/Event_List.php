<?php
//ブックマーク・予約確認・過去に参加したイベントのリスト

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('front/mypage/Event_List.tmpl');
$top_path = 'front/mypage/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
