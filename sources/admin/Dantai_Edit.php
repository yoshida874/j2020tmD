<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_admin.php");
//変数宣言
$smarty->assign("pageFlag","0");
$smarty->assign('page', $header_items);


$err_array = array();
$err_flag = 0;

$page = 0;
if(isset($_GET['page'])
	&& cutil::is_number($_GET['page'])
	&& $_GET['page'] > 0){
	$page = $_GET['page'];
}
$member_id = $_GET['id'];

function regist(){
	global $member_id;
	$dataarr = array();
	$dataarr['NPO_id'] = (string)$_POST['NPO_id'];
	$dataarr['group_name'] = (string)$_POST['group_name'];
	$dataarr['NPO_representative'] = (string)$_POST['NPO_representative'];
	$dataarr['NPO_mailaddress'] = (string)$_POST['NPO_mailaddress'];
	$dataarr['NPO_prefecture'] = (string)$_POST['NPO_prefecture'];
	$dataarr['NPO_city'] = (string)$_POST['NPO_city'];
	$dataarr['NPO_aza'] = (string)$_POST['NPO_aza'];
	$dataarr['NPO_postcode'] = (string)$_POST['NPO_postcode'];
	$dataarr['NPO_purpose'] = (string)$_POST['NPO_purpose'];
	$chenge = new cchange_ex();

	$chenge->update('NPO_group',$dataarr,'NPO_ID=' . $member_id);
	cutil::redirect_exit($_SERVER['PHP_SELF'] . '?id=' . $member_id);
}

function read_data($member_id)
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $limit;
	global $rows;
	global $order;
	global $page;
	$obj = new cnpo_group();
  $rows = $obj->get_tgt(false, $member_id);
  $smarty->assign('rows', $rows);
}



if(!isset($_POST["func"])){
	$_POST["func"] = "";
}

read_data($member_id);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
if(isset($_POST["func"]) && $_POST["func"] == "confirm"){
	$smarty->display($top_path . $base_name . '_Conf.tmpl');
}elseif(isset($_POST["func"]) && $_POST["func"] == "set"){
	regist();
}else{
$smarty->display($top_path . $base_name . '.tmpl');
}
