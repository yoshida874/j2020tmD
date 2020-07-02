<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
//変数宣言
$smarty->assign("pageFlag", "0");
$smarty->assign('page', $header_items);


$err_array = array();
$err_flag = 0;

$page = 0;
if (
    isset($_GET['page'])
    && cutil::is_number($_GET['page'])
    && $_GET['page'] > 0
) {
    $page = $_GET['page'];
}
$event_member_id = $_GET['iid'];

function regist()
{
    global $event_member_id;
    $dataarr = array();
    $dataarr['event_id'] = (int) $_POST['event_id'];
    $dataarr['event_name'] = (string) $_POST['event_name'];
    $dataarr['NPO_id'] = (int) $_POST['NPO_id'];
    $dataarr['start_age'] = (int) $_POST['start_age'];
    $dataarr['end_age'] = (int) $_POST['end_age'];
    $dataarr['start_event'] = (string) $_POST['start_event'];
    $dataarr['end_event'] = (string) $_POST['end_event'];
    $dataarr['start_recruiting'] = (string) $_POST['start_recruiting'];
    $dataarr['end_recruiting'] = (string) $_POST['end_recruiting'];
    $dataarr['representative'] = (string) $_POST['representative'];
    $dataarr['venue_name'] = (string) $_POST['venue_name'];
    $dataarr['venue_prefecture'] = (string) $_POST['venue_prefecture'];
    $dataarr['venue_city'] = (string) $_POST['venue_city'];
    $dataarr['venue_aza'] = (string) $_POST['venue_aza'];
    $dataarr['event_postcode'] = (string) $_POST['event_postcode'];
    $dataarr['cost'] = (int) $_POST['cost'];
    $dataarr['hash_tag'] = (string) $_POST['hash_tag'];
    $dataarr['content'] = (string) $_POST['content'];
    $dataarr['img'] = (string) $_POST['img'];
    $chenge = new cchange_ex();

    $chenge->update('Event', $dataarr, 'event_id=' . $event_member_id);
    cutil::redirect_exit($_SERVER['PHP_SELF'] . '?iid=' . $event_member_id);
}

function read_data($event_member_id)
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $limit;
    global $rows;
    global $order;
    global $page;
    $obj = new cevent();
    $rows = $obj->get_tgt(false, $event_member_id);
    $smarty->assign('rows', $rows);
}

if (!isset($_POST["func"])) {
    $_POST["func"] = "";
}
read_data($event_member_id);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
if (isset($_POST["func"]) && $_POST["func"] == "confirm") {
    $smarty->display($top_path . $base_name . '_Conf.tmpl');
} elseif (isset($_POST["func"]) && $_POST["func"] == "set") {
    regist();
} else {
    $smarty->display($top_path . $base_name . '.tmpl');
}
