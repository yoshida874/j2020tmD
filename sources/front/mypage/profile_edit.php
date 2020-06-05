<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$header_items = array(
    'マイページ' => './mypage/userprofile.php',
    '新着イベント' => './event_search.php',
    'イベント編集' => './event_detail.php',
    'イベント作成' => './event_create.php',
    'ログイン' => './login.php'
);

$smarty->assign('page', $header_items);

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('front/mypage/profile_edit.tmpl');
