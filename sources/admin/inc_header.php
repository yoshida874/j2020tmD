<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_dir = '/sources/admin';

$header_items = array(
    '管理者HOME' => $root_path . $sub_dir . '/KHome.php',
    '管理者一覧' => $root_path . $sub_dir . '/adminList.php',
    'ユーザー一覧' => $root_path . $sub_dir . '/userList.php',
    'イベント一覧' => $root_path . $sub_dir . '/Event_List.php',
    '団体一覧' => $root_path . $sub_dir . '/Dantai_List.php',
    'お問い合わせ一覧' => $root_path . $sub_dir . '/inquiryList.php',
    'ブラックリスト' => $root_path . $sub_dir . '/Blacklist_List.php',
    'ログイン' => $root_path . $sub_dir . '/KLogin.php'
);
