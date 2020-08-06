<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_path = '/sources/front/';

if(!isset($_SESSION)){
    session_start();
}

if((!isset($_SESSION['j2020tmD_user']['login_user'])) 
    || (!isset($_SESSION['j2020tmD_user']['user_id']))){
        $login_items = array(
            'item_name'  => 'ログイン/新規登録',
            'item_path'  => 'Login_Page.php'
        );
    }else{
        $login_items = array(
            'item_name'  => 'ログアウト',
            'item_path'  => 'Logout_Page.php'
        );
    }


$header_items = array(
    'マイページ' => $root_path . $sub_path . 'mypage/Userprofile_Page.php',
    'イベント検索' => $root_path . $sub_path . 'Event_Search.php',
    'イベント編集' => $root_path . $sub_path . 'Event_Edit.php',
    'イベント作成' => $root_path . $sub_path . 'Event_Create.php',
    $login_items['item_name'] => $root_path . $sub_path . $login_items['item_path']
);

