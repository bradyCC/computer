<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends LockController {

    //后台欢迎页面
    public function index(){

        //分配标题
        $title='后台欢迎页面';
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //修改管理员密码
    public function update(){

        //连接数据库
        $db = D('User');

        //自动验证
        if($db->create()){
            //md5加密
            $db->password = md5($_POST['password']);
            //验证通过,则修改数据
            $db->save();
            //页面跳转至会员管理首页
            $this->success('密码修改成功，请重新登录',U('Login/index'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至后台欢迎页面
            $this->error($str,U('index'));
        }

    }
}