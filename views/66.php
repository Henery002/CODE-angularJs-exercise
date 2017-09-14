<?php
$data = [
	["name" => '慕课网', "URL" => "www.baidu,com"],
	["name" => '极客学院', "URL" => "www.google.com"]
];

echo json_encode($data,JSON_UNESCAPED_UNICODE);
