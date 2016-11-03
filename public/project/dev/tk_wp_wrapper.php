<?php
/**
*
* 
* wordpress dummy function 
* 
*/

define("TEMPLATEPATH","");

function wp_title($a="",$b="",$c=""){
    return "wp_title";
}

function bloginfo($str){
    return "bloginfo";
}


function get_template_part($str){

$url = explode(".",$_SERVER["REQUEST_URI"]);
if($url[0]=="/"){$url[0]="/index";}

//多少問題あり
$contents = include($_SERVER["DOCUMENT_ROOT"]."/contents_html".$url[0].".php");
echo $contents;

}

function edit_post_link(){
    return void;
}


function body_class(){}
function wp_head(){}
function wp_footer(){}

function have_posts(){
}

function get_template_directory_uri(){}







