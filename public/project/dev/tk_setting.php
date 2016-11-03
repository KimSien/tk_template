<?php
/**
*
* function list
* 
* 
*/


/**
* @return mixed true(wordpress) and false(single)
* 
* あとあとこれで分岐できない場合用に関数化
*
*/
function CheckWP(){
    if(defined('TEMPLATEPATH')){
    //echo "<br>wordpressです<br>";
    return true;
    }else{
    //echo "<br>singleテンプレートです<br>";
    return false;
}
}




if(!CheckWP()){

//include page
$url = explode(".",$_SERVER["REQUEST_URI"]);
if($url[0]=="/"){$url[0]="/index";}

//多少問題あり
include($_SERVER["DOCUMENT_ROOT"]."/contents_html".$url[0]."_meta.php");

}


