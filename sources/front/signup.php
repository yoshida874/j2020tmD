<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = 'http://wiz.developluna.jp/~j2020tmD/';
$sub_dir = 'sources/front/';

$header_items = array(
    'マイページ' => $root_path . $sub_dir . 'mypage/userprofile.php',
    '新着イベント' => $root_path . $sub_dir . 'event_search.php',
    'イベント編集' => $root_path . $sub_dir . 'event_detail.php',
    'イベント作成' => $root_path . $sub_dir . 'event_create.php',
    'ログイン' => $root_path . $sub_dir . 'login.php'
);

$smarty->assign('page', $header_items);

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('front/signup.tmpl');
