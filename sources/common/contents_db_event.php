<?php
/*!
@file contents_db.php
@brief
@copyright Copyright (c) 2017 Yamanoi Yasushi,Shimojima Ryo.
*/
//PDO接続初期化
require_once("pdointerface.php");


//--------------------------------------------------------------------------------------
///	Eventクラス
//--------------------------------------------------------------------------------------
class cevent extends crecord {
	//--------------------------------------------------------------------------------------
	/*!
	@brief	コンストラクタ
	*/
	//--------------------------------------------------------------------------------------
	public function __construct() {
		//親クラスのコンストラクタを呼ぶ
		parent::__construct();
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	すべての個数を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@return	個数
	*/
	//--------------------------------------------------------------------------------------
	public function get_all_count($debug){
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,					//デバッグ文字を出力するかどうか
			"count(*)",				//取得するカラム
			"Event",			//取得するテーブル
			"1"					//条件
		);
		if($row = $this->fetch_assoc()){
			//取得した個数を返す
			return $row['count(*)'];
		}
		else{
			return 0;
		}
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	指定された範囲の配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$from	抽出開始行
	@param[in]	$limit	抽出数
	@return	配列（2次元配列になる）
	*/
	//--------------------------------------------------------------------------------------
	public function get_all($debug,$from,$limit){
		$arr = array();
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"*",			//取得するカラム
			"Event left join NPO_group on Event.NPO_id = NPO_group.NPO_id",	//取得するテーブル
			"1",			//条件
			"event_id asc",	//並び替え
			"limit " . $from . "," . $limit		//抽出開始行と抽出数
		);
		//順次取り出す
		while($row = $this->fetch_assoc()){
			$arr[] = $row;
		}
		//取得した配列を返す
		return $arr;
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	指定されたIDの配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$id		ID
	@return	配列（1次元配列になる）空の場合はfalse
	*/
	//--------------------------------------------------------------------------------------
	public function get_tgt($debug,$id){
		if(!cutil::is_number($id)
		||  $id < 1){
			//falseを返す
			return false;
		}
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"*",			//取得するカラム
			"Event",	//取得するテーブル
			"event_id=" . $id	//条件
		);
		return $this->fetch_assoc();
	}

	//--------------------------------------------------------------------------------------
	/*!
	@brief	指定されたIDの配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$id		ID
	@return	配列（1次元配列になる）空の場合はfalse
	*/
	//--------------------------------------------------------------------------------------
	public function get_search($debug,$keyword,$start_event_date,$end_event_date,$start_age,$end_age,$venue_city){
		$keyword = $this->make_safe_sqlstr((string)$keyword);
		$start_event_date = $this->make_safe_sqlstr((string)$start_event_date);
		$end_event_date = $this->make_safe_sqlstr((string)$end_event_date);
		$venue_city = $this->make_safe_sqlstr((string)$venue_city);
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"*",			//取得するカラム
			"Event left join NPO_group on Event.NPO_id = NPO_group.NPO_id",	//取得するテーブル
			"(event_name like {$keyword} or
			  venue_city like {$keyword}) and
			  start_event_date between {$start_event_date} and {$end_event_date} and
			  start_age  <= {$start_age} and
			  end_age >= {$end_age} and
			  venue_city = {$venue_city}"
		);
		//順次取り出す
		$arr = array();
        while ($row = $this->fetch_assoc()) {
            $arr[] = $row;
			}
        //取得した配列を返す
        return $arr;
	}

	//--------------------------------------------------------------------------------------
	/*!
	@brief	デストラクタ
	*/
	//--------------------------------------------------------------------------------------
	public function __destruct(){
		//親クラスのデストラクタを呼ぶ
		parent::__destruct();
	}
}

//--------------------------------------------------------------------------------------
///	participantクラス
//--------------------------------------------------------------------------------------
class cparticipant extends crecord {
	//--------------------------------------------------------------------------------------
	/*!
	@brief	コンストラクタ
	*/
	//--------------------------------------------------------------------------------------
	public function __construct() {
		//親クラスのコンストラクタを呼ぶ
		parent::__construct();
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	すべての個数を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@return	個数
	*/
	//--------------------------------------------------------------------------------------
	public function get_all_count($debug){
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,					//デバッグ文字を出力するかどうか
			"count(*)",				//取得するカラム
			"participant",			//取得するテーブル
			"1"					//条件
		);
		if($row = $this->fetch_assoc()){
			//取得した個数を返す
			return $row['count(*)'];
		}
		else{
			return 0;
		}
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	指定された範囲の配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$from	抽出開始行
	@param[in]	$limit	抽出数
	@return	配列（2次元配列になる）
	*/
	//--------------------------------------------------------------------------------------
	public function get_all($debug,$from,$limit){
		$arr = array();
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"*",			//取得するカラム
			"participant",	//取得するテーブル
			"1",			//条件
			"id asc",	//並び替え
			"limit " . $from . "," . $limit		//抽出開始行と抽出数
		);
		//順次取り出す
		while($row = $this->fetch_assoc()){
			$arr[] = $row;
		}
		//取得した配列を返す
		return $arr;
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	指定されたIDの配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$id		ID
	@return	配列（1次元配列になる）空の場合はfalse
	*/
	//--------------------------------------------------------------------------------------
	public function get_event_user($debug,$id){
		if(!cutil::is_number($id)
		||  $id < 1){
			//falseを返す
			return false;
		}
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"count(*) as participant",		//取得するカラム
			"participant",	//取得するテーブル
			"event_id=" . $id	//条件
		);
		return $this->fetch_assoc();
	}

	
	//--------------------------------------------------------------------------------------
	/*!
	@brief	デストラクタ
	*/
	//--------------------------------------------------------------------------------------
	public function __destruct(){
		//親クラスのデストラクタを呼ぶ
		parent::__destruct();
	}
}