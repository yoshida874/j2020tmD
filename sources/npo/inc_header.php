<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_path = '/sources/npo/';

$header_items = array(
    'ホーム' => $root_path . $sub_path . 'Home_Page.php',
    'プロフィール' => $root_path . $sub_path . 'Profile_Create.php',
    '管理者' => $root_path . $sub_path . 'Admin_List.php',
    'お問い合わせ' => $root_path . $sub_path . 'Inquiry_List.php',
    'イベント作成' => $root_path . $sub_path . 'Event_Create.php',
    'イベント一覧' => $root_path . $sub_path . 'Event_List.php',
    'ログイン'     => $root_path . $sub_path . 'Login_Page.php'
);
