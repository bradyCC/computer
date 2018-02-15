<?php
namespace Home\Controller;
use Think\Controller;
class BrandController extends LockController {

    //后台品牌管理页面
    public function index(){

        //分配标题
        $title='后台品牌管理页面';
        $this->assign('title',$title);

        //连接数据库
        //多表查询,获取关联数据
        $db = M('');
        $sql = "select brand.id,brandname,classname from brand,class where brand.class_id = class.id";
        $rows = $db->query($sql);

        //分页类
        $count = count($rows);    // 查询满足要求的总记录数
        $Page  = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(8)

        //分页样式
        $Page->setConfig('header', '共<b> %TOTAL_ROW% </b>个品牌&nbsp;第<b> %NOW_PAGE% </b>页/共<b> %TOTAL_PAGE% </b>页&nbsp;&nbsp;');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('theme', '%HEADER% %UP_PAGE% %FIRST% %LINK_PAGE% %END% %DOWN_PAGE% ');

        //进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $sql_l = "select brand.id,brandname,classname from brand,class where brand.class_id = class.id limit $Page->firstRow,$Page->listRows";
        $rows = $db->query($sql_l);

        $this->assign('rows',$rows);// 赋值数据集

        $show  = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        //加载模板
        $this->display();
    }

    //后台品牌添加页面
    public function add(){

        //加载模板
        $this->display();
    }

    public function insert(){

        //连接数据库
        $db = D('Brand');

        //自动验证
        if($db->create()){

            //验证通过,则添加数据
            $db->add();
            //页面跳转至品牌管理页面
            $this->success('添加成功',U('Home/Brand/index/cls/Brand'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至品牌添加页面
            $this->error($str,U('Home/Brand/add/cls/Brand'));
        }
    }

    //后台品牌删除
    public function delete($id){

        //连接数据库
        $db = M('Brand');

        //删除数据
        if($db->delete($id)){
            //如果删除成功,则页面跳转至品牌管理页面
            $this->success('删除成功',U('Home/Brand/index/cls/Brand'));
        }else{
            //如果删除失败,则页面跳转至品牌管理页面
            $this->error('删除失败',U('Home/Brand/index/cls/Brand'));
        }
    }

    //后台品牌全选删除
    public function delAll(){
        $db = M('Brand');
        //TP框架 in 结合数组删除
//      $map['id'] = array('in',$_POST['del']);
//      $db->where($map)->select();
        //用,将数组拆分成字符串
        $str = join(',',$_POST['del']);
        //删除数据
        if($db->delete($str)){
            //如果删除成功,则页面跳转至品牌管理页面
            $this->success('删除成功',U('Home/Brand/index/cls/Brand'));
        }else{
            //如果删除失败,则页面跳转至品牌管理页面
            $this->error('删除失败',U('Home/Brand/index/cls/Brand'));
        }
    }

    //后台品牌修改页面
    public function save(){

        $id = $_GET['id'];
        //连接数据库
        $db = M('Brand');
        //查询数据
        $row = $db->find($id);
        //将数据分配给模板
        $this->assign('row',$row);
        //加载模板
        $this->display();

    }

    public function update(){

        //连接数据库
        $db = D('Brand');

        //自动验证
        if($db->create()){
            //验证通过,则修改数据
            $db->save();

            //页面跳转至品牌管理页面
            $this->success('修改成功',U('Home/Brand/index/cls/Brand'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至品牌管理页面
            $this->error($str,U('Home/Brand/index/cls/Brand'));
        }
    }
}