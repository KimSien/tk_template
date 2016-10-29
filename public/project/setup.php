<?php
session_start();
ini_set( 'display_errors',0 );

/**
* composer library autoload
*/
require_once("common/autoload.php");

    /**
    * モバイルチェック
    */
    require_once("dev/mobilecheck.php");

    /**
    *　設定、システム用 クラス
    */
    require_once("dev/tk_setting.php");


    /**
    *　wpじゃない場合だけ、ダミーfuncionを生成する
    *
    */
    if(!CheckWP()){
    require_once("dev/tk_wp_wrapper.php");
    }

    /**
    *　設定、システム用 クラス
    */
    require_once("dev/tk.php");



//if($_COOKIE['device']=="pc"){ $device ="pc";};


//echo $device;



