
<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");


//ユーザープロフィール
$smarty->assign('userId', 'ユーザID');
$smarty->assign('name', '名前');
$smarty->assign('birth', '生年月日');
$smarty->assign('interest', '趣味');
$smarty->assign('numOfFollow', 'フォロー');
$smarty->assign('numOfFollower', 'フォロワー');
$smarty->assign('nameOfChild', '子供の名前');
$smarty->assign('ageOfChild', '子供の年齢');
$smarty->assign('genderOfChild', '子供の性別');
$smarty->assign('introduce', '自己紹介文');


//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('front/mypage/userprofile.tmpl');

?>
