<?php
namespace Home\Controller;
use Think\Controller;
class ImageController extends LockController {

    //后台图片上传首页
    public function index(){

        //分配标题
        $title = '后台图片上传页面';
        $this->assign('title',$title);

        //加载模板
        $this->display();
    }

    //图片上传、缩放
    public function upload(){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录

        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功后,制作缩略图、水印图

            //上传图片信息
//            echo "<pre>";
//            print_r($info);
//            echo "</pre>";
            //获取上传子目录的完整路径,用于保存缩略图、水印图
            //单图片上传
//            $path = './Uploads/'.$info['image']['savepath'];
            //多图片上传
//            $path = './Uploads/'.$info[0]['savepath'];

            //获取上传图片的完整路径
            //单图片上传
//            $file = $path.$info['image']['savename'];
            //多图片上传
//            $file0 = $path.$info[0]['savename'];
//            $file1 = $path.$info[1]['savename'];


            //打开上传图片
//            $image = new \Think\Image();

            //图片水印,并保留原图
            //水印位置右下角(默认)
//            $image->open($file)->water('./Public/images/logo_1.jpg')->save($path.'water_'.$info['image']['savename']);
            //水印位置左上角
//            $image->open($file)->water('./Public/images/logo_1.jpg',\Think\Image::IMAGE_WATER_NORTHWEST)->save($path.'water_'.$info['image']['savename']);
            //水印透明度
//            $image->open($file)->water('./Public/images/logo_1.jpg',\Think\Image::IMAGE_WATER_NORTHWEST,80)->save($path.'water_'.$info['image']['savename']);

            //图片水印位置选择
//            IMAGE_WATER_NORTHWEST =   1 ; //左上角水印
//            IMAGE_WATER_NORTH     =   2 ; //上居中水印
//            IMAGE_WATER_NORTHEAST =   3 ; //右上角水印
//            IMAGE_WATER_WEST      =   4 ; //左居中水印
//            IMAGE_WATER_CENTER    =   5 ; //居中水印
//            IMAGE_WATER_EAST      =   6 ; //右居中水印
//            IMAGE_WATER_SOUTHWEST =   7 ; //左下角水印
//            IMAGE_WATER_SOUTH     =   8 ; //下居中水印
//            IMAGE_WATER_SOUTHEAST =   9 ; //右下角水印

            //图片缩略
//            $image->open($file);
            //缩率尺寸为150*150，保存缩略图
//            $image->thumb(150, 150)->save($path.'thumb_150_'.$info['image']['savename']);
            //缩率尺寸为50*50，保存缩略图
//            $image->thumb(50, 50)->save($path.'thumb_50_'.$info['image']['savename']);


            //获取图片信息
//            $width = $image->width(); // 返回图片的宽度
//            $height = $image->height(); // 返回图片的高度
//            $type = $image->type(); // 返回图片的类型
//            $mime = $image->mime(); // 返回图片的mime类型
//            $size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
//
            $this->success('上传成功！');
        }
    }


}