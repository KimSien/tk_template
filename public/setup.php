<?php
if( !isset($_SESSION) ) { session_start();}
ini_set( 'display_errors',1 );

/**
* composer library autoload
*/
include(dirname(__FILE__)."/project/common/autoload.php");


    /**
    * 環境依存定数などの読み込み
    * define("MYTEMPLATEPATH","/home/xxxx/xxxx/xxxxx/");
    * 自分で設定してください。
    * html,wp 共通でインクルードするパーツがある場合は
    * ここで指定したルートから読み込むようにする
    */
    include(dirname(__FILE__)."/ignoreconfig.php");

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



