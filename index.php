<?php
// 获取当前请求的URL
$request_uri = $_SERVER['REQUEST_URI'];

// 设置重定向的目标网址
$redirect_url = 'https://yyfh.com' . $request_uri;

// 执行重定向
header("Location: $redirect_url", true, 301);
exit();
?>
