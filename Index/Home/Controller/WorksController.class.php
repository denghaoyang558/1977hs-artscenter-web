<?php
namespace Home\Controller;
use Think\Controller;

class WorksController extends CommonController {

    public function secai(){
        // 基础信息
        $phone              = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone        = $phone['content'];
        //读取数据
    	$this->works = M('works')->where(array('type' => C('色彩')))->order('sort')->field('pic_adr')->select();
        // 显示模板
        $this->display();
    }

    public function sumiao(){
        // 基础信息
        $phone              = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone        = $phone['content'];
        //读取数据
    	$this->works = M('works')->where(array('type' => C('素描')))->order('sort')->field('pic_adr')->select();
        // 显示模板
        $this->display();
    }

    public function suxie(){
    	// 基础信息
        $phone              = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone        = $phone['content'];
        //读取数据
    	$this->works = M('works')->where(array('type' => C('速写')))->order('sort')->field('pic_adr')->select();
        // 显示模板
        $this->display();
    }

    public function student(){
    	// 基础信息
        $phone              = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone        = $phone['content'];
    	//读取数据
    	$this->works = M('works')->where(array('type' => C('学生作品')))->order('sort')->field('pic_adr')->select();
        // 显示模板
        $this->display();
    }
}