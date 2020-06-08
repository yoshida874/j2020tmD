<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
//変数宣言
$smarty->assign("pageFlag","0");
$smarty->assign('page', $header_items);
//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/Dantai_Delete.tmpl');
?>
