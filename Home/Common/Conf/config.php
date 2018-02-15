<?php
return array(
	//'配置项'=>'配置值'

	//数据库配置
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_NAME' => 'copyjd', // 数据库名
	'DB_USER' => 'root', // 用户名
	'DB_PWD' => 'liuping521', // 密码
	'DB_PORT' => '', // 端口
	'DB_PREFIX' => '', // 数据库表前缀

	//URL地址后缀
	'URL_HTML_SUFFIX' => '', // URL伪静态后缀设置

	// URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	'URL_MODEL' => 1,
	// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

	'TMPL_TEMPLATE_SUFFIX' => '.html', // 默认模板文件后缀

	//模板替换兼容
	'TMPL_PARSE_STRING' => array(
		//后台模板替换原则,MODULE_NAME当前模块名称,APP_NAME是在入口文件index.php中指定的常量
		//通过这样的方式，我们又回到thinkphp3.1.3中模板替换原则
		'../Public' => __ROOT__ . '/' . APP_NAME . '/' . MODULE_NAME . '/View/Public',
		'__CSS__' => __ROOT__ . '/' . APP_NAME . '/' . MODULE_NAME . '/View/Public/css',
		'__JS__' => __ROOT__ . '/' . APP_NAME . '/' . MODULE_NAME . '/View/Public/js',
		'__IMG__' => __ROOT__ . '/' . APP_NAME . '/' . MODULE_NAME . '/View/Public/images',
	),

	//静态缓存
	'HTML_CACHE_ON' => true, // 开启静态缓存
	'HTML_CACHE_TIME' => 60, // 全局静态缓存有效期（秒）
	'HTML_FILE_SUFFIX' => '.shtml', // 设置静态缓存文件后缀
	'HTML_CACHE_RULES' => array( // 定义静态缓存规则

//        定义全局的静态缓存规则
		'*' => array('{$_SERVER.REQUEST_URI|md5}'),
	),

//    //开启URL路由
	//    'URL_ROUTER_ON'   => true,
	//    //配置路由转换规则
	//    'URL_ROUTE_RULES'=>array(
	//        'course/:id'               => 'Home/Index/index',
	//    ),

);