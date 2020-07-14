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
$black_list_id = $_GET['iid'];

function regist()
{
    global $black_list_id;
    $dataarr = array(
        'id'              => (int) $_POST['id'],
        'user_id'         => (string) $_POST['user_id'],
        'degree_risk'     => (string) $_POST['degree_risk'],
        'reason'          => (string) $_POST['reason'],
        'report_number'   => (int) $_POST['report_number'],
    );
    $chenge = new cchange_ex();

    $chenge->update('black_list', $dataarr, 'id=' . $black_list_id);
    cutil::redirect_exit($_SERVER['PHP_SELF'] . '?iid=' . $black_list_id);
}

function read_data($black_list_id)
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $limit;
    global $rows;
    global $order;
    global $page;
    $obj = new cblack_list();
    $rows = $obj->get_tgt(false, $black_list_id);
    $smarty->assign('rows', $rows);
}

if (!isset($_POST["func"])) {
    $_POST["func"] = "";
}
read_data($black_list_id);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
if (isset($_POST["func"]) && $_POST["func"] == "func") {
    $smarty->display($top_path . $base_name . '_Conf.tmpl');
} elseif (isset($_POST["func"]) && $_POST["func"] == "set") {
    regist();
} else {
    $smarty->display($top_path . $base_name . '.tmpl');
}

