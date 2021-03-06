<?php
namespace Home\Controller;
use Think\Controller;
class AboutusController extends CommonController {
    public function index(){
    	// 基础信息
        $phone         = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
 		$middle        = explode(' ',$phone['content']);
        $this->phone   = $middle['0'];
        $banquan       = M('webinfo')->where(array('type' => C('版权')))->field('content')->find();
    	$this->banquan = $banquan['content'];
    	// 1977介绍
        $this->introduction = M('text')->where(array('type' => C('1977介绍')))->field('controller,created_time,type',ture)->find();
        // 置顶图片
    	$this->picture      = M('picture')->where(array('type' => C('关于我们')))->field('controller,created_time,type',ture)->find();
		// 办学特色
        $this->special      = M('text')->where(array('type' => C('办学特色')))->field('controller,created_time,type',ture)->find();
		// 视频
        $this->video        = M('video')->where(array('type' => C('关于我们')))->field('controller,created_time,type',ture)->find();

        $this->display();
    }
}