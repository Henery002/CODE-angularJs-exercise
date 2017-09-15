<?php
$data = [
	["id" => 1, "name" => '慕课网', "URL" => "www.baidu,com"],
	["id" => 2, "name" => '极客学院', "URL" => "www.google.com"]
];

echo json_encode($data,JSON_UNESCAPED_UNICODE);
