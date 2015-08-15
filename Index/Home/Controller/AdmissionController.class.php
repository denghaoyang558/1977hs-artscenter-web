<?php
namespace Home\Controller;
use Think\Controller;

class AdmissionController extends CommonController {

    public function index(){
        // 基础信息
        $phone   = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone   = $phone['content'];
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

        // 二维码
        $this->picture   = M('picture')->where(array('type' => C('微信二维码')))->field('created_time,controller',true)->find();

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

        // 显示模板
        $this->display();
    }

    // 转移换行和空格为html标签
    public function replaceLineAndSpace($data)
    {
        $data = str_replace(" ","&nbsp",$data);
        $data = nl2br($data); 
        return $data;
    }

    public function add_handle(){
    	// 获取参数
        $name    = $_POST['name'];
        $sex     = $_POST['optionsRadios'];
        $school  = $_POST['school'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];
        // 输入限制
        if($name == ""){
            $this->error('请输入姓名');
        }
        if($school == ""){
            $this->error('请输入学校');
        }
        if($phone == ""){
            $this->error('请输入联系方式');
        }
        // 构造数据
        $data = array(
            'name'    => $name,
            'sex'     => $sex,
            'school'  => $school,
            'phone'   => $phone,
            'address' => $address,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('application')->add($data))
        {
            echo 'application表插入数据出错';die;
        }else{
            $this->success('报名成功,稍后会有工作人员与你联系。',U('Admission/index'));
        }
    }
}