<?php
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//変数宣言
$smarty->assign("pageFlag","0");
//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/Blacklist_Edit.tmpl');
?>
