<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/18
 *  FUNCTION:友情链接（后台）
 */
namespace Home\Controller;
use Think\Controller;
class FriendController extends CommonController {
	
    /* 主页显示 */
    public function index(){
    	// 获得数据
    	$this->friend = M('friend')->select();
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加界面 */
    public function add(){
        // 显示模板
    	$this->display();
    }

    /* 添加处理 */
    public function add_handle(){
        // 获取参数
        $name = $_POST['name'];
        $url  = $_POST['url'];
        // 输入判断
        if($name == ""){
            $this->error('请输入名称');
        }
        if($url == ""){
            $this->error('请输入URL');
        }
        // 构造数据
        $data = array(
            'name'         => $name,
            'url'          => $url,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('friend')->add($data))
        {
            echo 'friend表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Friend/index'));
        }
    }

    /* 修改界面 */
    public function alter(){
    	// 获得参数
    	$id = $_GET['id'];
    	// 获得数据
    	$this->friend = M('friend')->find($id);
    	// 显示魔板
    	$this->display();
    }

    /* 修改处理 */
    public function alter_handle(){
    	// 获取参数
    	$id   = $_POST['id'];
    	$name = $_POST['name'];
    	$url  = $_POST['url'];
        // 输入判断
        if($name == ""){
            $this->error('请输入名称');
        }
        if($url == ""){
            $this->error('请输入URL');
        }
    	// 构造数据
    	$data = array(
    		'id'           => $id,
    		'name'         => $name,
    		'url'          => $url,
    		'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
    	);
    	// 数据更新
        if(!M('friend')->data($data)->save())
        {
            echo 'friend表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Friend/index'));
        }
    }

    /* 删除处理 */
    public function delete_handle(){
    	// 获取参数
    	$id   = $_GET['id'];
    	// 数据删除
    	if(!M('friend')->delete($id)){
    		echo 'friend表删除数据出错';die;
    	}else{
    		$this->success('删除成功',U('Friend/index'));
    	}
    }

}