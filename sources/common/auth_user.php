<?php
/********************************

auth_user.php

メンバーログイン認証
認証が必要なページはこのファイルをインクルードする
すでにlibs.phpがインクルードされている必要がある
*複数のサイトが同居または管理者管理と混同しないため
$_SESSIONは多次元配列にする

*********************************/
session_start();
if((!isset($_SESSION['j2020tmD_user']['login_user'])) 
    || (!isset($_SESSION['j2020tmD_user']['user_id']))){
    cutil::redirect_exit("/~j2020tmD/sources/front/Login_Page.php");
}
$user = new cuser();
$row = $user->get_tgt_login(false,$_SESSION['j2020tmD_user']['login_user']);
if($row === false || !isset($row['user_id'])){
    cutil::redirect_exit("/~j2020tmD/sources/front/Login_Page.php");
}
if($row['user_id'] != $_SESSION['j2020tmD_user']['user_id']){
    cutil::redirect_exit("/~j2020tmD/sources/front/Login_Page.php");
}
$_SESSION['j2020tmD_user']['id'] = $row['id'];
function echo_hello_user_name(){
    if(isset($_SESSION['j2020tmD_user']['user_name'])){
        echo $_SESSION['j2020tmD_user']['user_name'];
    }
}


?>