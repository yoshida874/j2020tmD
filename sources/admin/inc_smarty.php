<?php
//Smartyの読み込み
require_once('../../Smarty/libs/SmartyBC.class.php');
//Smartyを構築
$smarty = new SmartyBC();
//Smartyの各ディレクトリを設定
$smarty->template_dir = '../../Smarty/templates/';
$smarty->compile_dir = '../../Smarty/templates_c/';
$smarty->config_dir = '../../Smarty/config/';
$smarty->cache_dir = '../../Smarty/cache/';
$smarty->php_handling = Smarty::PHP_ALLOW;
?>
