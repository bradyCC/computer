<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    //后台登录页面
    public function index(){

        //分配标题
        $title = '后台登录页面';
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //清空session
    public function logout(){

//        //清空session数组
//        $_SESSION = array();
//        //删除客户端cookie文件
//        setcookie('PHPSESSID','',time()-3600,'/');
//        //删除服务器上PHPSESSID所对应的session文件
//        session_destroy();
//        //跳转至后台登录页面
//        $this->success('欢迎下次光临',U('index'));

        //Tp删除session
//        if(!session(null)) {
//            $this->success('欢迎下次光临',U('index'));
//        }

        //清空session前保留前台登录信息
        $arr['home_username'] = $_SESSION['home_username'];
        $arr['home_password'] = $_SESSION['home_password'];
        $arr['home_id'] = $_SESSION['home_id'];

        //清空session
        $_SESSION = array();

        //将前台登录信息存入session中,避免后台退出影响前台用户
        $_SESSION = $arr;

        //跳转至后台登录页面
        $this->success('欢迎下次光临',U('index'));
    }


    //后台登录验证
    public function check(){

        //将用户输入的用户名和密码存入数组中,组成where查询条件
        $arr['username'] = $_POST['username'];
        $arr['password'] = md5($_POST['password']);
        $arr['is_admin'] = 1;
        //连接数据库
        $db = M('User');
        //查询是否为管理员
        if($db->where($arr)->find()){
            //如是管理员,将数据存入session
            $rows = $db->where($arr)->find();
            $_SESSION['admin_username'] = $arr['username'];
            $_SESSION['admin_password'] = $arr['password'];
            $_SESSION['admin_id'] = $rows['id'];

//            echo "<pre>";
//            print_r($_SESSION);
//            echo "</pre>";
            //页面跳转至后台欢迎页面
            $this->success('欢迎管理员登录',U('Index/index'));
        }else{
            //如不是管理员,页面跳转至后台登录页面
            $this->error('非管理员无法登录',U('index'));
        }
    }
}