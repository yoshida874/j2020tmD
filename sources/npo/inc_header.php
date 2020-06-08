<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$root_path = '/~j2020tmD';
$sub_dir = '/sources/npo';

$header_items = array(
    'プロフィール' => $root_path . $sub_dir . '/profile.php',
    '管理者' => $root_path . $sub_dir . '/admin_us.php',
    'お問い合わせ' => $root_path . $sub_dir . '/contact_us.php',
    'イベント作成' => $root_path . $sub_dir . '/event_create.php',
    'イベント一覧' => $root_path . $sub_dir . '/event_us.php'
);
