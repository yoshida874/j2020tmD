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
    $dataarr = array(
        'event_id'              => (int) $_POST['event_id'],
        'event_name'            => (string) $_POST['event_name'],
        'NPO_id'                => (int) $_POST['NPO_id'],
        'start_age'             => (int) $_POST['start_age'],
        'end_age'               => (int) $_POST['end_age'],
        'start_event_date'      => (string) $_POST['start_event_date'],
        'start_event_time'      => (string) $_POST['start_event_time'],
        'end_event_date'        => (string) $_POST['end_event_date'],
        'end_event_time'        => (string) $_POST['end_event_time'],
        'start_recruiting_date' => (string) $_POST['start_recruiting_date'],
        'start_recruiting_time' => (string) $_POST['start_recruiting_time'],
        'end_recruiting_date'   => (string) $_POST['end_recruiting_date'],
        'end_recruiting_time'   => (string) $_POST['end_recruiting_time'],
        'representative'        => (string) $_POST['representative'],
        'venue_name'            => $_POST['venue_name'],
        'venue_prefecture'      => (string) $_POST['venue_prefecture'],
        'venue_city'            => (string) $_POST['venue_city'],
        'venue_aza'             => (string) $_POST['venue_aza'],
        'event_postcode'        => (string) $_POST['event_postcode'],
        'cost'                  => (int) $_POST['cost'],
        'hash_tag'              => (string) $_POST['hash_tag'],
        'content'               => (string) $_POST['content'],
        'img'                   => (string) $_POST['img']
    );
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
$top_path = 'npo/';
$base_name = basename(__FILE__, ".php");
if (isset($_POST["func"]) && $_POST["func"] == "confirm") {
    $smarty->display($top_path . $base_name . '_Conf.tmpl');
} elseif (isset($_POST["func"]) && $_POST["func"] == "set") {
    regist();
} else {
    $smarty->display($top_path . $base_name . '.tmpl');
}
