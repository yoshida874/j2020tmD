<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$imgDir = "../images/event_img/";
$smarty->assign('imgDir',$imgDir);

$err_array = array();
$err_flag = 0;


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
  global $err_array;
  $retflg = true;

//ファイルのアップロード
//添付されてなくてもエラーは出さない
$ext_arr = array();
$ext_arr[] = '.jpg';
$ext_arr[] = '.png';
$subdir = '';
//var_dump($_FILES);
if(upload('event_img',$ext_arr,$subdir,hash('fnv132',$_POST['event_name']))){
  //echo "upload成功";
}else {
  //echo "upload失敗";
}

//print_r($err_array);

  return $retflg;
}

function regist(){
	global $member_id;
	$dataarr = array();
  $dataarr['event_name'] = (string)$_POST['event_name'];
  $dataarr['upper_limit'] = (int)$_POST['upper_limit'];
  $dataarr['start_age'] = (int)$_POST['start_age'];
  $dataarr['end_age'] = (int)$_POST['end_age'];

  $dataarr['start_event_date'] = date('Y-m-d', strtotime($_POST['start_event_date']));
  $dataarr['start_event_time'] = date('H:i', strtotime($_POST['start_event_time']));
  $dataarr['end_event_date'] = date('Y-m-d', strtotime($_POST['end_event_date']));
  $dataarr['end_event_time'] = date('H:i', strtotime($_POST['end_event_time']));
  $dataarr['start_recruiting_date'] = date('Y-m-d', strtotime($_POST['start_recruiting_date']));
  $dataarr['start_recruiting_time'] = date('H:i', strtotime($_POST['start_recruiting_time']));
  $dataarr['end_recruiting_date'] = date('Y-m-d', strtotime($_POST['end_recruiting_date']));
  $dataarr['end_recruiting_time'] = date('H:i', strtotime($_POST['end_recruiting_time']));

  $dataarr['representative'] = (string)$_POST['representative'];
  $dataarr['venue_name'] = (string)$_POST['venue_name'];
  $dataarr['venue_prefecture'] = (string)$_POST['venue_prefecture'];
  $dataarr['venue_city'] = (string)$_POST['venue_city'];
  $dataarr['venue_aza'] = (string)$_POST['venue_aza'];
  $dataarr['cost'] = (int)$_POST['cost'];
  $dataarr['hash_tag'] = (string)$_POST['hash_tag'];
  $dataarr['content'] = (string)$_POST['content'];
  if(isset($_POST['event_img'])){
    $dataarr['img'] = '/~j2020tmD/sources/images/event_img/'. (string)$_POST['event_img'];
  }
	$chenge = new cchange_ex();

	$chenge->insert('Event',$dataarr);
	cutil::redirect_exit($_SERVER['PHP_SELF']);
}


if(!isset($_POST["func"])){
	$_POST["func"] = "";
}

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
if(isset($_POST["func"]) && $_POST["func"] == "confirm"){
  //var_dump($_FILES);
  paramchk();
  $smarty->display($top_path . $base_name . '_Conf.tmpl');
}elseif(isset($_POST["func"]) && $_POST["func"] == "set"){
  regist();
}elseif(isset($_POST["func"]) && $_POST["func"] == "edit"){
  if(file_exists($imgDir.$_POST['event_img']) == TRUE){
    unlink($imgDir.$_POST['event_img']);
  }
  $smarty->display($top_path . $base_name . '.tmpl');
}else{
  if(isset($_POST['event_img'])){
    if(file_exists($imgDir.$_POST['event_img']) == TRUE){
      unlink($imgDir.$_POST['event_img']);
    }
  }
  $smarty->display($top_path . $base_name . '.tmpl');
}
