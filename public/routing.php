<?php

//.htaccessでルーティング
if(isset($_GET["type"])){
define("PATHSTATIC",$_GET["type"]); 
}else{
define("PATHSTATIC","index");     
}

/*
if($_GET["type"]!=""){
define("PATHSTATIC",$_GET["type"]); 
}else{
define("PATHSTATIC","index"); 
}
*/


try{
    if(! @include(dirname(__FILE__)."/contents_html/".PATHSTATIC."_meta.php"))
    throw new Exception("not page");
}catch(Exception $e){
// error
$title="タイトル無設定";
$n_description="無設定";
$n_keyword="無設定";

header('Location: index.html');
exit;
}


/*
$settingpath = "/newtemp00/public/";
$settink = "html";
$paths = str_replace($settingpath,"",$_SERVER['REQUEST_URI']);
$urls = explode(".",$paths);
if(count($urls) < 3 ){
    if($urls[0]=="/"){$urls[0]="/index";}
    define("PATHSTATIC",$urls[0]);
include(dirname(__FILE__)."/contents_html/".PATHSTATIC."_meta.php");
}else{
//errors
//
}
*/


/**
*
*/
function Tkgettemplate(){

    try{
        if(! @include(dirname(__FILE__)."/contents_html/".PATHSTATIC.".php"))
        throw new Exception("not page");
        //echo $contents;
    }catch(Exception $e){
echo <<< EOM

無効なページです。<br> Error 404
EOM;


    }

}


