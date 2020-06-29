<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
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

//if(isset($_GET['mid'])
//cutilクラスのメンバ関数をスタティック呼出
	//&& cutil::is_number($_GET['mid'])
	//&& $_GET['mid'] > 0){cutil
	//$member_id = $_GET['mid'];
//}


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

read_data($member_id);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
