<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    
    <title><?php echo ($title); ?></title>
    
    <!--网站title图标 shortcut icon-->
    <link rel="shortcut icon" href="/copyjd/Public/images/logo.ico">
    <!--消除塌陷-->
    <link rel="stylesheet" href="/copyjd/Home/Home/View/Public/css/clearfix.css">
    <!--头部header区样式-->
    <link rel="stylesheet" href="/copyjd/Home/Home/View/Public/css/Index_header.css">
    <!--模板继承调整主体CSS样式-->
    
        <!--主体main区样式-->
        <link rel="stylesheet" href="/copyjd/Home/Home/View/Public/css/Index_main.css">
    
    <!--底部footer区样式-->
    <link rel="stylesheet" href="/copyjd/Home/Home/View/Public/css/Index_footer.css">
    <style>
        /*基准样式*/
        * {
            margin: 0;
            padding: 0;
            font-family: "微软雅黑", "宋体";
            font-size: 12px;
        }
        a {
            color: #666;
            text-decoration: none;
        }
        body {
            height: 100%;
            /*color: #666;*/
        }
        ol, ul {
            list-style: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /*头部广告advert区样式*/
        .header_advert {
            width: 1210px;
            height: 200px;
            margin: 0 auto 15px;
            position: relative;
        }
        .header_advert img {
            display: block;
            position: absolute;

        }

        /*头部搜索search区样式*/
        .header_search {
            width: 1210px;
            height: 100px;
            margin: 0 auto 15px;
            background: #f8f8f8;
        }
        .header_search .left {
            width: 100px;
            height: 100px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            overflow: hidden;
            margin-left: 75px;
            float: left;
        }
        .header_search .left img {
            display: block;
        }
        .header_search .middle {
            width: 600px;
            height: 100px;
            float: left;
            margin-left: 150px;
            position: relative;
        }
        .search {
            width: 540px;
            height: 32px;
            border: 3px solid #c00;
            position: absolute;
            top: 30px;
            left: 25px;
        }
        .search input[type="text"] {
            width: 440px;
            height: 22px;
            line-height: 22px;
            padding: 5px;
            float: left;
            border: 0;
        }
        .search input[type="text"]:focus {
            outline: none;
        }
        .search input[type="submit"] {
            width: 90px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            font-size: 16px;
            color: #fff;
            background: #c00;
            cursor: pointer;
            float: right;
            border: 0;
        }
        .header_search .right {
            width: 100px;
            height: 100px;
            float: right;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            overflow: hidden;
            margin-right: 75px;
        }
        .header_search .right img {
            display: block;
        }

        /*底部广告advert区样式*/
        .footer_advert {
            width: 1210px;
            height: 200px;
            margin: 0 auto 15px;
            position: relative;
        }
        .footer_advert img {
            display: block;
            position: absolute;
        }

    </style>
</head>
<body>
<!--头部header区 start-->
<header>
    <!--头部导航nav区-->
    <nav>
        <!--左侧导航-->
        <ul class="left">
            <li><img src="/copyjd/Public/images/logo.png" width="30" height="31" alt=""></li>
            <li><a href="/copyjd/index.php/Home/Index/index">京东首页</a></li>
            <li><a href="javascript:">济南</a></li>
        </ul>
        <!--右侧导航-->
        <ul class="right">
            <li><a href="/copyjd/index.php/Home/Login/index" class="red login"><?php echo ((isset($_SESSION['home_username']) && ($_SESSION['home_username'] !== ""))?($_SESSION['home_username']): '请登录'); ?></a>
            </li>
            <li><a href="/copyjd/index.php/Home/Login/logout" class="logout">退出</a></li>
            <li><a href="/copyjd/index.php/Home/User/index">免费注册</a></li>
            <li class="">|</li>
            <li><a href="/copyjd/index.php/Home/Cart/index">购物车</a></li>
            <li class="">|</li>
            <li><a href="/copyjd/index.php/Home/PersonalCenter/indent">我的订单</a></li>
            <li class="">|</li>
            <li><a href="/copyjd/index.php/Home/PersonalCenter/index">个人中心</a></li>
            <li class="">|</li>
            <li><a href="/copyjd/index.php/Home/PersonalCenter/server">客户服务</a></li>
        </ul>
    </nav>
</header>
<!--头部header区 end-->

<!--模板继承调整头部广告advert区-->

    <!--头部广告advert区 start-->
    <div class="header_advert">
        <img src="<?php echo ($h_adv); ?>" width="1210" height="200" alt="">
    </div>
    <!--头部广告advert区 end-->


<!--模板继承调整头部搜索search区-->

    <!--头部搜索search区 start-->
    <!--<div class="header_search">-->
        <!--<div class="left">-->
            <!--<img src="/copyjd/Public/images/logo.jpg" alt="" width="100px" height="100px">-->
        <!--</div>-->
        <!--<div class="middle">-->
            <!--<div class="search">-->
                <!--<form action="#" method="post">-->
                    <!--<input type="text" placeholder="Apple苹果 MacBook pro">-->
                    <!--<input type="submit" value="搜索">-->
                <!--</form>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="right">-->
            <!--<img src="/copyjd/Public/images/logo.jpg" alt="" width="100px" height="100px">-->
        <!--</div>-->
    <!--</div>-->
    <!--头部搜索search区 end-->


<!--模板继承调整主体main区-->

    <!--主体main区 start-->
    <main>
        <!--电脑整机complete区 start-->
        <div class="complete">
            <div class="header">
                <span class="title">1F 电脑整机</span>
                <span class="sub_title">狠有新机 好品如潮</span>
                <a href="/copyjd/index.php/Home/Class/complete" class="info">更多 &gt;&gt;</a>
            </div>
            <div class="main">
                <div class="left">
                    <div class="img">
                        <a href="javascript:">
                            <img src="/copyjd/Home/Home/View/Public/images/main/complete/com_left.jpg" width="243" height="538" alt="">
                        </a>
                    </div>
                    <div class="hot_list">
                        <b></b>
                        <h4>热门关注</h4>
                        <a href="javascript:">小米Air带独显的轻薄本</a>
                        <a href="javascript:">LG重新定义-超轻薄笔记本</a>
                        <a href="javascript:">雷神Dino新概念游戏本</a>
                        <a href="javascript:">戴尔“吃鸡”台式机新品上市</a>
                    </div>
                </div>
                <div class="middle">
                    <ul class="nav_list clearfix">
                        <li class="nav_item">热门</li>
                        <li class="nav_item">笔记本</li>
                        <li class="nav_item">台式机</li>
                        <li class="nav_item">游戏本</li>
                        <li class="nav_item">一体机</li>
                    </ul>
                    <div class="tab_cont">
                        <div class="cont_item">
                            <div class="banner_top">
                                <ul class="banner_list">
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/complete/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/complete/top/banner_2.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/complete/top/banner_3.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/complete/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="banner_nav">
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                </ul>
                                <!--<a class="prev" href="javascript:">&lt;</a>-->
                                <!--<a class="next" href="javascript:">&gt;</a>-->
                            </div>
                            <ul class="banner_bottom clearfix">
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/complete/bottom/banner_left.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/complete/bottom/banner_middle.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/complete/bottom/banner_right.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_m)): $i = 0; $__LIST__ = $items_m;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_m): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_m['id']); ?>">
                                            <img src="<?php echo ($item_m['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_m['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_m['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_a)): $i = 0; $__LIST__ = $items_a;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_a): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_a['id']); ?>">
                                            <img src="<?php echo ($item_a['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_a['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_a['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_p)): $i = 0; $__LIST__ = $items_p;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_p): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_p['id']); ?>">
                                            <img src="<?php echo ($item_p['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_p['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_p['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_o)): $i = 0; $__LIST__ = $items_o;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_o): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_o['id']); ?>">
                                            <img src="<?php echo ($item_o['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_o['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_o['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <ul class="rank_nav clearfix">
                        <li class="rank_item">热卖排行榜</li>
                        <li class="rank_item">游戏本排行榜</li>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_m)): $i = 0; $__LIST__ = $items_m;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_m): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_m['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_m['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_m['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_m['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_a)): $i = 0; $__LIST__ = $items_a;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_a): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_a['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_a['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_a['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_a['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--电脑整机complete区 end-->

        <!--电脑配件parts区 start-->
        <div class="parts">
            <div class="header">
                <span class="title">2F 电脑配件</span>
                <span class="sub_title">Do it Yourself~装机有“套路”</span>
                <a href="/copyjd/index.php/Home/Class/parts" class="info">更多 &gt;&gt;</a>
            </div>
            <div class="border"></div>
            <div class="main">
                <div class="left">
                    <div class="img">
                        <a href="javascript:">
                            <img src="/copyjd/Home/Home/View/Public/images/main/parts/pa_left.jpg" width="243" height="538" alt="">
                        </a>
                    </div>
                    <div class="hot_list">
                        <b></b>
                        <h4>热门关注</h4>
                        <a href="javascript:">电竞装备大放价</a>
                        <a href="javascript:">“吃鸡”装备</a>
                        <a href="javascript:">超神利器</a>
                    </div>
                </div>
                <div class="middle">
                    <ul class="nav_list">
                        <li class="nav_item curr">热门</li>
                        <li class="nav_item">核心配件</li>
                        <li class="nav_item">主板显示</li>
                        <li class="nav_item">显示器</li>
                        <li class="nav_item">机箱电源</li>
                    </ul>
                    <div class="tab_cont">
                        <div class="cont_item">
                            <div class="banner_top">
                                <ul class="banner_list">
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/parts/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/parts/top/banner_2.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/parts/top/banner_3.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/parts/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="banner_nav">
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                </ul>
                                <!--<a class="prev" href="javascript:">&lt;</a>-->
                                <!--<a class="next" href="javascript:">&gt;</a>-->
                            </div>
                            <ul class="banner_bottom clearfix">
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/parts/bottom/banner_left.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/parts/bottom/banner_middle.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/parts/bottom/banner_right.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_d)): $i = 0; $__LIST__ = $items_d;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_d): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_d['id']); ?>">
                                            <img src="<?php echo ($item_d['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_d['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_d['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_c)): $i = 0; $__LIST__ = $items_c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_c): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_c['id']); ?>">
                                            <img src="<?php echo ($item_c['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_c['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_c['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_d)): $i = 0; $__LIST__ = $items_d;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_d): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_d['id']); ?>">
                                            <img src="<?php echo ($item_d['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_d['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_d['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_c)): $i = 0; $__LIST__ = $items_c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_c): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_c['id']); ?>">
                                            <img src="<?php echo ($item_c['img']); ?>" width="160" height="160" alt="">
                                            <P class="p_name"><?php echo ($item_c['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_c['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <ul class="rank_nav clearfix">
                        <li class="rank_item">热卖排行榜</li>
                        <li class="rank_item">显示器排行榜</li>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_d)): $i = 0; $__LIST__ = $items_d;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_d): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_d['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_d['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_d['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_d['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_c)): $i = 0; $__LIST__ = $items_c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_c): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_c['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_c['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_c['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_c['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--电脑配件parts区 end-->

        <!--外设装备usb区 start-->
        <div class="usb">
            <div class="header">
                <span class="title">3F 外设装备</span>
                <span class="sub_title">各门各派 风格好货！</span>
                <a href="/copyjd/index.php/Home/Class/usb" class="info">更多 &gt;&gt;</a>
            </div>
            <div class="border"></div>
            <div class="main">
                <div class="left">
                    <div class="img">
                        <a href="javascript:">
                            <img src="/copyjd/Home/Home/View/Public/images/main/usb/usb_left.jpg" width="243" height="538" alt="">
                        </a>
                    </div>
                    <div class="hot_list">
                        <b></b>
                        <h4>热门关注</h4>
                        <a href="javascript:">游戏设备0元试用</a>
                        <a href="javascript:">雷柏鼠标新品上市 京东JOY联名款首发</a>
                        <a href="javascript:">金士顿限量版狗年纪念U盘</a>
                        <a href="javascript:">达尔优机械键盘低至99元</a>
                    </div>
                </div>
                <div class="middle">
                    <ul class="nav_list">
                        <li class="nav_item curr">热门</li>
                        <li class="nav_item">键盘</li>
                        <li class="nav_item">鼠标</li>
                        <li class="nav_item">U盘</li>
                        <li class="nav_item">移动硬盘</li>
                    </ul>
                    <div class="tab_cont">
                        <div class="cont_item">
                            <div class="banner_top">
                                <ul class="banner_list">
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/usb/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/usb/top/banner_2.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/usb/top/banner_3.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                    <li class="list_li">
                                        <a href="javascript:">
                                            <img src="/copyjd/Home/Home/View/Public/images/main/usb/top/banner_1.jpg" width="725"
                                                 height="251" alt="">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="banner_nav">
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                    <li class="nav_li"></li>
                                </ul>
                                <!--<a class="prev" href="javascript:">&lt;</a>-->
                                <!--<a class="next" href="javascript:">&gt;</a>-->
                            </div>
                            <ul class="banner_bottom clearfix">
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/usb/bottom/banner_left.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/usb/bottom/banner_middle.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                                <li class="banner_img">
                                    <a href="javascript:">
                                        <img src="/copyjd/Home/Home/View/Public/images/main/usb/bottom/banner_right.jpg" width="241"
                                             height="250" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_k)): $i = 0; $__LIST__ = $items_k;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_k): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_k['id']); ?>">
                                            <img src="<?php echo ($item_k['img']); ?>" width="160" height="160"
                                                 alt="">
                                            <P class="p_name"><?php echo ($item_k['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_k['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_mo)): $i = 0; $__LIST__ = $items_mo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_mo): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_mo['id']); ?>">
                                            <img src="<?php echo ($item_mo['img']); ?>" width="160" height="160"
                                                 alt="">
                                            <P class="p_name"><?php echo ($item_mo['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_mo['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_k)): $i = 0; $__LIST__ = $items_k;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_k): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_k['id']); ?>">
                                            <img src="<?php echo ($item_k['img']); ?>" width="160" height="160"
                                                 alt="">
                                            <P class="p_name"><?php echo ($item_k['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_k['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="cont_item">
                            <ul>
                                <?php if(is_array($items_mo)): $i = 0; $__LIST__ = $items_mo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_mo): $mod = ($i % 2 );++$i;?><li class="item_li">
                                        <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_mo['id']); ?>">
                                            <img src="<?php echo ($item_mo['img']); ?>" width="160" height="160"
                                                 alt="">
                                            <P class="p_name"><?php echo ($item_mo['itemname']); ?></P>
                                            <p class="p_price">￥<?php echo ($item_mo['price']); ?></p>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <ul class="rank_nav clearfix">
                        <li class="rank_item">热卖排行榜</li>
                        <li class="rank_item">人气排行榜</li>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_k)): $i = 0; $__LIST__ = $items_k;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_k): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_k['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_k['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_k['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_k['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="rank_cont">
                        <?php if(is_array($items_mo)): $i = 0; $__LIST__ = $items_mo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item_mo): $mod = ($i % 2 );++$i;?><li class="rank_li">
                                <a href="/copyjd/index.php/Home/Item/detail?id=<?php echo ($item_mo['id']); ?>">
                                    <div class="rank_hover">
                                        <img src="<?php echo ($item_mo['img']); ?>" width="70" height="70" alt="">
                                    </div>
                                    <div class="rank_right">
                                        <p class="p_name"><?php echo ($item_mo['itemname']); ?></p>
                                        <p class="p_price">￥<?php echo ($item_mo['price']); ?></p>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--外设装备usb区 end-->
    </main>
    <!--主体main区 end-->


<!--模板继承调整底部广告advert区-->

    <!--底部广告advert区 start-->
    <div class="footer_advert">
        <img src="<?php echo ($f_adv); ?>" width="1210" height="200" alt="">
    </div>
    <!--底部广告advert区 end-->


<!--底部footer区 start-->
<footer>
    <div class="footer_item">
        <div class="item_box">
            <img src="/copyjd/Home/Home/View/Public/images/footer/1.png" alt="">
            <img src="/copyjd/Home/Home/View/Public/images/footer/2.png" alt="">
            <img src="/copyjd/Home/Home/View/Public/images/footer/3.png" alt="">
            <img src="/copyjd/Home/Home/View/Public/images/footer/4.png" alt="">
        </div>
    </div>
    <!--底部导航nav区 start-->
    <nav>
        <ul>
            <li>
                <h5>购物指南</h5>
                <p><a href="javascript:">购物流程</a></p>
                <p><a href="javascript:">会员介绍</a></p>
                <p><a href="javascript:">生活旅行/团购</a></p>
                <p><a href="javascript:">常见问题</a></p>
                <p><a href="javascript:">大家电</a></p>
                <p><a href="javascript:">联系客服</a></p>
            </li>
            <li>
                <h5>配送方式</h5>
                <p><a href="javascript:">上门自提</a></p>
                <p><a href="javascript:">211限时达</a></p>
                <p><a href="javascript:">配送服务查询</a></p>
                <p><a href="javascript:">配送费收费标准</a></p>
                <p><a href="javascript:">海外配送</a></p>
            </li>
            <li>
                <h5>支付方式</h5>
                <p><a href="javascript:">货到付款</a></p>
                <p><a href="javascript:">在线支付</a></p>
                <p><a href="javascript:">分期付款</a></p>
                <p><a href="javascript:">邮局汇款</a></p>
                <p><a href="javascript:">公司转账</a></p>
            </li>
            <li>
                <h5>售后服务</h5>
                <p><a href="javascript:">售后政策</a></p>
                <p><a href="javascript:">价格保护</a></p>
                <p><a href="javascript:">退款说明</a></p>
                <p><a href="javascript:">返修/退换货</a></p>
                <p><a href="javascript:">取消订单</a></p>
            </li>
            <li>
                <h5>特色服务</h5>
                <p><a href="javascript:">夺宝岛</a></p>
                <p><a href="javascript:">DIY装机</a></p>
                <p><a href="javascript:">延保服务</a></p>
                <p><a href="javascript:">京东E卡</a></p>
                <p><a href="javascript:">京东通信</a></p>
                <p><a href="javascript:">京东JD+</a></p>
            </li>
        </ul>
    </nav>
    <!--底部导航nav区 end-->
</footer>
<!--底部footer区 end-->

<script src="/copyjd/Public/bs/js/holder.min.js"></script>
<script src="/copyjd/Public/bs/js/jquery-3.2.1.min.js"></script>
<script src="/copyjd/Home/Home/View/Public/js/Index_header.js"></script>

<!--模板继承调整主体js特效-->

    <script src="/copyjd/Home/Home/View/Public/js/Index_main.js"></script>


</body>
</html>