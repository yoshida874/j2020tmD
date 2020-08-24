<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_path = '/sources/admin/';

$header_items = array(
    'ホーム' => $root_path . $sub_path . 'Home_Page.php',
    '管理者一覧' => $root_path . $sub_path . 'Admin_List.php',
    'ユーザー一覧' => $root_path . $sub_path . 'User_List.php',
    'イベント一覧' => $root_path . $sub_path . 'Event_List.php',
    '団体一覧' => $root_path . $sub_path . 'Dantai_List.php',
    'お問い合わせ一覧' => $root_path . $sub_path . 'Inquiry_List.php',
    'ブラックリスト' => $root_path . $sub_path . 'Blacklist_List.php',
    'ログアウト' => $root_path . $sub_path . 'Login_Page.php'
);
