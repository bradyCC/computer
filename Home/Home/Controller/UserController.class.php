<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    //用户注册页面
    public function index(){

        //分配标题
        $title = "用户注册页面";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //注册自动验证
    public function insert(){

        $db = D('User');
        //自动验证
        if($db->create()){
            //验证通过,则添加数据
            $id = $db->add();
            $rows = $db->find($id);

            session(null);

            $_SESSION['home_username'] = $rows['username'];
            $_SESSION['home_password'] = $rows['password'];
            $_SESSION['home_id'] = $rows['id'];

            //页面跳转至前台首页
            $this->success('注册成功',U('Index/index'));

        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至注册页面
            $this->error($str,U('index'));
        }
    }


    public function login(){

        $this->display();
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