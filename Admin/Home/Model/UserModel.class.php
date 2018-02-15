<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/25
 * Time: 上午11:32
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model{

    //自动完成
    protected $_auto = array (
        array('time','time',1,'function'), // 对time字段在新增的时候写入当前时间戳        (数据插入时)
//      array('time','time',2,'function'), // 对time字段在更新的时候写入当前时间戳       （数据修改时）
//      array('time','time',3,'function'), // 对time字段在新增和编辑的时候写入当前时间戳 （数据插入和修改时）
//      array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
    );

    //批量验证
    protected $patchValidate = true;  //系统支持数据的批量验证功能，只需要在模型类里面设置patchValidate属性为true（ 默认为false）

    //自动验证
    protected $_validate = array(
      array('username','','帐号名已存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
      array('password','8,50','密码长度不得少于八位！',0,'length',3), // 在新增和编辑的时候验证密码长度是否少于八位
//      array('repassword','password','两次密码输入不一致',0,'confirm',3), // 在新增和编辑的时候验证确认密码是否和密码一致
//      array('email','/^\w+@\w+\.\w+$/i','邮箱格式不正确！',0,'regex',3), // 在新增和编辑的时候验证邮箱格式是否正确
//      array('fcode','chkcode','验证码错误！',0,'callback',1), //在新增的时候验证验证码输入是否正确
//      array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
//      array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
    );
}