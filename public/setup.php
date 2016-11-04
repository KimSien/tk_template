<?php
if( !isset($_SESSION) ) { session_start();}
ini_set( 'display_errors',1 );

/**
* composer library autoload
*/
include(dirname(__FILE__)."/common/autoload.php");

    /**
    *　設定、システム用 クラス
    */
    //
    include(dirname(__FILE__)."/dev/tk_setting.php");

    /**
    * モバイルチェック
    */
    include(dirname(__FILE__)."/dev/mobilecheck.php");

    /**
    *　wpじゃない場合だけ、ダミーfuncionを生成する
    *
    */
    if(CheckWP()){
    //wordpress
    }else{
    //not wordpress
    include(dirname(__FILE__)."/dev/tk_wp_wrapper.php");
    }

    /**
    *　設定、システム用 クラス
    */
    include(dirname(__FILE__)."/dev/tk.php");



//if($_COOKIE['device']=="pc"){ $device ="pc";};


//echo $device;



