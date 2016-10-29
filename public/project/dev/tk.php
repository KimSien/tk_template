<?php
/**
*
* static関数の塊
* 
* 
*/
class Tk{

    /**
    * @return string pc,sma,tab
    * 
    */
    static function Pccheck(){
        $it = new Tk_MobileCheck();
        return $it->GetDevice();
    }




    static function htmlhead(){

$heads = <<< EOM
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
EOM;

    return $heads;

    }


}
