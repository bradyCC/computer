<?php
namespace Home\Controller;
use Think\Controller;
class PersonalCenterController extends LockController {

    //前台个人中心页面
    public function index(){

        //分配标题
        $title = "个人中心页面";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //收货地址页面
    public function address(){

        //分配标题
        $title = "收货地址页面";
        $this->assign('title',$title);

        //获取登录用户的id
        $id = $_SESSION['home_id'];

        //用于查询登录用户的收货地址
        $db = M("Contact");
        $addrs = $db->where("user_id = {$id}")->select();
        //分配给模板
        $this->assign('addrs',$addrs);

        //加载模板
        $this->display();

    }

    //添加收货地址
    public function addA(){

        //分配标题
        $title = "添加收货地址页面";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }
    public function insertA(){

        //连接数据库
        $db = D('Contact');

        //获取user_id
        $arr = $_POST;
        $arr['user_id'] = $_SESSION['home_id'];

        //自动验证
        if($db->create()){

            //验证通过,则添加数据
            $db->add($arr);
            //页面跳转至收货地址页面
            $this->success('添加成功',U('address'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至收货地址页面
            $this->error($str,U('address'));
        }

    }

    //修改收货地址
    public function saveA(){

        //获取需修改的id
        $id = $_GET['id'];
        //查询数据
        $db = M("Contact");
        $row = $db->where("id = {$id}")->find();
        //分配给模板
        $this->assign('row',$row);

        //加载模板
       $this->display();

    }
    public function updateA(){

        //连接数据库
        $db = D('Contact');

        //获取user_id
        $arr = $_POST;
        $arr['user_id'] = $_SESSION['home_id'];

        //自动验证
        if($db->create()){

            //验证通过,则修改数据
            $db->save($arr);

            //页面跳转至收货地址页面
            $this->success('修改成功',U('address'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至收货地址页面
            $this->error($str,U('address'));
        }
    }

    //删除收货地址
    public function deleteA(){

        $id = $_GET['id'];
        $db = M("Contact");
        //删除数据
        if($db->delete($id)){
            //如果删除成功,则页面跳转至收货页面
            $this->success('删除成功',U('address'));
        }else{
            //如果删除失败,则页面跳转至收货地址页面
            $this->error('删除失败',U('address'));
        }

    }

    //我的订单页面
    public function indent(){

        //分配标题
        $title = "我的订单页面";
        $this->assign('title',$title);

        $id = $_SESSION['home_id'];

        //获取登录用户id
        //查询对应订单
        $db = M("");

        $sql = "select indent.*,username,statusname from indent,user,status where indent.user_id = {$id} and indent.status_id = status.id group by indent.number";
        $indents = $db->query($sql);

        //分配给模板
        $this->assign("indents",$indents);

        //加载模板
        $this->display();
    }

    //订单商品详情页面
    public function detail(){

        //分配标题
        $title = "订单商品详情页面";
        $this->assign('title',$title);

        //获取订单号
        $number = $_GET['number'];

        //多表查询
        $db = M("");
        $sql = "select * from item,indent where indent.item_id = item.id and indent.number = {$number}";
        $items = $db->query($sql);

        //分配给模板
        $this->assign("items",$items);

        //加载模板
        $this->display();

    }

    //用户确认收货
    public function con(){

        $confirm = 1;
        $id = $_GET['item_id'];
        $number = $_GET['number'];

        $db = M("");

        //修改订单是否确认
        $sql = "update indent set is_confirm = {$confirm} where number = {$number} and item_id = {$id}";
        $db->execute($sql);

        //当订单内商品确认后,订单状态改为已完成
        $sql_i = "select indent.*,username,statusname from indent,user,status where indent.user_id = user.id and indent.status_id = status.id group by indent.number";
        $indents = $db->query($sql_i);
        foreach ($indents as $indent) {
            if($indent['is_confirm']==1){
                $sql = "update indent set status_id = 5 where is_confirm = 1 and item_id = {$id}";
                $db->execute($sql);
            }
        }

        //页面跳转至订单详情页面
        $this->redirect("PersonalCenter/detail?number={$number}");
    }


    //商品评论页面
    public function comment(){

        //分配标题
        $title = "商品评论页面";
        $this->assign('title',$title);

        //订单号和商品id
        $number = $_GET['number'];
        $item_id = $_GET['item_id'];

        //分配给模板
        $this->assign('number',$number);
        $this->assign("item_id",$item_id);

        //加载模板
        $this->display();

    }

    //添加商品评论
    public function insertC(){

        //获取评论信息
        $content = addslashes($_POST['content']);
        $item_id = $_POST['item_id'];
        $time = time();
        $user_id = $_SESSION['home_id'];
//        $number = $_POST['number'];

        $db = M("");
        $sql = "insert into comment (user_id,item_id,content,time) values('{$user_id}','{$item_id}','{$content}','$time')";

        if($db->execute($sql)){
            //跳转至订单商品详情页面继续评论
//            $this->success('感谢您的评论',U("detail?number={$number}"));
            //跳转至商品详情页面查看评论
            $this->success('感谢您的评论',U("Item/detail?id={$item_id}"));
        }

    }


    //客户服务页面
    public function server(){

        //分配标题
        $title = "客户服务页面";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }


}