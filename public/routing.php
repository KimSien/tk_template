<?php
$settingpath = "/newtemp00/public/";
$settink = "html";
//echo $_SERVER['REQUEST_URI']."<br>";

$paths = str_replace($settingpath,"",$_SERVER['REQUEST_URI']);

$urls = explode(".",$paths);
if(count($urls) < 3 and $urls[1] == $settink ){
//success
if($urls[0]=="/"){$urls[0]="/index";}
define("PATHSTATIC",$urls[0]);

}else{
//errors
//
}

//多少問題あり
include(dirname(__FILE__)."/contents_html/".PATHSTATIC."_meta.php");


/**
*
*/
function Tkgettemplate(){
$url = explode(".",$_SERVER["REQUEST_URI"]);
if($url[0]=="/"){$url[0]="/index";}

//多少問題あり
$contents = include(dirname(__FILE__)."/contents_html/".PATHSTATIC.".php");
echo $contents;
}


