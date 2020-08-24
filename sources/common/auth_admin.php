<?php
/********************************

auth_admin.php

メンバーログイン認証
認証が必要なページはこのファイルをインクルードする
すでにlibs.phpがインクルードされている必要がある
*複数のサイトが同居または管理者管理と混同しないため
$_SESSIONは多次元配列にする

*********************************/
if(!isset($_SESSION)){
    session_start();
}

if((!isset($_SESSION['j2020tmD_admin']['login_user'])) 
    || (!isset($_SESSION['j2020tmD_admin']['user_id']))){
    cutil::redirect_exit("Login_Page.php");
}
$admin = new cadmin_user();
$row = $admin->get_tgt_login(false,$_SESSION['j2020tmD_admin']['login_user']);
if($row === false || !isset($row['user_id'])){
    cutil::redirect_exit("Login_Page.php");
}
if($row['user_id'] != $_SESSION['j2020tmD_admin']['user_id']){
    cutil::redirect_exit("Login_Page.php");
}

function echo_hello_user_name(){
    if(isset($_SESSION['j2020tmD_admin']['user_name'])){
        echo $_SESSION['j2020tmD_admin']['user_name'];
    }
}


?>