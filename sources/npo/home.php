<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$header_items = array(
    'プロフィール' => './profile.php',
    '管理者' => './admin_us.php',
    'お問い合わせ' => './contact_us.php',
    'イベント作成' => './event_create.php',
    'イベント一覧' => './event_us.php'
);

$smarty->assign('page', $header_items);

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('npo/home.tmpl');
