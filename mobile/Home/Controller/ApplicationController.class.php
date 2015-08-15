<?php
namespace Home\Controller;
use Think\Controller;
class ApplicationController extends CommonController {
    public function index(){
    	// 基础信息
        $phone         = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
 		$middle        = explode(' ',$phone['content']);
        $this->phone   = $middle['0'];   
        $banquan       = M('webinfo')->where(array('type' => C('版权')))->field('content')->find();
    	$this->banquan = $banquan['content'];
        $this->display();
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
            $this->success('报名成功,稍后会有工作人员与你联系。',U('Application/index'));
        }
    }
}