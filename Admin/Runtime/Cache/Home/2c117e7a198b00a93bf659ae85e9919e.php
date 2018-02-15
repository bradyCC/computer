<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/copyjd/Admin/Home/View/Public/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/copyjd/Admin/Home/View/Public/css/Login_index.css">
    <style>
        body{
            background: url(/copyjd/Admin/Home/View/Public/images/bg_4.jpeg);
        }
    </style>
</head>
<body>
<div class="signin">
    <div class="signin_head">
        <img src="/copyjd/Public/images/logo.jpg" alt="" class="img-circle">
    </div>
    <form class="form_signin" action="/copyjd/admin.php/Home/Login/check" method="post">
        <input type="text" class="form-control" name="username" placeholder="用户名" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="密码" required>
        <input class="btn btn-lg btn-warning btn-block" type="submit" value="登录">
        <label class="checkbox">
            <input type="checkbox" value="remember_me"> 记住我
        </label>
    </form>
</div>
<script src="/copyjd/Admin/Home/View/Public/js/jquery-1.11.3.min.js"></script>
<script src="/copyjd/Admin/Home/View/Public/bs/js/bootstrap.min.js"></script>
</body>
</html>