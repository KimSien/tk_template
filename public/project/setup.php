<?php
if( !isset($_SESSION) ) { session_start();}
ini_set( 'display_errors',0 );

/**
* composer library autoload
*/
include("common/autoload.php");

    /**
    * モバイルチェック
    */
    include("dev/mobilecheck.php");

    /**
    *　設定、システム用 クラス
    */
    //
    
    include("dev/tk_setting.php");


    /**
    *　wpじゃない場合だけ、ダミーfuncionを生成する
    *
    */
    if(CheckWP()){
    //wordpress
    }else{
    //not wordpress
    include("dev/tk_wp_wrapper.php");
    }

    /**
    *　設定、システム用 クラス
    */
    include("dev/tk.php");



//if($_COOKIE['device']=="pc"){ $device ="pc";};


//echo $device;



