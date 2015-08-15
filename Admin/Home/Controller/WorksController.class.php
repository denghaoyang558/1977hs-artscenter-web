<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/16
 *  FUNCTION: 作品展示（后台）
 */
namespace Home\Controller;
use Think\Controller;
class WorksController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 素描
        $where = array('type'=> C('素描'));
        $this->sumiao  = M('works')->where($where)->order('sort')->select();
        // 色彩
        $where = array('type'=> C('色彩'));
        $this->secai   = M('works')->where($where)->order('sort')->select();
        // 速写
        $where = array('type'=> C('速写'));
        $this->suxie   = M('works')->where($where)->order('sort')->select();
        // 学生作品
        $where = array('type'=> C('学生作品'));
        $this->student = M('works')->where($where)->order('sort')->select();
        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加素描界面 */
    public function add_sumiao(){
        // 显示模板
        $this->display();
    }

    /* 添加素描处理 */
    public function add_sumiao_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('素描'));
        $dataRead = M('works')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'works');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'pic_adr'      => $pic_adr,
            'type'         => C('素描'),
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('works')->add($data))
        {
            echo 'works表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Works/index'));
        }
    }

    /* 修改素描界面 */
    public function alter_sumiao(){
        // 获取参数
        $id            = $_GET['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        // 数据映射
        $this->id      = $id;
        $this->pic_adr = $data['pic_adr'];
        // 显示模板
        $this->display();
    }

    /* 修改素描处理 */
    public function alter_sumiao_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id            = $_POST['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        $filename      = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            M('works')->data($data)->save();
            $this->success('修改成功',U('Works/index'));
        }else{
            echo "删除文件错误";die;
        }   
    }

    /* 删除素描处理 */
    public function delete_sumiao_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('works')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('works')->where("sort > %d AND type = '%s'",$current_data['sort'],C('素描'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('works')->data($data[$i])->save();
        }    
        if($this->deleteFile($filename) == 1)
        {
            M('works')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";die;
        } 
    }

    /* 排序素描处理 */
    public function sort_sumiao_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('works')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort , 'type' => C('素描'));
        $c2_data = M('works')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('works')->data($c1_data)->save();
        M('works')->data($c2_data)->save();
        $this->success('排序成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加色彩界面 */
    public function add_secai(){
        // 显示模板
        $this->display();
    }

    /* 添加色彩处理*/
    public function add_secai_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('色彩'));
        $dataRead = M('works')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'works');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'pic_adr'      => $pic_adr,
            'type'         => C('色彩'),
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('works')->add($data))
        {
            echo 'works表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Works/index'));
        }
    }

    /* 修改色彩界面 */
    public function alter_secai(){
        // 获取参数
        $id            = $_GET['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        // 数据映射
        $this->id      = $id;
        $this->pic_adr = $data['pic_adr'];
        // 显示模板
        $this->display();
    }

    /* 修改色彩处理 */
    public function alter_secai_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id            = $_POST['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        $filename      = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            M('works')->data($data)->save();
            $this->success('修改成功',U('Works/index'));
        }else{
            echo "删除文件错误";die;
        }
    }

    /* 删除色彩处理 */
    public function delete_secai_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('works')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('works')->where("sort > %d AND type = '%s'",$current_data['sort'],C('色彩'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('works')->data($data[$i])->save();
        }    
        // 判断删除文件
        if($this->deleteFile($filename) == 1)
        {
            M('works')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";die;
        } 
    }

    /* 排序色彩处理 */
    public function sort_secai_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('works')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort , 'type' => C('色彩'));
        $c2_data = M('works')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('works')->data($c1_data)->save();
        M('works')->data($c2_data)->save();
        $this->success('排序成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加速写界面 */
    public function add_suxie(){
        // 显示模板
        $this->display();
    }

    /* 添加速写处理 */
    public function add_suxie_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        // 获得操作者
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('速写'));
        $dataRead = M('works')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'works');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'pic_adr'      => $pic_adr,
            'type'         => C('速写'),
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('works')->add($data))
        {
            echo 'works表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Works/index'));
        }
    }

    /* 修改速写界面 */
    public function alter_suxie(){
        // 获取参数
        $id            = $_GET['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        // 数据映射
        $this->id      = $id;
        $this->pic_adr = $data['pic_adr'];
        // 显示模板
        $this->display();
    }

    /* 修改速写处理 */
    public function alter_suxie_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id            = $_POST['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        // 获得操作者
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
            M('works')->data($data)->save();
            $this->success('修改成功',U('Works/index'));
        }else{
            echo "删除文件错误";die;
        }
    }

    /* 删除速写处理 */
    public function delete_suxie_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('works')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('works')->where("sort > %d AND type = '%s'",$current_data['sort'],C('速写'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('works')->data($data[$i])->save();
        }    
        if($this->deleteFile($filename) == 1)
        {
            M('works')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";die;
        } 
    }

    /* 排序速写处理 */
    public function sort_suxie_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('works')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort , 'type' => C('速写'));
        $c2_data = M('works')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('works')->data($c1_data)->save();
        M('works')->data($c2_data)->save();
        $this->success('排序成功');
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加学生作品界面 */
    public function add_student(){
        // 显示模板
        $this->display();
    }

    /* 添加学生作品处理 */
    public function add_student_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $where = array('type' => C('学生作品'));
        $dataRead = M('works')->where($where)->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'works');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'pic_adr'      => $pic_adr,
            'type'         => C('学生作品'),
            'sort'         => $sort,
            'controller'   => $_SESSION['loginname'],
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('works')->add($data))
        {
            echo 'works表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Works/index'));
        }
    }

    /* 修改学生作品界面 */
    public function alter_student(){
        // 获取参数
        $id            = $_GET['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        // 数据映射
        $this->id      = $id;
        $this->pic_adr = $data['pic_adr'];
        // 显示模板
        $this->display();
    }

    /* 修改学生作品处理 */
    public function alter_student_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id            = $_POST['id'];
        // 获取当前处理的数据
        $data          = M('works')->find($id);
        $filename      = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            M('works')->data($data)->save();
            $this->success('修改成功',U('Works/index'));
        }else{
            echo "删除文件错误";die;
        }
    }

    /* 删除学生作品处理 */
    public function delete_student_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('works')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('works')->where("sort > %d AND type = '%s'",$current_data['sort'],C('学生作品'))->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('works')->data($data[$i])->save();
        } 
        // 判断删除文件   
        if($this->deleteFile($filename) == 1)
        {
            M('works')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";die;
        } 
    }

    /* 排序学生作品处理 */
    public function sort_student_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('works')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort , 'type' => C('学生作品'));
        $c2_data = M('works')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('works')->data($c1_data)->save();
        M('works')->data($c2_data)->save();
        $this->success('排序成功');
    }

}