<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");

//変数宣言
$smarty->assign("pageFlag","0");
$smarty->assign('page', $header_items);

$imgDir = "../../images/profile_img/";
$smarty->assign('imgDir',$imgDir);

$err_array = array();
$err_flag = 0;
$children= '';
$page = 0;


/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////
//--------------------------------------------------------------------------------------
/*!
@brief  ファイルアップエラーの取得
@param[in]  $upfile  イメージ変数名
@return エラー文字列
*/
//--------------------------------------------------------------------------------------
function get_upload_err($upfile){
	$str = '';
    switch($_FILES[$upfile]['error']){
        case 1:
            $str = "アップロードされたファイルは、php.ini の upload_max_filesize ディレクティブの値を超えています。";
        break;
        case 2:
            $str = "アップロードされたファイルサイズが上限を越えています。\n";
        break;
        case 3:
            $str = "アップロードされたファイルは一部しかアップロードされませんでした。\n";
        break;
        case 4:
            $str = "画像ファイルはアップロードされませんでした\n";
        break;
        case 6:
            $str = "テンポラリフォルダがありません。管理者に連絡して下さい。\n";
        break;
        case 7:
            $str = "テンポラリファイルへのディスク書き込みに失敗しました。管理者に連絡して下さい。\n";
        break;
        default:
            $str = "原因不明のエラーです。管理者に連絡して下さい。\n";
        break;
    }
    return $str;
}


//--------------------------------------------------------------------------------------
/*!
@brief  ファイルのアップロード
@param[in]  $imagefile  イメージ変数名
@param[in]  $pathext  アップロードを許可する拡張子名（ドットも含める。半角小文字で記述）
@param[in]  $subdir  サブディレクトリ('2017/')など
@param[in]  $headstr  先頭につける文字列
@return 成功すればtrue
*/
//--------------------------------------------------------------------------------------
function upload($imagefile,$pathext,$subdir,$headstr){
  global $err_array;
  global $imgDir;
  if(!isset($_FILES[$imagefile]['name']) || $_FILES[$imagefile]['name'] == ""){
      return false;
  }
  if($_FILES[$imagefile]['error'] == 0){
      $ext_dot_str = strtolower(strrchr($_FILES[$imagefile]['name'],"."));
  $okflg = false;
  foreach($pathext as $key => $val){
    if($ext_dot_str == $val){
      $okflg = true;
      break;
    }
  }
  if(!$okflg){
    $err_array[$imagefile] = "アップロードファイルの種類が許可されてません";
    return false;
  }
      //保存されるファイル名は目的に合わせて変更する
      $now = new DateTime();
      $datastr = $subdir . $headstr . $now->format("YmdHisv") . strrchr($_FILES[$imagefile]['name'],".");
      $uppath = $imgDir . $datastr;
      //chmod($imgDir,0646);
      if (!move_uploaded_file($_FILES[$imagefile]['tmp_name'],
          $uppath)) {
          $err_array[$imagefile] .= "アップロードに失敗しました";
          return false;
      }
      else{
          chmod($uppath,0646);
          //アップロードされたファイルをPOST変数に入れる
          //データベースに登録する場合は、この変数を使う
          $_POST[$imagefile] = $datastr;
          return true;
      }
  }
  else{
      $err_array[$imagefile] = get_upload_err($imagefile);
      return false;
  }
}

//--------------------------------------------------------------------------------------
/*!
@brief  パラメータのチェック
@return エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk(){
  global $member_id;
  global $err_array;
  $retflg = true;

//ファイルのアップロード
//添付されてなくてもエラーは出さない
$ext_arr = array();
$ext_arr[] = '.jpg';
$ext_arr[] = '.png';
$subdir = '';
if(upload('profile_img',$ext_arr,$subdir,hash('fnv132',$member_id))){
  //echo "upload成功";
}else {
  //echo "upload失敗";
}

//print_r($err_array);

  return $retflg;
}



if(isset($_GET['page'])
	&& cutil::is_number($_GET['page'])
	&& $_GET['page'] > 0){
	$page = $_GET['page'];
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーのデータの追加／更新
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist(){
	global $member_id;
	$dataarr = array();
	$dataarr['id'] = (int)$member_id;
  $dataarr['user_id'] = (string)$_POST['user_id'];
	$dataarr['user_name'] = (string)$_POST['user_name'];
  if ($_POST['pw'] !=""){
    $dataarr['pw'] = (string)cutil::pw_encode($_POST['pw']);
  }
  $dataarr['birthday'] = date('Y-m-d', strtotime($_POST['birthday']));
  $dataarr['hobby'] = (string)$_POST['hobby'];
  $dataarr['address'] = (string)$_POST['address'];
	$dataarr['profile_content'] = (string)$_POST['profile_content'];
  $dataarr['profile_img'] = (string)$_POST['profile_img'];
	$chenge = new cchange_ex();

  $chenge->update('user',$dataarr,'id=' . $member_id);
  
  regist_child($member_id);

	cutil::redirect_exit($_SERVER['PHP_SELF']);
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーの子供のデータの追加／更新
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist_child($id)
{
    global $member_id;
    $dataarr = array();
    $chenge = new cchange_ex();

    $dataarr['user_id'] = (int)$member_id;
    $dataarr['child_name'] = (string)$_POST['child_name'];
    $dataarr['age'] = (int)$_POST['age'];

    $mid = $chenge->update('user_children', $dataarr, 'user_id=' . $member_id);

}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーのデータ読み込み。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
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
  $smarty->assign('user', $user);
}

if(!isset($_POST["func"])){
	$_POST["func"] = "";
}

//--------------------------------------------------------------------------------------
/*!
@brief	メンバーの子供のデータ読み込み。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
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
  $smarty->assign('children', $children);
}

read_data_user($_SESSION['j2020tmD_user']['user_id']);
read_data_children($_SESSION['j2020tmD_user']['id']);

$member_id = $user['id'];
//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/mypage/';
$base_name = basename(__FILE__, ".php");
if(isset($_POST["func"]) && $_POST["func"] == "confirm"){
  //var_dump($_FILES);
  paramchk();
	$smarty->display($top_path . $base_name . '_Conf.tmpl');
}elseif(isset($_POST["func"]) && $_POST["func"] == "set"){
  //if(paramchk()){
    //echo "imgfile name:";//.$_FILES['img_upload']['name'];
    //var_dump($_FILES);
    regist();
  //}

}elseif(isset($_POST["func"]) && $_POST["func"] == "edit"){
  if($_POST['profile_img'] != $user['profile_img']){
    if(file_exists($imgDir.$_POST['profile_img']) == TRUE){
      unlink($imgDir.$_POST['profile_img']);
    }
  }
  $smarty->display($top_path . $base_name . '.tmpl');
}else{
  $smarty->display($top_path . $base_name . '.tmpl');
}
