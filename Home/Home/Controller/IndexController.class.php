<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //前台首页
    public function index(){

        //分配标题
        $title = "京东(JD.COM)-正品低价、品质保障、配送及时、轻松购物！";
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

        //动态商品展示
        //电脑整机区域
        //小米
        $db = M("Item");
        $items_m = $db->where('brand_id = 5 and is_shelf = 1')->select();
        $this->assign('items_m',$items_m);

        //苹果
        $db = M("Item");
        $items_a = $db->where('brand_id = 1 and is_shelf = 1')->select();
        $this->assign('items_a',$items_a);

        //游戏本
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 6 and is_shelf = 1";
        $items_p = $db->query($sql);

        $this->assign('items_p',$items_p);

        //一体机
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 7 and is_shelf = 1";
        $items_o = $db->query($sql);
        $this->assign('items_o',$items_o);

        //电脑配件区域
        //显示器
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 10 and is_shelf = 1";
        $items_d = $db->query($sql);
        $this->assign('items_d',$items_d);

        //机箱电源
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 11 and is_shelf = 1";
        $items_c = $db->query($sql);
        $this->assign('items_c',$items_c);

        //外设装备区域
        //键盘
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 12 and is_shelf = 1";
        $items_k = $db->query($sql);
        $this->assign('items_k',$items_k);

        //鼠标
        $db = M("");
        $sql = "select item.*,classname from item,brand,class where item.brand_id = brand.id and brand.class_id = class.id and class.id = 13 and is_shelf = 1";
        $items_mo = $db->query($sql);
        $this->assign('items_mo',$items_mo);


        //加载模板
        $this->display();

    }
}