<?php
namespace Home\Controller;
use Think\Controller;

class StrengthController extends CommonController {
    public function index(){
    	// 明星师资 
    	$this->teacher         = M('teacher')->order('sort')->field('controller,created_time,sort',ture)->select();

		// 历届成绩图片
        $this->achievement_pic = M('picture')->where(array('type' => C('历届成绩')))->field('controller,created_time,type',ture)->find();

        // 历届成绩
        $achievement     = M('achievement')->order('sort')->field('controller,created_time,sort',ture)->select();
        // 遍历取录入情况
        for($i=0;$i<COUNT($achievement);$i++){
        	$data = M('achievement_status')->where(array('achievement_id' => $achievement[$i]['id']))->field('achievement_id',ture)->select();
        	$achievement[$i]['status'] = $data;
        }
        $this->achievement = $achievement;

        // 1977作品
        $this->works       = M('picture')->where(array('type' => C('作品展示')))->field('controller,created_time,type',ture)->find();

		// 教学环境 
        $this->environment = M('picture')->where(array('type' => C('教学环境')))->field('controller,created_time,type',ture)->find();

        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone   = $phone['content'];

        $this->display();
    }
}