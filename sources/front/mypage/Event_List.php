<?php
//ブックマーク・予約確認・過去に参加したイベントのリスト

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");

$smarty->assign('page', $header_items);

//1ページのリミット
$limit = 20;
//ページの設定
//デフォルトは1
$page = 1;
$rows = array();
$ERR_STR = '';
$show_mode = '';
$user_id = $_SESSION['j2020tmD_user']['id'];

switch($_GET['iid']){
    case 'conf':
        $obj = new cparticipant();
        $from = ($page - 1) * $limit;
        $rows = $obj->get_conf_event(false, $from, $limit, $user_id);
    break;
    case 'edit':
        echo date("Y/m/d");
    break;
    case 'past':
        $obj = new cparticipant();
        $from = ($page - 1) * $limit;
        $rows = $obj->get_past_event(false, $from, $limit, $user_id);
    break;
}


//曜日リスト
$week = array('日', '月', '火', '水', '木', '金', '土');
if(!empty($rows)){
    foreach($rows as $index=>$value){
        //参加人数挿入
        $obj = new cparticipant();
        $participant = $obj->get_event_user(false,$value["event_id"]);
        //曜日挿入
        $date = new DateTime($value["start_event_date"]);
        $date = $date->format('w');
        $rows[$index] = $value + $participant + array('start_event_week'=>$week[$date]);
    }
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
$top_path = 'front/mypage/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');
