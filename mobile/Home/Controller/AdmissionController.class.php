<?php
namespace Home\Controller;
use Think\Controller;
class AdmissionController extends CommonController {
    public function index(){
    	// 基础信息
        $phone         = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
 		$middle        = explode(' ',$phone['content']);
        $this->phone   = $middle['0'];   
        $banquan       = M('webinfo')->where(array('type' => C('版权')))->field('content')->find();
    	$this->banquan = $banquan['content'];

    	// 联系方式
    	$contact = M('contact')->field('created_time,controller',true)->select();
        // 遍历取得数据
        for($i=0;$i<COUNT($contact);$i++){
        	if($contact[$i]['title'] == "1977画室地址")
        		$this->address       = $contact[$i]['content'];
        	if($contact[$i]['title'] == "1977画室电话")
        		$this->call          = $contact[$i]['content'];
        	if($contact[$i]['title'] == "1977官方网站")
        		$this->web           = $contact[$i]['content'];
        	if($contact[$i]['title'] == "咨询QQ")
        		$this->qq            = $contact[$i]['content'];
        	if($contact[$i]['title'] == "微信公众平台名")
        		$this->wechatName    = $contact[$i]['content'];
        	if($contact[$i]['title'] == "邮箱")
        		$this->email         = $contact[$i]['content'];
        	if($contact[$i]['title'] == "微信公众平台号")
        		$this->wechatNumber  = $contact[$i]['content'];
        }

        // 报名方式
        $admission = M('admission')->field('created_time,controller',true)->select();
		// 遍历取得数据
        for($i=0,$j=0;$i<COUNT($admission);$i++){
        	if($admission[$i]['title'] != '其他说明'){
        		$data[$j]['title']   = $admission[$i]['title'];
        		$data[$j]['content'] = $admission[$i]['content'];
        		$j++;
        	}else{
        		$this->ps = $admission[$i]['content'];
        	}
        }
        // 数据映射
        $this->admission = $data;

         // 教学安排
        $this->eduction  = M('text')->where(array('type' => C('教学安排')))->field('controller,created_time,type',ture)->find();

        // 生活安排
        $this->life      = M('text')->where(array('type' => C('生活安排')))->field('controller,created_time,type',ture)->find();

        // 招生问答
        $question  = M('question')->order('sort')->field('controller,created_time,sort',ture)->select();
        for($i=0;$i<COUNT($question);$i++){
        	$question[$i]['answer'] = $this->replaceLineAndSpace($question[$i]['answer']);
        }
        // 数据映射
        $this->question = $question;


        $this->display();
    }

        // 转移换行和空格为html标签
    public function replaceLineAndSpace($data)
    {
        $data = str_replace(" ","&nbsp",$data);
        $data = nl2br($data); 
        return $data;
    }
}