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




