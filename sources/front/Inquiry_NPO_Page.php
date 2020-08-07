<?php
//問い合わせ画面

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");


$smarty->assign('page', $header_items);


function regist()
{
    $dataarr = array();
    $dataarr['content'] = (string) $_POST['Content'];
    $dataarr['user_id'] = (string) $_SESSION["j2020tmD_user"]["id"];
    $dataarr['user_name'] = (string) $_SESSION["j2020tmD_user"]["user_name"];
    $dataarr['event_id'] = (int) $_GET['event_id'];
    $dataarr['NPO_id'] = (int) $_GET['NPO_id'];
    $dataarr['reply_address'] = (string) $_POST['mailaddress'];
    $change = new cchange_ex();

    // 値追加
    $mid = $change->insert('NPO_inquiry', $dataarr);
    cutil::redirect_exit($_SERVER['PHP_SELF']);
}

if(!isset($_POST["func"])){
	$_POST["func"] = "";
}



//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
if(isset($_POST["func"]) && $_POST["func"] == "confirm"){
	$smarty->display($top_path . $base_name . '_Conf.tmpl');
}elseif(isset($_POST["func"]) && $_POST["func"] == "set"){
	regist();
}else{
$smarty->display($top_path . $base_name . '.tmpl');
}