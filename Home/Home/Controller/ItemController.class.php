<?php
namespace Home\Controller;
use Think\Controller;
class ItemController extends Controller {

    //前台商品页面
    public function index(){

        //分配标题
        $title = "商品页面-京东";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //商品详情页面
    public function detail(){

        //获取用户点击图片的id
        $id = $_GET['id'];

        //多表查询商品信息
        $db = M("");
        $sql = "select item.*,classname,brandname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and item.id = {$id}";
        $rows = $db->query($sql);
        //遍历,获取一维数组
        foreach ($rows as $value) {
            $row = $value;
        }

        //将一维数组分配给模板
        $this->assign('row',$row);

        //多表查询商品对应评论信息
        $sql_com = "select comment.*,username,itemname from comment,user,item where comment.user_id = user.id and comment.item_id = item.id and item.id = {$id}";
        $rows_com = $db->query($sql_com);

        //分配给模板
        $this->assign('rows_com',$rows_com);

        //加载模板
        $this->display();
    }


}