<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {

    //前台购物车页面
    public function index(){

        //分配标题
        $title = "购物车页面-京东";
        $this->assign('title',$title);

        //删除验证码session数据,解决购物车显示异常
        unset($_SESSION['d2d977c58444271d9c780187e93f80e5']);

        //如用户已登录,显示对应收货地址
        if($_SESSION['home_id']){

            //获取登录用户的id
            $id = $_SESSION['home_id'];

            //用于查询登录用户的收货地址
            $db = M("Contact");
            $addrs = $db->where("user_id = {$id}")->select();
            //分配给模板
            $this->assign('addrs',$addrs);
        }

        //加载模板
        $this->display();
    }

    //添加商品入购物车页面
    public function insert(){

        //获取用户添加商品的id
        $id = $_GET['id'];

        //查询数据库
        $db = M("Item");
        $row = $db->where("id = {$id}")->find();

        //判断商品现有库存是否大于0
        if($row['stock']>0){

            //将商品信息存入SESSION数组,放入购物车
            //当同一个商品重复添加时，用下标id标识唯一性，不可重复
            $_SESSION['items'][$id] = $row;
            $_SESSION['items'][$id]['num'] = 1;

            //加载模板
            $this->display();
        }else{
            $this->error('抱歉，此商品库存不足，无法购买',U('Index/index'));
        }

    }

    //删除已加入购物车的商品
    public function delete(){

        //获取用户删除商品的id
        $id = $_GET['id'];

        //删除SESSION数组中的数据
        unset($_SESSION['items'][$id]);

        //删除成功后跳转至购物车页面
        $this->redirect('index');

    }

    //清空购物车
    public function deleteAll(){

        //清空SESSION数组中加入购物车的数据
        $_SESSION['items'] = array();

        //清空成功后跳转至购物车页面
        $this->redirect('index');

    }


    //累加
    public function plus(){

        //获取累加商品的id
        $id = $_GET['id'];

        //设置累加上限，不可大于商品库存
        if($_SESSION['items'][$id]['num'] < $_SESSION['items'][$id]['stock']){
            $_SESSION['items'][$id]['num']++;
        }else{
            $_SESSION['items'][$id]['num'] = $_SESSION['items'][$id]['stock'];
        }

        //累加后跳转至购物车页面
        $this->redirect('index');

    }

    //累减
    public function minus(){

        //获取累减商品的id
        $id = $_GET['id'];

        //设置累减，当累减至1时，不再执行
        if($_SESSION['items'][$id]['num'] > 1 ){
            $_SESSION['items'][$id]['num']--;
        }else{
            $_SESSION['items'][$id]['num'] = 1;
        }

        //累加后跳转至购物车页面
        $this->redirect('index');
    }

    //购物车结算
    public function count(){

        $db = M("");

        //分配标题
        $title = "购物车结算页面-京东";
        $this->assign('title',$title);

        //生成订单号
        $str = time().mt_rand();
        $number = substr(str_shuffle($str),0,10);
        $user_id = $_SESSION['home_id'];
        $time = time();
//        $status_id = 1;  //默认
        $contact_id = $_POST['id'];

        foreach ($_SESSION['items'] as $item) {
            $sql = "insert into indent(number,user_id,time,contact_id,item_id,price,num) values('{$number}','{$user_id}','{$time}','{$contact_id}','{$item['id']}','{$item['price']}','{$item['num']}')";
            //将订单输入插入数据库
            $db->execute($sql);

            //结算后减库存,更新数据库
            $newstock = $item['stock'] - $item['num'];
            $sql_s = "update item set stock='{$newstock}' where id = {$item['id']} ";
            $db->execute($sql_s);
        }

        //将订单号分配给模板
        $this->assign('number',$number);

        //加载模板
        $this->display();

        //睡眠5后页面跳转至个人中心订单查询页面
        sleep(5);

        //清空购物车
        $_SESSION['items'] = array();

        $this->redirect('PersonalCenter/indent');




    }

}