<?php
namespace Home\Controller;
use Think\Controller;
class ClassController extends Controller {

    //前台分类页面
    public function index(){

        //分配标题
        $title = "电脑_笔记本_台式机_电脑配件_办公设备-京东";
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //电脑整机页面
    public function complete(){

        //分配标题
        $title = "电脑整机-京东";
        $this->assign('title',$title);

        //动态广告
        $db = M("Advert");
        //顶部广告
        $rows = $db->where('position=0')->find();
        $h_adv = $rows['img'];
        $this->assign('h_adv',$h_adv);

        //底部广告
        $rows = $db->where('position=1')->find();
        $f_adv = $rows['img'];
        $this->assign('f_adv',$f_adv);

        //随机品牌商品图
        //苹果
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_a = $db->query($sql);
        $this->assign('items_a',$items_a);

        //小米
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_b = $db->query($sql);
        $this->assign('items_b',$items_b);

        //联想
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_c = $db->query($sql);
        $this->assign('items_c',$items_c);

        //戴尔
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_d = $db->query($sql);
        $this->assign('items_d',$items_d);

        //微软
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_e = $db->query($sql);
        $this->assign('items_e',$items_e);

        //加载模板
        $this->display();
    }

    //电脑配件页面
    public function parts(){

        //分配标题
        $title = "电脑配件-京东";
        $this->assign('title',$title);

        //动态广告
        $db = M("Advert");
        //顶部广告
        $rows = $db->where('position=0')->find();
        $h_adv = $rows['img'];
        $this->assign('h_adv',$h_adv);

        //底部广告
        $rows = $db->where('position=1')->find();
        $f_adv = $rows['img'];
        $this->assign('f_adv',$f_adv);

        //随机品牌商品图
        //苹果
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_a = $db->query($sql);
        $this->assign('items_a',$items_a);

        //小米
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_b = $db->query($sql);
        $this->assign('items_b',$items_b);

        //联想
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_c = $db->query($sql);
        $this->assign('items_c',$items_c);

        //戴尔
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_d = $db->query($sql);
        $this->assign('items_d',$items_d);

        //微软
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_e = $db->query($sql);
        $this->assign('items_e',$items_e);

        //加载模板
        $this->display();
    }

    //外设装备页面
    public function usb(){

        //分配标题
        $title = "外设装备-京东";
        $this->assign('title',$title);

        //动态广告
        $db = M("Advert");
        //顶部广告
        $rows = $db->where('position=0')->find();
        $h_adv = $rows['img'];
        $this->assign('h_adv',$h_adv);

        //底部广告
        $rows = $db->where('position=1')->find();
        $f_adv = $rows['img'];
        $this->assign('f_adv',$f_adv);

        //随机品牌商品图
        //苹果
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_a = $db->query($sql);
        $this->assign('items_a',$items_a);

        //小米
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_b = $db->query($sql);
        $this->assign('items_b',$items_b);

        //联想
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_c = $db->query($sql);
        $this->assign('items_c',$items_c);

        //戴尔
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_d = $db->query($sql);
        $this->assign('items_d',$items_d);

        //微软
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and is_shelf = 1 order by rand() limit 10";
        $items_e = $db->query($sql);
        $this->assign('items_e',$items_e);

        //加载模板
        $this->display();
    }
}