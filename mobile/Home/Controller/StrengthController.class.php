<?php
namespace Home\Controller;
use Think\Controller;
class StrengthController extends CommonController {
    public function index(){
    	// 基础信息
        $phone         = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
 		$middle        = explode(' ',$phone['content']);
        $this->phone   = $middle['0'];   
        $banquan       = M('webinfo')->where(array('type' => C('版权')))->field('content')->find();
    	$this->banquan = $banquan['content']; 
    	// 明星师资 
    	$teacher         = M('teacher')->order('sort')->field('controller,created_time,sort',ture)->select();
        for($i=0;$i<COUNT($teacher);$i++)
        {
        	$teacher[$i]['content'] = mb_substr($teacher[$i]['content'], 0, 78, 'utf-8'); 
        	$teacher[$i]['content'] = $teacher[$i]['content'] . "...";
        }
        $this->teacher = $teacher;
        // 历届成绩
        $achievement     = M('achievement')->order('sort')->field('controller,created_time,sort',ture)->select();
        // 遍历取录入情况
        for($i=0;$i<COUNT($achievement);$i++){
        	$str = "";
        	$data = M('achievement_status')->where(array('achievement_id' => $achievement[$i]['id']))->field('achievement_id',ture)->select();
        	for($j=0;$j<COUNT($data);$j++){
        		$str = $str . $data[$j]['school'] . $data[$j]['number'] . '人;';
        	}
        	$achievement[$i]['status'] = $str;
        }
        $this->achievement = $achievement;
         // 1977作品
        $this->works       = M('picture')->where(array('type' => C('作品展示')))->field('controller,created_time,type',ture)->find();
		// 教学环境 
        $this->environment = M('picture')->where(array('type' => C('教学环境')))->field('controller,created_time,type',ture)->find();
        $this->display();
    }
}