<?php
namespace Home\Controller;
use Think\Controller;

class ConsultusController extends CommonController {
    public function index(){
        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone   = $phone['content'];
   		// 读取文章
    	$data = M('consult')->order('id desc')->field('content,controller',true)->select();
    	// 取年月日舍去时间
    	for($i=0;$i<COUNT($data);$i++){
    		$middle = explode(' ',$data[$i]['created_time']);
    		$data[$i]['created_time'] = $middle['0'];
    	}
    	// 数据映射
    	$this->consult = $data;
    	// 模板显示
        $this->display();
    }

    public function article(){
        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone   = $phone['content'];
    	// 获取参数
    	$id = $_GET['id'];
    	// 读取数据
    	$data = M('consult')->field('introuction,controller',true)->find($id);
    	// 取年月日舍去时间
    	$middle = explode(' ',$data['created_time']);
    	$data['created_time'] = $middle['0'];
        // 更新点击数
        $click = array(
            'id'    => $id,
            'click' => $data['click']+1
        );
        M('consult')->data($click)->save();
    	// 数据映射
    	$this->data = $data;
    	// 模板显示
    	$this->display();
    }
}