<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/12
 *  FUNCTION:关于1977模块（后台）
 */
namespace Home\Controller;
use Think\Controller;
class AboutusController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 置顶图片
        $this->picture      = M('picture')->where(array('type' => C('关于我们')))->find();
        // 1977介绍
        $this->introduction = M('text')->where(array('type' => C('1977介绍')))->find();
        // 办学特色
        $this->special      = M('text')->where(array('type' => C('办学特色')))->find();
        // 视频
        $this->video        = M('video')->where(array('type' => C('关于我们')))->find();
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////


    /* 修改置顶图片界面 */
    public function alter_pictrue(){
        // 读取数据
        $this->about = M('picture')->where(array('type' => C('关于我们')))->find();
    	// 显示模板
        $this->display();
    }

    /* 修改置顶图片处理 */
    public function alter_picture_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('关于我们'));
        $data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';
            die;
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'pic_adr'      => $pic_adr,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 判断删除文件
        if($this->deleteFile($filename) == 1)
        {
            M('picture')->data($data)->save();
            $this->success('修改成功',U('Aboutus/index'));
        }else{
            echo "文件删除错误";
        }  
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////


    /* 修改1977介绍界面 */
    public function alter_introduction(){
        // 1977介绍
        $this->introduction = M('text')->where(array('type' => C('1977介绍')))->find();
    	// 显示模板
        $this->display();
    }

    /* 修改1977介绍处理 */
    public function alter_introduction_handle(){
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
        // 数据插入
        if(!M('text')->data($data)->save())
        {
            echo 'text表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Aboutus/index'));
        } 
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////


    /* 修改特别安排界面 */
    public function alter_special(){
        // 办学特色
        $this->special      = M('text')->where(array('type' => C('办学特色')))->find();
    	// 显示模板
        $this->display();
    }

    /* 修改特别安排处理 */
    public function alter_special_handle(){
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
            $this->success('修改成功',U('Aboutus/index'));
        } 
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改视频界面 */
    public function alter_video(){
        // 读取数据
        $this->video = M('video')->where(array('type' => C('关于我们')))->find();
        // 显示模板
        $this->display();
    }

    /* 修改视频处理 */
    public function alter_video_handle(){
        // 获取参数
        $id        = $_POST['id'];
        $vid_adr   = $_POST['vid_adr'];
        $height    = $_POST['height'];
        $width     = $_POST['width'];
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'      => $id,
            'vid_adr' => $vid_adr,
            'height'  => $height,
            'width'   => $width,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据更新
        if(!M('video')->data($data)->save())
        {
            echo 'video表更新数据出错';die;
        }else{
            $this->success('修改成功',U('Aboutus/index'));
        } 
    }
}