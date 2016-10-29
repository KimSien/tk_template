<?php
/**
*
*/
class Tk_MobileCheck{

    public $detect;
    public $status;

    function __construct(){
        $this->detect = new Mobile_Detect;
        $this->logics();
    }

    function GetDevice(){
       
        return $this->status;
    }

    function logics(){
        if($this->detect->isTablet()){ 
            $this->status = "tab";
        }elseif($this->detect->isMobile()){
            $this->status = "sma";
        }else{ 
             $this->status = "pc";
       };

    }

}



