<?php
if(!CheckWP()){

include page
$url = explode(".",$_SERVER["REQUEST_URI"]);
if($url[0]=="/"){$url[0]="/index";}

//多少問題あり
include(dirname(__FILE__)."/contents_html".$url[0]."_meta.php");
}


