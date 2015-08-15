<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/16
 *  FUNCTION: 联系信息（后台）
 */
namespace Home\Controller;
use Think\Controller;
class ContactController extends CommonController {
	
    /* 主页显示 */
    public function index(){
    	// 基础信息 
    	$this->contact = M('contact')->select();
    	// 微信二维码
    	$where = array('type' => C('微信二维码'));
    	$this->qrcode  = M('picture')->where($where)->find();
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改基础信息处理 */
    public function alter_contact_handle(){
        // 获取参数
    	$content = $_POST['content'];
        // 读取数据
    	$data = M('contact')->select();
        // 遍历数据
    	for($i=0;$i<COUNT($content);$i++)
    	{
            // 构造数据
    		$data[$i] = array(
    			'id'           => $data[$i]['id'],
    			'content'      => $content[$i],
    			'controller'   => $_SESSION['loginname'],
    			'created_time' => Date('Y-m-d H:i:s')
    		);
            // 数据更新
    		if(!M('contact')->data($data[$i])->save()){
                echo 'contact表更新数据错误';die;
            }
    	}
    	$this->success('修改成功');
   	}

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改微信二维码界面 */
   	public function alter_qrcode(){
    	// 读取微信二维码数据
    	$where = array('type' => C('微信二维码'));
    	$this->qrcode  = M('picture')->where($where)->find();
        // 显示模板
        $this->display();
   	}

    /* 修改微信二维码处理 */
   	public function alter_qrcode_handle(){
   		// 输入限制
   		if($_POST['img'] == 0 ){
   			$this->error("请选择图片上传");
   		}
   		// 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('微信二维码'));
    	$data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '错误014';
            die;
        }
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        if($this->deleteFile($filename) == 1)
        {
            M('picture')->data($data)->save();
            $this->success('修改成功',U('Strength/index'));
        }else{
            echo "错误015";
        }  
   	}

}