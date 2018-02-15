<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends LockController {

    //后台评论管理页面
    public function index(){

        //分配标题
        $title = '后台评论管理页面';
        $this->assign('title',$title);

        //连接数据库
        //多表查询,获取关联数据
        $db = M('');
//        $sql = "select comment.id,username,itemname,comment.content,comment.time from comment,user,item where comment.user_id = user.id and comment.item_id = item.id";
        $sql = "select comment.*,username,itemname from comment,user,item where comment.user_id = user.id and comment.item_id = item.id";
        $rows = $db->query($sql);

        //分页类
        $count = count($rows); // 查询满足要求的总记录数
        $Page  = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(5)

        //分页样式
        $Page->setConfig('header', '共<b> %TOTAL_ROW% </b>条评论&nbsp;第<b> %NOW_PAGE% </b>页/共<b> %TOTAL_PAGE% </b>页&nbsp;&nbsp;');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('theme', '%HEADER% %UP_PAGE% %FIRST% %LINK_PAGE% %END% %DOWN_PAGE% ');

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
//        $sql_l = "select comment.id,username,itemname,comment.content,comment.time from comment,user,item where comment.user_id = user.id and comment.item_id = item.id limit $Page->firstRow,$Page->listRows";
        $sql_l = "select comment.*,username,itemname from comment,user,item where comment.user_id = user.id and comment.item_id = item.id limit $Page->firstRow,$Page->listRows";
        $rows = $db->query($sql_l);
        $this->assign('rows',$rows);// 赋值数据集

        $show  = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        //加载模板
        $this->display();

    }

    //后台评论删除
    public function delete($id){
        //连接数据库
        $db = M('Comment');

        //删除数据
        if($db->delete($id)){
            //如果删除成功,则页面跳转至评论管理页面
            $this->success('删除成功',U('Home/Comment/index/cls/Comment'));
        }else{
            //如果删除失败,则页面跳转至评论管理页面
            $this->error('删除失败',U('Home/Comment/index/cls/Comment'));
        }
    }

    //后台评论全选删除
    public function delAll(){
        $db = M('Comment');
        //TP框架 in 结合数组删除
//      $map['id'] = array('in',$_POST['del']);
//      $db->where($map)->select();
        //用,将数组拆分成字符串
        $str = join(',',$_POST['del']);
        //删除数据
        if($db->delete($str)){
            //如果删除成功,则页面跳转至评论管理页面
            $this->success('删除成功',U('Home/Comment/index/cls/Comment'));
        }else{
            //如果删除失败,则页面跳转至评论管理页面
            $this->error('删除失败',U('Home/Comment/index/cls/Comment'));
        }
    }

    //后台评论修改页面
    public function save(){

        $id = $_GET['id'];
        //连接数据库
        $db = M('Comment');
        //查询数据
        $row = $db->find($id);
        //将数据分配给模板
        $this->assign('row',$row);
        //加载模板
        $this->display();
    }
    public function update(){

        //连接数据库
        $db = D('Comment');

        //自动验证
        if($db->create()){
            //验证通过,则修改数据
            $db->save();
            //页面跳转至评论管理页面
            $this->success('修改成功',U('Home/Comment/index/cls/Comment'));
        }else{
            //批量验证错误信息返回为数组
            $err = $db->getError();
            $str = '';
            //遍历转换为字符串
            foreach ($err as $error) {
                $str.= $error.'<br>';
            }
            //显示错误信息，同时页面跳转至评论管理页面
            $this->error($str,U('Home/Comment/index/cls/Comment'));
        }

    }





}