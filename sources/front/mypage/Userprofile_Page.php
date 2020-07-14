
<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");

function read_data($member_id)
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $limit;
	global $rows;
	global $order;
	global $page;
	$obj = new cuser();
  $rows = $obj->get_tgt_uid(false,$member_id);
  $smarty->assign('rows', $rows);
}
//echo $_SESSION['j2020tmD_user']['user_id'];
read_data($_SESSION['j2020tmD_user']['user_id']);
//ユーザープロフィール
$smarty->assign('userId', $rows["user_id"]);
$smarty->assign('name', $rows["user_name"]);
$smarty->assign('birth', $rows["birthday"]);
$smarty->assign('interest', $rows["hobby"]);
$smarty->assign('numOfFollow', 'フォロー');
$smarty->assign('numOfFollower', 'フォロワー');
$smarty->assign('nameOfChild', '子供の名前');
$smarty->assign('ageOfChild', '子供の年齢');
$smarty->assign('genderOfChild', '子供の性別');
$smarty->assign('introduce', $rows["profile_content"]);

$smarty->assign('page', $header_items);


//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/mypage/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');

?>
