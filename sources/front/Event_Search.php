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

if(isset($_GET['keyword']) && $_GET['keyword'] != ''){
    $obj = new cevent();
    $_GET['keyword'] = '%'.$_GET['keyword'].'%';
    $rows = $obj->get_search(false,$_GET['keyword']);
}
else{
    readdata();
}

//--------------------------------------------------------------------------------------
/*!
@brief	データ読み込み
@return	なし
*/
//--------------------------------------------------------------------------------------
function readdata()
{
    global $limit;
    global $rows;
    global $order;
    global $page;
    $obj = new cevent();
    $from = ($page - 1) * $limit;
    $rows = $obj->get_all(false, $from, $limit);
}

//--------------------------------------------------------------------------------------
/*!
@brief	一覧のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_cevent_list()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $rows;
    $smarty->assign('rows', $rows);
}

assign_cevent_list();
//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
