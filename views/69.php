<?php
#angular中接收数据的方法
//第一种方式：
// $content = file_get_contents('php://input');	//使用file_get_contents接收
// print_r($content);		//json数据
// print_r(json_decode($content,true));		//处理json数据

//第二种方式：
print_r($_POST);
