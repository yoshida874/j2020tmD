<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$member_id = 0;
$err_array = array();
$err_flag = 0;

$pages = 0;
if (
    isset($_GET['pages'])
    && cutil::is_number($_GET['pages'])
    && $_GET['pages'] > 0
) {
    $pages = $_GET['pages'];
}

if (
    isset($_GET['mid'])
    //cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_GET['mid'])
    && $_GET['mid'] > 0
) {
    $member_id = $_GET['mid'];
}
//$_POST優先
if (
    isset($_POST['id'])
    //cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_POST['id'])
    && $_POST['id'] > 0
) {
    $member_id = $_POST['id'];
}
//メンバークラスを構築
$member_obj = new cuser();
//配列にメンバーを$_POSTに取り出す
//すでにPOSTされていたら、DBからは取り出さない



/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////


//--------------------------------------------------------------------------------------
/*!
@brief	エラー存在のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_err_flag()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $err_flag;
    $str = '';
    switch ($err_flag) {
        case 1:
            $str = <<<END_BLOCK
<p class="red">入力エラーがあります。各項目のエラーを確認してください。</p>
END_BLOCK;
            break;
        case 2:
            $str = <<<END_BLOCK
<p class="red">更新に失敗しました。サポートを確認下さい。</p>
END_BLOCK;
            break;
    }
    $smarty->assign('err_flag', $str);
}

//--------------------------------------------------------------------------------------
/*!
@brief	パラメータのチェック
@return	エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk()
{
    global $err_array;
    $retflg = true;
    /// ユーザ名の存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'user_name', 'ユーザ名', 'isset_nl')) {
        $retflg = false;
    }
    /// ユーザIDの存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'user_id', 'ユーザID', 'isset_nl')) {
        $retflg = false;
    }
    /// メアドの存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'address', 'メールアドレス', 'isset_nl')) {
        $retflg = false;
    }
    /// 生年月日の存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'birthday', '生年月日', 'isset_nl')) {
        $retflg = false;
    }
    /// パスワードの存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'pw', 'パスワード', 'isset_nl')) {
        $retflg = false;
    }
    /// パスワード確認の存在と空白チェック
    if (ccontentsutil::chkset_err_field($err_array, 'repw', 'パスワード確認', 'isset_nl')) {
        $retflg = false;
    }
    regist();
    //console_log("PARAM_CHECK : " . $retflg);
    return $retflg;
}


//--------------------------------------------------------------------------------------
/*!
@brief	メンバーデータの追加／更新。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist()
{
    global $smarty;
    global $member_id;
    $dataarr = array();
    $dataarr['user_name'] = (string)$_POST['user_name'];
    $dataarr['user_id'] = (string)$_POST['user_id'];
    $dataarr['address'] = (string)$_POST['address'];
    $dataarr['sex'] = (int)$_POST['sex'];
    $dataarr['birthday'] = (string)$_POST['birthday'];
    $dataarr['pw'] = (string)cutil::pw_encode($_POST['pw']);

    $chenge = new cchange_ex();
    // if ($member_id > 0) {
    //     //$chenge->update('user', $dataarr, 'id=' . $member_id);
    //     //regist_fruits($member_id);
    //     //cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $member_id);
    // } else {
    //     $mid = $chenge->insert('user', $dataarr);
    //     regist_fruits($mid);
    //     cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $mid);
    // }
    $mid = $chenge->insert('user', $dataarr);
    //console_log("REGIST : " . $mid);
    //regist_user($mid);

    regist_child($mid);

    $_SESSION['j2020tmD_user']['login_user'] = (string)$_POST['user_id'];
    $_SESSION['j2020tmD_user']['user_id'] = (string)$_POST['user_id'];
    $_SESSION['j2020tmD_user']['user_name'] = (string)$_POST['user_name'];
    $_SESSION['j2020tmD_user']['id'] = $mid;

    //$smarty->display('front/' . 'Home_Page' . '.tmpl');
    cutil::redirect_exit('Home_Page.php');
}
//--------------------------------------------------------------------------------------
/*!
@brief	メンバーの子供のデータの追加／更新。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist_child($id)
{
    global $member_id;
    $dataarr = array();
    $chenge = new cchange_ex();

    $dataarr['user_id'] = (int)$id;
    $dataarr['child_name'] = (string)$_POST['children_name'];
    $dataarr['age'] = (int)$_POST['children_age'];
    $dataarr['sex'] = (string)$_POST['children_sex'];

    $mid = $chenge->insert('user_children', $dataarr);
    /*
    $child_length = (int)$_POST['length'];

    for ($i = 0; $i < $child_length; $i++) {
        $dataarr['user_id'] = (string)$_POST['user_id'];
        $dataarr['child_name'] = (string)$_POST['children_name' + ($i + 1)];
        $dataarr['age'] = $i; //(int)$_POST['children_age' + ($i + 1)];
        $dataarr['sex'] = (string)$_POST['children_sex' + ($i + 1)];
        $mid = $chenge->insert('user_children', $dataarr);
    }
    */

}
//--------------------------------------------------------------------------------------
/*!
@brief	ページの出力(一覧に戻るリンク用)
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_page()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $pages;
    $pagestr = '';
    if ($pages > 0) {
        $pagestr =  '?page=' . $pages;
    }
    $smarty->assign('pages', $pagestr);
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーIDのアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_member_id()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $member_id;
    $smarty->assign('id', $member_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーIDのアサイン(新規の場合は「新規」)
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_member_id_txt()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $member_id;
    if ($member_id <= 0) {
        $smarty->assign('member_id_txt', '新規');
    } else {
        $smarty->assign('member_id_txt', $member_id);
    }
}

/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if (!isset($_POST['user_name'])) $_POST['user_name'] = '';
if (!isset($_POST['user_id'])) $_POST['user_id'] = '';
if (!isset($_POST['address'])) $_POST['address'] = '';
if (!isset($_POST['sex'])) $_POST['sex'] = 0;
if (!isset($_POST['birthday'])) $_POST['birthday'] = '';
if (!isset($_POST['pw'])) $_POST['pw'] = '';
if (!isset($_POST['repw'])) $_POST['repw'] = '';
assign_err_flag();
assign_page();
assign_member_id();
assign_member_id_txt();
$smarty->assign('err_array', $err_array);


//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");

if(isset($_POST["func"]) && $_POST["func"] == "conf"){
    //paramchk();
    $smarty->display($top_path . $base_name . '_Conf.tmpl');
}elseif(isset($_POST["func"]) && $_POST["func"] == "set"){
    regist();
}
else{
    $smarty->display($top_path . $base_name . '.tmpl');
}
  