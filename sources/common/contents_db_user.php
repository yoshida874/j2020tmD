<?php
/*!
@file contents_db.php
@brief
@copyright Copyright (c) 2017 Yamanoi Yasushi,Shimojima Ryo.
*/
//PDO接続初期化
require_once("pdointerface.php");


//--------------------------------------------------------------------------------------
/// ユーザークラス
//--------------------------------------------------------------------------------------
class cuser extends crecord
{
    //--------------------------------------------------------------------------------------
    /*!
    @brief  コンストラクタ
    */
    //--------------------------------------------------------------------------------------
    public function __construct()
    {
        //親クラスのコンストラクタを呼ぶ
        parent::__construct();
    }
    //--------------------------------------------------------------------------------------
    /*!
    @brief  すべての個数を得る
    @param[in]  $debug  デバッグ出力をするかどうか
    @return 個数
    */
    //--------------------------------------------------------------------------------------
    public function get_all_count($debug)
    {
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,                 //デバッグ文字を出力するかどうか
            "count(*)",             //取得するカラム
            "user",            //取得するテーブル
            "1"
        );
        if ($row = $this->fetch_assoc()) {
            //取得した個数を返す
            return $row['count(*)'];
        } else {
            return 0;
        }
    }
    //--------------------------------------------------------------------------------------
    /*!
    @brief  指定された範囲の配列を得る
    @param[in]  $debug  デバッグ出力をするかどうか
    @param[in]  $from   抽出開始行
    @param[in]  $limit  抽出数
    @return 配列（2次元配列になる）
    */
    //--------------------------------------------------------------------------------------
    public function get_all($debug, $from, $limit)
    {
        $arr = array();
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,            //デバッグ表示するかどうか
            "*",            //取得するカラム
            "user",    //取得するテーブル
            "1",            //条件
            "user_id asc",    //並び替え
            "limit " . $from . "," . $limit        //抽出開始行と抽出数
        );
        //順次取り出す
        while ($row = $this->fetch_assoc()) {
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
    public function get_tgt($debug, $id)
    {
        if (
            !cutil::is_number($id)
            ||  $id < 1
        ) {
            //falseを返す
            return false;
        }
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,            //デバッグ表示するかどうか
            "*",            //取得するカラム
            "user",    //取得するテーブル
            "id=" . $id    //条件
        );
        return $this->fetch_assoc();
    }

    //--------------------------------------------------------------------------------------
    /*!
	@brief	指定されたユーザーIDの配列を得る
	@param[in]	$debug	デバッグ出力をするかどうか
	@param[in]	$id		ID
	@return	配列（1次元配列になる）空の場合はfalse
	*/
    //--------------------------------------------------------------------------------------
    public function get_tgt_uid($debug, $id)
    {
        if (
            $id == ""
        ) {
            //falseを返す
            return false;
        }
        $uid = $this->make_safe_sqlstr((string)$id);
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,            //デバッグ表示するかどうか
            "*",            //取得するカラム
            "user",    //取得するテーブル
            "user_id={$uid}"//.$uid    //条件
        );
        return $this->fetch_assoc();
    }

    //--------------------------------------------------------------------------------------
    /*!
    @brief  指定されたログインの配列を得る
    @param[in]  $debug  デバッグ出力をするかどうか
    @param[in]  $id     ログイン
    @return 配列（1次元配列になる）空の場合はfalse
    */
    //--------------------------------------------------------------------------------------
    public function get_tgt_login($debug, $id)
    {
        $safe_login = $this->make_safe_sqlstr((string) $id);
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,         //デバッグ表示するかどうか
            "*",          //取得するカラム
            "user",    //取得するテーブル
            "user_id like {$safe_login}"    //条件
        );
        return $this->fetch_assoc();
    }

    //--------------------------------------------------------------------------------------
    /*!
    @brief  デストラクタ
    */
    //--------------------------------------------------------------------------------------
    public function __destruct()
    {
        //親クラスのデストラクタを呼ぶ
        parent::__destruct();
    }
}

//--------------------------------------------------------------------------------------
/// ユーザー子供クラス
//--------------------------------------------------------------------------------------
class cuser_children extends crecord
{
    //--------------------------------------------------------------------------------------
    /*!
    @brief  コンストラクタ
    */
    //--------------------------------------------------------------------------------------
    public function __construct()
    {
        //親クラスのコンストラクタを呼ぶ
        parent::__construct();
    }
    //--------------------------------------------------------------------------------------
    /*!
    @brief  すべての個数を得る
    @param[in]  $debug  デバッグ出力をするかどうか
    @return 個数
    */
    //--------------------------------------------------------------------------------------
    public function get_all_count($debug)
    {
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,                 //デバッグ文字を出力するかどうか
            "count(*)",             //取得するカラム
            "user_children",            //取得するテーブル
            "1"
        );
        if ($row = $this->fetch_assoc()) {
            //取得した個数を返す
            return $row['count(*)'];
        } else {
            return 0;
        }
    }
    //--------------------------------------------------------------------------------------
    /*!
    @brief  指定された範囲の配列を得る
    @param[in]  $debug  デバッグ出力をするかどうか
    @param[in]  $from   抽出開始行
    @param[in]  $limit  抽出数
    @return 配列（2次元配列になる）
    */
    //--------------------------------------------------------------------------------------
    public function get_all($debug, $from, $limit)
    {
        $arr = array();
        //親クラスのselect()メンバ関数を呼ぶ
        $this->select(
            $debug,            //デバッグ表示するかどうか
            "*",            //取得するカラム
            "user_children",    //取得するテーブル
            "1",            //条件
            "id asc",    //並び替え
            "limit " . $from . "," . $limit        //抽出開始行と抽出数
        );
        //順次取り出す
        while ($row = $this->fetch_assoc()) {
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
	public function get_tgt($debug,$user_id){
		if(!cutil::is_number($id)
		||  $id < 1){
			//falseを返す
			return false;
		}
		//親クラスのselect()メンバ関数を呼ぶ
		$this->select(
			$debug,			//デバッグ表示するかどうか
			"user_children.*,user.user_id",			//取得するカラム
			"user_children,user",	//取得するテーブル
            "user.user_id = {$user_id}"//条件
		);
		return $this->fetch_assoc();
	}

    //--------------------------------------------------------------------------------------
    /*!
    @brief  デストラクタ
    */
    //--------------------------------------------------------------------------------------
    public function __destruct()
    {
        //親クラスのデストラクタを呼ぶ
        parent::__destruct();
    }
}
