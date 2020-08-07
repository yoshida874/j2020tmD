<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$rows = array();

if(!isset($_POST["func"])){
	$_POST["func"] = "";
}

if(isset($_GET['iid'])){
    readdata($_GET['iid']);
}

//曜日リスト
$week = array('日', '月', '火', '水', '木', '金', '土');
if(!empty($rows)){
    //参加者
    $obj = new cparticipant();
    $participant = $obj->get_event_user(false,$rows["event_id"]);
    //曜日
    $date = new DateTime($rows["start_event_date"]);
    $date = $date->format('w');
    $rows = $rows + $participant +array('start_event_week'=>$week[$date]);
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
@brief	userのイベント参加
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist_user()
{
    global $CMS_COMMON_INCLUDE_DIR;
    require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");
    $dataarr = array();
    $dataarr['user_id'] = (int)$_SESSION['j2020tmD_user']['id'];
    $dataarr['event_id'] = (int) $_POST['param'];
    $dataarr['child_id'] = 1;
    $change = new cchange_ex();

    // 値追加
    $change->insert('participant', $dataarr);
    cutil::redirect_exit($_SERVER['PHP_SELF'].'?iid='.$_GET['iid']);

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
if(isset($_POST["func"]) && $_POST["func"] == "func"){
    regist_user();
}else{
    $smarty->display($top_path . $base_name . '.tmpl');
}