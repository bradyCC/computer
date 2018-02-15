<?php
namespace Home\Controller;
use Think\Controller;
class LockController extends Controller {

    //后台锁
    public function _initialize(){

        //强制登录后才能访问,未登录将跳转至后台登录页面
        $id = isset($_SESSION['admin_id'])?$_SESSION['admin_id']:"";
        if(!$id){
            $this->error('请先登录',U('Login/index'));
        }
    }
}