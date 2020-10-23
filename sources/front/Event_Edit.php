<?php

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
require_once("inc_header.php");

$smarty->assign('page', $header_items);

$imgDir = "../images/event_img/";
//1ページのリミット
$limit = 20;
//ページの設定
//デフォルトは1
$page = 1;
$rows = array();
$ERR_STR = '';
$show_mode = '';
$user_id = $_SESSION['j2020tmD_user']['id'];

if(isset($_POST['event_id'])){
    regist();
}

if(isset($_GET['iid'])){
    $obj = new cevent();
    $rows = $obj->get_tgt(false, $_GET['iid']);
}
else{
    readdata();
    //曜日リスト
    $week = array('日', '月', '火', '水', '木', '金', '土');
    if(!empty($rows)){
        foreach($rows as $index=>$value){
            //参加人数挿入
            $obj = new cparticipant();
            $participant = $obj->get_event_user(false,$value["event_id"]);
            //曜日挿入
            $date = new DateTime($value["start_event_date"]);
            $date = $date->format('w');
            $rows[$index] = $value + $participant + array('start_event_week'=>$week[$date]);
        }
    }
}

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
@brief	データ読み込み
@return	なし
*/
//--------------------------------------------------------------------------------------
function readdata()
{
    global $limit;
    global $rows;
    global $order;
    global $page;
    global $user_id;
    $obj = new cevent();
    $from = ($page - 1) * $limit;
    $rows = $obj->get_event_edit(false, $user_id ,$from, $limit);
}

//--------------------------------------------------------------------------------------
/*!
@brief	Eventの更新。保存後自分自身を再読み込みする。
@return	なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    //ファイルのアップロード
    //添付されてなくてもエラーは出さない
    $ext_arr = array();
    $ext_arr[] = '.jpg';
    $ext_arr[] = '.png';
    $subdir = '';
    //var_dump($_FILES);

    $event_id = $_POST['event_id'];
	$dataarr = array();
    $dataarr['event_name'] = (string)$_POST['event_name'];

    if(upload('img',$ext_arr,$subdir,hash('fnv132',$_POST['event_name']))){
        $dataarr['img'] = '/~j2020tmD/sources/images/event_img/'. (string)$_POST['img'];
    //echo "upload成功";
    }else {
    //echo "upload失敗";
    }
    
    $dataarr['start_age'] = (int)$_POST['start_age'];
    $dataarr['end_age'] = (int)$_POST['end_age'];
    $dataarr['representative'] = (string)$_POST['representative'];
    //$dataarr[''] = (string)$_POST[''];

    $dataarr['cost'] = (int)$_POST['cost'];
    $dataarr['content'] = (string)$_POST['content'];

    $dataarr['start_event_date'] = date('Y-m-d', strtotime($_POST['start_event_date']));
    $dataarr['start_event_time'] = date('H:i', strtotime($_POST['start_event_time']));
    $dataarr['end_event_date'] = date('Y-m-d', strtotime($_POST['end_event_date']));
    $dataarr['end_event_time'] = date('H:i', strtotime($_POST['end_event_time']));

    $dataarr['start_recruiting_date'] = date('Y-m-d', strtotime($_POST['start_recruiting_date']));
    $dataarr['start_recruiting_time'] = date('H:i', strtotime($_POST['start_recruiting_time']));
    $dataarr['end_recruiting_date'] = date('Y-m-d', strtotime($_POST['end_recruiting_date']));
    $dataarr['end_recruiting_time'] = date('H:i', strtotime($_POST['end_recruiting_time']));

    $dataarr['venue_name'] = (string)$_POST['venue_name'];
    $dataarr['venue_city'] = (string)$_POST['venue_city'];
    $dataarr['venue_aza'] = (string)$_POST['venue_aza'];

    $chenge = new cchange_ex();
    $chenge->update('Event',$dataarr,'event_id=' . $event_id);
    cutil::redirect_exit($_SERVER['PHP_SELF'] . '?id=' . $event_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief	一覧のアサイン
@return	なし
*/
//--------------------------------------------------------------------------------------
function assign_cevent_list()
{
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $rows;
    $smarty->assign('rows', $rows);
}

assign_cevent_list();

//Smartyを使用した表示(テンプレートファイルの指定)
$top_path = 'front/';
$base_name = basename(__FILE__, ".php");
//print_r($base_name);

if(isset($_GET['iid'])){
    $smarty->display($top_path . $base_name . '.tmpl');
}
else{
    $smarty->display($top_path . 'Event_Edit_Select' . '.tmpl');
}