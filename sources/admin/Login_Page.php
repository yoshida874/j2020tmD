<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$ERR_STR = "";
$user_id = "";
$user_name = "";

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['j2020tmD_admin']['err']) && $_SESSION['j2020tmD_admin']['err'] != ""){
    $ERR_STR = $_SESSION['j2020tmD_admin']['err'];
}

//このセッションをクリア
$_SESSION['j2020tmD_admin'] = array();

if(isset($_POST['login_user']) && isset($_POST['admin_password'])){
    if(chk_user_login(
        strip_tags($_POST['login_user']),
        strip_tags($_POST['admin_password']))){
        session_start();
        $_SESSION['j2020tmD_admin']['login_user'] = strip_tags($_POST['login_user']);
        $_SESSION['j2020tmD_admin']['user_id'] = $user_id;
        $_SESSION['j2020tmD_admin']['user_name'] = $user_name;
        cutil::redirect_exit("Home_Page.php");
    }
}


function chk_user_login($login_user,$admin_pw){
    global $ERR_STR;
    global $user_id;
    global $user_name;
    $user = new cadmin_user();
    $row = $user->get_tgt_login(false,$login_user);
    if($row === false || !isset($row['user_id'])){
        $ERR_STR .= "ログイン名が不定です。\n";
        return false;
    }
    //暗号化によるパスワード認証
    if(!cutil::pw_check($admin_pw,$row['pw'])){
        $ERR_STR .= "パスワードが違っています。\n";
        return false;
    }
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    return true;
}

$smarty->assign('ERR_STR',$ERR_STR);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
