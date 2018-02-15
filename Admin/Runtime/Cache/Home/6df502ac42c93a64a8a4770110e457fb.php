<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    
    <link rel="stylesheet" href="/copyjd/Admin/Home/View/Public/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/copyjd/Admin/Home/View/Public/css/Index_index.css">
    <link rel="stylesheet" href="/copyjd/Admin/Home/View/Public/css/Advert_index.css">
    <style>
        table tr td{
            vertical-align: middle!important;
        }
    </style>

</head>
<body>
<div class="container">
    <!-- 顶部导航条-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!--后台欢迎页面链接-->
                <a href="/copyjd/admin.php/Home/Index/index" class="navbar-brand">京东后台管理系统</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <!--前台首页链接-->
                    <li><a href="/copyjd/index.php/Home/Index/index">首页</a></li>
                    <!--后台管理下拉菜单-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">后台管理
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><?php echo ($_SESSION['admin_username']); ?></a></li>
                            <li class="divider"></li>
                            <li><a href="#myModal" data-toggle="modal">修改密码</a></li>
                            <li><a href="/copyjd/admin.php/Home/Login/logout" onclick="return confirm('您确认退出吗？')" >退出系统</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 修改密码弹出框 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">管理员密码修改：</h4>
                </div>
                <form action="/copyjd/admin.php/Home/Index/update" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="password" class="control-label">新密码：</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <input type="hidden" name="id" value="<?php echo ($_SESSION['id']); ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- 栅格布局设计界面 -->
    <div class="row">
        <!-- 左侧设计 -->
        <div class="col-md-2">
            <!-- 左侧折叠菜单 -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <!-- 会员管理 -->
                <div class="panel panel-primary panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                会员管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse User" role="tabpanel" aria-labelledby="headingOne">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/User/index/cls/User" class="list-group-item">查看会员</a>
                            <a href="/copyjd/admin.php/Home/User/add/cls/User" class="list-group-item">添加会员</a>
                        </div>
                    </div>
                </div>
                <!-- 广告管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                广告管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse Advert" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Advert/index/cls/Advert" class="list-group-item">查看广告</a>
                            <a href="/copyjd/admin.php/Home/Advert/add/cls/Advert" class="list-group-item">添加广告</a>
                        </div>
                    </div>
                </div>
                <!-- 分类管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                分类管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse Class" role="tabpanel" aria-labelledby="headingThree">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Class/index/cls/Class" class="list-group-item">查看分类</a>
                            <a href="/copyjd/admin.php/Home/Class/add/cls/Class" class="list-group-item">添加分类</a>
                        </div>
                    </div>
                </div>
                <!-- 品牌管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                品牌管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse Brand" role="tabpanel" aria-labelledby="headingFour">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Brand/index/cls/Brand" class="list-group-item">查看品牌</a>
                            <a href="/copyjd/admin.php/Home/Brand/add/cls/Brand" class="list-group-item">添加品牌</a>
                        </div>
                    </div>
                </div>
                <!-- 商品管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                商品管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse Item" role="tabpanel" aria-labelledby="headingFive">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Item/index/cls/Item" class="list-group-item">查看商品</a>
                            <a href="/copyjd/admin.php/Home/Item/add/cls/Item" class="list-group-item">添加商品</a>
                        </div>
                    </div>
                </div>
                <!-- 评论管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                评论管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse Comment" role="tabpanel" aria-labelledby="headingSix">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Comment/index/cls/Comment" class="list-group-item">查看评论</a>
                        </div>
                    </div>
                </div>
                <!-- 订单状态管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                订单状态
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse Status" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Status/index/cls/Status" class="list-group-item">查看订单状态</a>
                            <a href="/copyjd/admin.php/Home/Status/add/cls/Status" class="list-group-item">添加订单状态</a>
                        </div>
                    </div>
                </div>
                <!-- 订单管理 -->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingEight">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                订单管理
                            </a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse Indent" role="tabpanel" aria-labelledby="headingEight">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Indent/index/cls/Indent" class="list-group-item">查看订单</a>
                        </div>
                    </div>
                </div>
                <!--商品图片上传-->
                <div class="panel panel-primary  panel">
                    <div class="panel-heading" role="tab" id="headingNine">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                图片上传
                            </a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse Image" role="tabpanel" aria-labelledby="headingNine">
                        <div class="list-group">
                            <a href="/copyjd/admin.php/Home/Image/index/cls/Image" class="list-group-item">图片上传</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--右侧设计 -->
        <div class="col-md-10">
            
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">查看广告</div>
        </div>
        <form action="/copyjd/admin.php/Home/Advert/delAll" method="post">
            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th>编号</th>
                    <th>图片名</th>
                    <th>位置</th>
                    <th>URL地址</th>
                    <th>多选</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
                <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                        <td class="td_width"><?php echo ($row['id']); ?></td>
                        <td class="td_img"><img src="<?php echo ($row['img']); ?>" alt="" width="250" height="50" ></td>
                        <td class="td_width"><?php echo ($row['position']?"底部":"顶部"); ?></td>
                        <td><?php echo ($row['url']); ?></td>
                        <td class="td_width"><input type="checkbox" name="del[]" value="<?php echo ($row['id']); ?>"></td>
                        <td class="td_width"><a href="/copyjd/admin.php/Home/Advert/save/cls/Advert/id/<?php echo ($row['id']); ?>" class="btn btn-success">修改</a></td>
                        <td class="td_width"><a href="/copyjd/admin.php/Home/Advert/delete/id/<?php echo ($row['id']); ?>" class="btn btn-danger del">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
        <div class="panel-footer">
            <!--分页-->
            <button class="btn btn-info page"><?php echo ($page); ?></button>
            <div class="button">
                <button class="btn btn-primary check_all">全选</button>
                <button class="btn btn-warning clear_all">取消</button>
                <button class="btn btn-danger del_all">删除</button>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>

    <script src="/copyjd/Admin/Home/View/Public/bs/js/jquery-3.2.1.min.js"></script>
    <script src="/copyjd/Admin/Home/View/Public/bs/js/bootstrap.min.js"></script>
    <script src="/copyjd/Admin/Home/View/Public/js/User_index.js"></script>
    <script>
        //模板继承左边栏显示特效
        cls = "<?php echo ($_GET['cls']); ?>"?"<?php echo ($_GET['cls']); ?>":"";
        $("."+cls).show();
    </script>

</body>
</html>