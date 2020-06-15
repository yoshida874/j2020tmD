<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_path = '/sources/front/';

$header_items = array(
    'マイページ' => $root_path . $sub_path . 'mypage/Userprofile_Page.php',
    '新着イベント' => $root_path . $sub_path . 'Event_Search.php',
    'イベント編集' => $root_path . $sub_path . 'Event_Detail.php',
    'イベント作成' => $root_path . $sub_path . 'Event_Create.php',
    'ログイン' => $root_path . $sub_path . 'Login_Page.php'
);
