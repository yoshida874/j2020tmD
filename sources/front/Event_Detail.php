<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$rows = array();
$NPO = array();
$show_mode = '';

if(!isset($_POST["func"])){
	$_POST["func"] = "";
}
else{
    if($_POST["func"] == "del"){
        deljob();
    }
}

if(isset($_GET['iid'])){
    readdata($_GET['iid']);
}

//曜日リスト
$week = array('日', '月', '火', '水', '木', '金', '土');
if(!empty($rows)){
    //参加者
    $obj = new cparticipant();
    //イベントに参加している人数
    $participant_count = $obj->get_event_user(false,$rows["event_id"]);
    //すでにイベントに参加登録しているか
    if(isset($_SESSION['j2020tmD_user']['id'])){
        $participant = $obj->get_event_participant(false,$_SESSION['j2020tmD_user']['id'],$rows["event_id"]);
    }
    else{
        $participant = $obj->get_event_participant(false,0,$rows["event_id"]);
    }
    if($rows["NPO_id"] != ''){
        //NPO団体情報取得
        $obj = new cnpo_group();
        $NPO = $obj->get_tgt(false,$rows["NPO_id"]);
    }
    //曜日
    $date = new DateTime($rows["start_event_date"]);
    $date = $date->format('w');
    $rows = $rows + $participant + $participant_count  + $NPO + array('start_event_week'=>$week[$date]);
}

//--------------------------------------------------------------------------------------
/*!
@brief	データ読み込み
@return	なし
*/
//--------------------------------------------------------------------------------------
function readdata($id)
{
    global $rows;
    $obj = new cevent();
    $rows = $obj->get_tgt(false,$id);
}

//--------------------------------------------------------------------------------------
/*!
@brief	削除
@return	なし
*/
//--------------------------------------------------------------------------------------
function deljob()
{
    $chenge = new cchange_ex();
    if ($_POST['param'] > 0) {
        $chenge->delete("participant", "event_id=" . $_POST['param'] . " and user_id=" . (int)$_SESSION['j2020tmD_user']['id']);
    }
}

//--------------------------------------------------------------------------------------
/*!
@brief	Eventのアサイン
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