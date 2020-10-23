<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

//1ページのリミット
$limit = 3;
//ページの設定
//デフォルトは1
$page = 1;
$rows = array();
$ERR_STR = '';
$show_mode = '';

if(isset($_GET['search'])){
    $obj = new cevent();
    $_GET['keyword'] = '%'.$_GET['keyword'].'%';
    if($_GET['start_event_date'] == ""){
        $_GET['start_event_date'] = '1900-01-01';
    }
    if($_GET['end_event_date'] == ""){
        $_GET['end_event_date'] = '2030-01-01';
    }
    //end_ageのみ入力されていた時
    if($_GET['start_age'] == "" && !$_GET['end_age'] == ""){
        $_GET['start_age'] = $_GET['end_age'];
    }elseif ($_GET['start_age'] == "") {
        $_GET['start_age'] = 100;
    }
    //start_ageのみ入力されていた時
    if($_GET['end_age'] == "" && !$_GET['start_age'] == 100){
        $_GET['end_age'] = $_GET['start_age'];
    }elseif ($_GET['end_age'] == "") {
        $_GET['end_age'] = 0;
    }
    if($_GET['venue_city'] == ""){
        $_GET['venue_city'] = '%';
    }
    $rows = $obj->get_search(false,$_GET['keyword'],$_GET['start_event_date'],
                            $_GET['end_event_date'],$_GET['start_age'],
                            $_GET['end_age'],$_GET['venue_city']);
}
else{
    readdata();
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
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");

if(isset($_GET['search'])){
    assign_cevent_list();
    $smarty->display($top_path . 'Event_Search' . '.tmpl');
}
else{
    $smarty->display($top_path . $base_name . '.tmpl');
}
