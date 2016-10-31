<?php
    // 環境変数HTTP_USER_AGENTの取得
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(ereg("DoCoMo|J-PHONE|Vodafone|SoftBank|UP.Browser|KDDI|WILLCOM|PDXGW|DDIPOCKET", $ua)){
        // 携帯端末
	$device="keitai";
    }else if(ereg("Android|iPhone", $ua)){
        // スマートフォン端末
	$device="sma";
    }else{
        // PC端末
	$device="pc";
    }
?>