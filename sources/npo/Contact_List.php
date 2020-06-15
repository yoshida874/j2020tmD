<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

//1ページのリミット
$limit = 20;
//ページの設定
//デフォルトは1
$page = 1;
$rows = array();
$ERR_STR = '';
$show_mode = '';

function readdata()
{
	global $limit;
	global $rows;
	global $order;
	global $page;
	$obj = new cnpo_inquiry();
	$from = ($page - 1) * $limit;
	$rows = $obj->get_all(false, $from, $limit);
}

readdata();

//--------------------------------------------------------------------------------------
/*!
@brief	ページャーのアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_page_block()
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $limit;
	global $page;
	$retstr = '';
	$obj = new cnpo_inquiry();
	$allcount = $obj->get_all_count(false);
	$ctl = new cpager($_SERVER['PHP_SELF'], $allcount, $limit);
	$smarty->assign('pager_arr', $ctl->get('page', $page));
}


//--------------------------------------------------------------------------------------
/*!
@brief	一覧のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_NPO_inquiry_list()
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $rows;
	$smarty->assign('rows', $rows);
}

//--------------------------------------------------------------------------------------
/*!
@brief	URIのアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_tgt_uri()
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $page;
	$smarty->assign('tgt_uri', $_SERVER['PHP_SELF'] . '?page=' . $page);
}


/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
$smarty->assign('ERR_STR', $ERR_STR);
assign_page_block();
assign_NPO_inquiry_list();
//assign_tgt_uri();

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'npo/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');