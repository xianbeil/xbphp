<?php

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

// 加载框架文件
require(APP_PATH . 'xbphp/Xbphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

session_start();

// 实例化框架类
(new xbphp\Xbphp($config))->run();