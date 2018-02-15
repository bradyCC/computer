<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/24
 * Time: 下午10:57
 */

// 应用入口文件

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	die('require PHP > 5.3.0 !');
}

//定义应用目录
define('APP_PATH', './Admin/');

//兼容thinkphp3.1.3中模板替换原则
//定义应用名
define('APP_NAME', 'Admin');
//定义默认模板名
define('MODULE_NAME', 'Home');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', True);

// 引入ThinkPHP入口文件
include "ThinkPHP/ThinkPHP.php";
