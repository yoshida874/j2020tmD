<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$ERR_STR = "";
$user_id = "";
$user_name = "";
$id = "";

//inc_headerでsession_start()しているため
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['j2020tmD_user']['err']) && $_SESSION['j2020tmD_user']['err'] != ""){
    $ERR_STR = $_SESSION['j2020tmD_user']['err'];
}

//このセッションをクリア
$_SESSION['j2020tmD_user'] = array();

if(isset($_POST['login_user']) && isset($_POST['user_password'])){
    if(chk_user_login(
        strip_tags($_POST['login_user']),
        strip_tags($_POST['user_password']))){
        session_start();
        $_SESSION['j2020tmD_user']['login_user'] = strip_tags($_POST['login_user']);
        $_SESSION['j2020tmD_user']['user_id'] = $user_id;
        $_SESSION['j2020tmD_user']['user_name'] = $user_name;
        $_SESSION['j2020tmD_user']['id'] = $id;
        cutil::redirect_exit("Home_Page.php");
    }
}


function chk_user_login($login_user,$user_pw){
    global $ERR_STR;
    global $user_id;
    global $user_name;
    global $id;
    $user = new cuser();
    $row = $user->get_tgt_login(false,$login_user);
    if($row === false || !isset($row['user_id'])){
        $ERR_STR .= "ログイン名が不定です。\n";
        return false;
    }
    //暗号化によるパスワード認証
    //if($user_pw != $row['pw']){
    if(!cutil::pw_check($user_pw,$row['pw'])){
        $ERR_STR .= "パスワードが違っています。\n";
        return false;
    }
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $id = $row['id'];
    return true;
}

$smarty->assign('ERR_STR',$ERR_STR);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
