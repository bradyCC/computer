<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    //用户登录页面
    public function index(){

        //分配标题
        $title = "用户登录页面";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //登录验证
    public function check(){

        //将用户输入的用户名和密码存入数组中,组成where查询条件
        $arr['username'] = $_POST['username'];
        $arr['password'] = md5($_POST['password']);
        $arr['is_admin'] = 0;
        //连接数据库
        $db = M('User');
        //查询用户密码
        if($db->where($arr)->find()){
            //如是用户名密码正确,将数据存入session
            $rows = $db->where($arr)->find();
            $_SESSION['home_username'] = $arr['username'];
            $_SESSION['home_password'] = $arr['password'];
            $_SESSION['home_id'] = $rows['id'];
            //页面跳转至前台首页
            $this->success("欢迎 {$_SESSION['home_username']} 登录",U('Index/index'));
        }else{
            //如用户名密码不正确,页面跳转至后台登录页面
            $this->error('用户名密码不正确，请重新登录',U('index'));
        }
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
//            $this->success('欢迎下次登录',U('Index/index'));
//        }

        //退出时不清空购物车
        $arr['items'] = $_SESSION['items'];

        //前台用户退出时，保留后台登录信息
        $arr['admin_username'] = $_SESSION['admin_username'];
        $arr['admin_password'] = $_SESSION['admin_password'];
        $arr['admin_id'] = $_SESSION['admin_id'];

        //清空session中的用户信息
        $_SESSION = array();

        //将购物车内数据和后台登录信息存入session，避免前台用户退出影响后台使用
        $_SESSION = $arr;

        //页面跳转至前台首页
        $this->success('欢迎下次登录',U('Index/index'));


    }


    //生成验证码
    public function vcode(){
//        ob_clean();

        //Think\Verify类可以支持验证码的生成和验证功能。
        $Verify = new \Think\Verify();     //命名空间  和3.1不同，我们无需在实例化命名空间定义的类之前导入类库文件了。
        $Verify->fontSize = 14;            //验证码字体大小（像素） 默认为25
        $Verify->length   = 4;             //验证码位数
//        $Verify->useNoise = false;         //是否添加杂点 默认为true
        $Verify->imageW = 120;             //验证码宽度 设置为0为自动计算
        $Verify->imageH = 30;              //验证码高度 设置为0为自动计算
        $Verify->fontttf = '5.ttf';        //验证码的字体是随机使用 ThinkPHP/Library/Think/Verify/ttfs/目录下面的字体文件
//        $Verify->useImgBg = true;          //开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
//        $Verify->codeSet = '0123456789';   //设置验证码字符为纯数字
//        $Verify->zhSet = '们以我到他会作时要动国产的一是工';//设置验证码字符为中文
//        $Verify->useZh = true;             //使用中文验证码
        $Verify->entry();
    }


}