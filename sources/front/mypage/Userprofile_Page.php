
<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");

$user = '';
function read_data_user($member_id)
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $limit;
	global $user;
	global $order;
	global $page;
	$obj = new cuser();
  $user = $obj->get_tgt_uid(false,$member_id);
  //$smarty->assign('rows', $rows);
}

function read_data_children($member_id)
{
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $limit;
	global $children;
	global $order;
	global $page;
	$obj = new cuser_children();
  $children = $obj->get_tgt(false,$member_id);
  //$smarty->assign('rows', $rows);
}

function check_sex($sex)
{
  if($sex == 0){
    return "不明";
  }elseif ($sex == 1) {
    return "男";
  }elseif ($sex == 2){
    return "女";
  }else{
    return "err";
  }
}

//var_dump($_SESSION['j2020tmD_user']);
read_data_user($_SESSION['j2020tmD_user']['user_id']);
read_data_children($user['id']);

//ユーザープロフィール
$smarty->assign('userId', $user["user_id"]);
$smarty->assign('name', $user["user_name"]);
$smarty->assign('birth', $user["birthday"]);
$smarty->assign('interest', $user["hobby"]);
$smarty->assign('img_name', $user["profile_img"]);
$smarty->assign('numOfFollow', 'フォロー');
$smarty->assign('numOfFollower', 'フォロワー');
$smarty->assign('nameOfChild', $children["child_name"]);
$smarty->assign('ageOfChild', $children["age"]);
$smarty->assign('genderOfChild', check_sex($children["sex"]));
$smarty->assign('introduce', $user["profile_content"]);

$smarty->assign('page', $header_items);


//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/mypage/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');

?>
