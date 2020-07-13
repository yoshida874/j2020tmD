<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once("inc_mail.php");

$smarty->assign('page', $header_items);

$err_array = array();
$err_flag = 0;
$page = 0;
$inquiry_id = 0;

if(isset($_GET['page']) 
	&& cutil::is_number($_GET['page'])
	&& $_GET['page'] > 0){
	$page = $_GET['page'];
}

if(isset($_GET['iid']) 
	&& cutil::is_number($_GET['iid'])
	&& $_GET['iid'] > 0){
	$inquiry_id = $_GET['iid'];
}

//$_POST優先
if(isset($_POST['inquiry_id']) 
//cutilクラスのメンバ関数をスタティック呼出
	&& cutil::is_number($_POST['inquiry_id'])
	&& $_POST['inquiry_id'] > 0){
    $inquiry_id = $_POST['inquiry_id'];
}
//メンバークラスを構築
$admin_inquiry_obj = new cadmin_inquiry();

if(isset($_POST['func'])){
	switch($_POST['func']){
		case 'set':
			if(!paramchk()){
				$_POST['func'] = 'edit';
				$err_flag = 1;
			}
			else{
				regist();
				//regist()内でリダイレクトするので
				//ここまで実行されればリダイレクト失敗
				$_POST['func'] = 'edit';
				//システムに問題のあるエラー
				$err_flag = 2;
			}
		case 'conf':
			if(!paramchk()){
				$_POST['func'] = 'edit';
				$err_flag = 1;
			}
		break;
		case 'edit':
			//戻るボタン。
		break;
		default:
			//通常はありえない
			echo '原因不明のエラーです。';
			exit;
		break;
	}
}
else{
	if($inquiry_id > 0){
		if(($_POST = $admin_inquiry_obj->get_tgt(false,$inquiry_id)) === false){
			$_POST['func'] = 'new';
		}
		else{
			$_POST['func'] = 'edit';
		}
	}
	else{
		//新規の入力フォーム
		$_POST['func'] = 'new';
	}
}

/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////

//--------------------------------------------------------------------------------------
/*!
@brief	エラー存在のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_err_flag(){
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $err_flag;
	$str = '';
	switch($err_flag){
		case 1:
		$str =<<<END_BLOCK

<p class="red">入力エラーがあります。各項目のエラーを確認してください。</p>
END_BLOCK;
		break;
		case 2:
		$str =<<<END_BLOCK

<p class="red">更新に失敗しました。サポートを確認下さい。</p>
END_BLOCK;
		break;
	}
	$smarty->assign('err_flag',$str);
}

//--------------------------------------------------------------------------------------
/*!
@brief	パラメータのチェック
@return	エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk(){
	global $err_array;
	$retflg = true;
	/// ユーザー名の存在と空白チェック
	if(ccontentsutil::chkset_err_field($err_array,'user_name','ユーザー名','isset_nl')){
		$retflg = false;
	}
	if(ccontentsutil::chkset_err_field($err_array,'user_id','ユーザーID','isset_nl')){
		$retflg = false;
	}
	return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief	問い合わせIDのアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_inquiry_id(){
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $inquiry_id;
	$smarty->assign('inquiry_id',$inquiry_id);
}


//--------------------------------------------------------------------------------------
/*!
@brief  メール送信後自分自身を再読み込みする。
@return なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    //必要に応じてここでDB保存処理

	$to_mail = 'ud8mnzdd@gmail.com';
    //これよりメール送信
    global $to_member_examinee_template;
    //ユーザー向け
    $Subject = '問い合わせありがとうございます';
    $BaseMessage = $to_member_examinee_template;
	//$BaseMessage = str_replace('<!-- to_mail -->',$_POST['reply_address'],$BaseMessage);
    $BaseMessage = str_replace('<!-- to_mail -->',$to_mail,$BaseMessage);

    $Message = $BaseMessage;
	//$Headers = "From: " . $_POST['from_mail'] . "\r\n";
	$Headers = "From: " . 'yoshida.taiki@outlook.jp' . "\r\n";
    $Headers .= "Content-Type: text/plain; charset=ISO-2022-JP";
    $Message .= "\r\n";
    //「from」から「to」に送るメールとして送信する
	//$To = $_POST['reply_address'];
	$To = $to_mail;
    //本番送信
	mb_send_mail($To, $Subject, $Message, $Headers);

	//更新処理
	$dataarr = array();
	$inquiry_id = (string)$_POST['inquiry_id'];
	$dataarr['reply'] = 1;
	$chenge = new cchange_ex();
	$chenge->update('admin_inquiry',$dataarr,'inquiry_id=' . $inquiry_id);

    cutil::redirect_exit('Inquiry_List.php');
}

/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if(!isset($_POST['user_name']))$_POST['user_name'] = '';
if(!isset($_POST['content']))$_POST['content'] = '';
if(!isset($_POST['user_id']))$_POST['user_id'] = '';
if(!isset($_POST['target_date']))$_POST['target_date'] = '';
if(!isset($_POST['reply_address']))$_POST['reply_address'] = '';
assign_err_flag();
assign_inquiry_id();
$smarty->assign('err_array',$err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'admin/';
$base_name = basename(__FILE__, ".php");
$smarty->display($top_path . $base_name . '.tmpl');