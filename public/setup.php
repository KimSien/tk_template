<?php
if( !isset($_SESSION) ) { session_start();}
ini_set( 'display_errors',1 );

/**
* composer library autoload
*/
include(dirname(__FILE__)."/project/common/autoload.php");

    /**
    *　設定、システム用 クラス
    */
    include(dirname(__FILE__)."/project/dev/tk_setting.php");

    /**
    * モバイルチェック
    */
    include(dirname(__FILE__)."/project/dev/mobilecheck.php");

    /**
    *　wpじゃない場合だけ、ダミーfuncionを生成する
    *
    */
    if(CheckWP()){
    //wordpress
    }else{
    //not wordpress
    include(dirname(__FILE__)."/routing.php");   
    include(dirname(__FILE__)."/project/dev/tk_wp_wrapper.php");
    }



    /**
    *　設定、システム用 クラス
    */
    include(dirname(__FILE__)."/project/dev/tk.php");



//if($_COOKIE['device']=="pc"){ $device ="pc";};


//echo $device;



