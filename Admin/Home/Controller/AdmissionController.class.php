<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/14
 *  FUNCTION: 招生详情模块（后台）
 */
namespace Home\Controller;
use Think\Controller;
class AdmissionController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 报名方式 
    	$this->admission = M('admission')->select();
        // 教学安排 
        $this->education = M('text')->where(array('type' => C('教学安排')))->find();
        // 生活安排
        $this->life      = M('text')->where(array('type' => C('生活安排')))->find();
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改招生方式处理 */
    public function alter_admission_handle(){
        $content = $_POST['content'];
        $data    = M('admission')->select();
        for($i=0;$i<COUNT($content);$i++)
        {
            $data[$i] = array(
                'id'           => $data[$i]['id'],
                'content'      => $content[$i],
                'controller'   => $_SESSION['loginname'],
                'created_time' => Date('Y-m-d H:i:s')
            );
            M('admission')->data($data[$i])->save();
        }
        $this->success('修改成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改教学安排界面 */
    public function alter_education(){
        // 读取数据
        $this->education = M('text')->where(array('type' => C('教学安排')))->find();
        // 显示模板
        $this->display();
    }

    /* 修改教学安排处理 */
    public function alter_education_handle(){
        // 获取参数
        $id           = $_POST['id'];
        $content      = $_POST['editorValue'];
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'content'      => $content,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据更新
        if(!M('text')->data($data)->save())
        {
            echo 'text表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Admission/index'));
        } 
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改生活安排界面 */
    public function alter_life(){
        // 读取数据
        $this->life = M('text')->where(array('type' => C('生活安排')))->find();
        // 显示模板
        $this->display();
    }

    /* 修改生活安排处理 */
    public function alter_life_handle(){
        // 获取参数
        $id           = $_POST['id'];
        $content      = $_POST['editorValue'];
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'content'      => $content,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据更新
        if(!M('text')->data($data)->save())
        {
            echo 'text表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Admission/index'));
        } 
    }
    
}