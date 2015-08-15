<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends CommonController {
    public function index(){
    	// 提取幻灯片数据
    	$this->scrollLeft  = M('scroll')->where(array('leftOrRight' => C('左')))->field('id,pic_adr')->order('sort')->select();
    	$this->scrollRight = M('scroll')->where(array('leftOrRight' => C('右')))->field('id,pic_adr')->order('sort')->select();
        // 友情链接
        $this->friend      = M('friend')->field('name,url')->select();
        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $beian   = M('webinfo')->where(array('type' => C('备案')))->field('content')->find();
        $banquan = M('webinfo')->where(array('type' => C('版权')))->field('content')->find();
        $address = M('webinfo')->where(array('type' => C('地址')))->field('content')->find();
        $this->phone   = $phone['content'];
        $this->beian   = $beian['content'];
        $this->banquan = $banquan['content'];
        $this->address = $address['content'];
        // 显示模板
        $this->display();
    }

    public function getIndexContent(){
    	// 提取幻灯片数据
    	$scrollLeft  = M('scroll')->where(array('leftOrRight' => C('左')))->field('id,pic_adr')->order('sort')->select();
    	$scrollRight = M('scroll')->where(array('leftOrRight' => C('右')))->field('id,pic_adr')->order('sort')->select();
    	// 数据封装
    	$data = array(
    		'scrollLeft'  => $scrollLeft,
    		'scrollRight' => $scrollRight,
    	);
    	$this->ajaxReturn($data);
    }
}