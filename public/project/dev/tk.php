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

        //return "pc";
        
        $it = new Tk_MobileCheck();
        return $it->GetDevice();
        
    }


}
