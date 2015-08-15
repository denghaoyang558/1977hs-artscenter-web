<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/13
 *  FUNCTION:实力展示模块（后台）
 */
namespace Home\Controller;
use Think\Controller;
class StrengthController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 明星师资
        $this->teacher = M('teacher')->order('sort')->select();
        // 明星师资附加说明
        $data = M('text')->where(array('type' => C('明星师资')))->find();
        $this->teacher_text = $data['content'];

        // 历届成绩
        $this->achievement = M('achievement')->order('sort')->select();
        // 历届成绩附加图片
        $data = M('picture')->where(array('type' => C('历届成绩')))->find();
        $this->achievement_picture = $data['pic_adr'];

        // 作品展示图片
        $data = M('picture')->where(array('type' => C('作品展示')))->find();
        $this->works_picture = $data['pic_adr'];

        // 教学环境图片
        $data = M('picture')->where(array('type' => C('教学环境')))->find();
        $this->environment_picture = $data['pic_adr'];

        // 显示模板
        $this->display();
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加导师界面 */
    public function add_teacher(){
        // 显示模板
        $this->display();
    }

    /* 添加导师处理 */
    public function add_teacher_handle(){
        // 获取姓名
        $name      = $_POST['name'];
        // 获取职称
        $position  = $_POST['position'];
        // 获取师资介绍
        $content   = $_POST['content'];
        // 输入判断
        if($name == ""){
            $this->error('请输入导师姓名');
        }
        if($content == ""){
            $this->error('请输入师资介绍');
        }
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 文件上传判断,获取文件路径
        $pic_adr = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $dataRead  = M('teacher')->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'teacher');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'name'         => $name,
            'position'     => $position,
            'pic_adr'      => $pic_adr,
            'content'      => $content,
            'sort'         => $sort,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('teacher')->add($data))
        {
            echo 'teacher表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Strength/index'));
        }
    }

    /* 修改导师界面 */
    public function alter_teacher(){
        // 获取参数
        $id             = $_GET['id'];
        // 获取当前处理的数据
        $data           = M('teacher')->find($id);
        $this->id       = $id;
        $this->pic_adr  = $data['pic_adr'];
        $this->name     = $data['name'];
        $this->position = $data['position'];
        $this->content  = $data['content'];
        // 显示模板
        $this->display();
    }

    /* 修改导师处理 */
    public function alter_teacher_handle(){
        // 获取id
        $id        = $_POST['id'];
        // 获取姓名
        $name      = $_POST['name'];
        // 获取职称
        $position  = $_POST['position'];
        // 获取师资介绍
        $content   = $_POST['content'];
        // 输入判断
        if($name == ""){
            $this->error('请输入导师姓名');
        }
        if($content == ""){
            $this->error('请输入师资介绍');
        }
        // 获取当前处理的数据
        $data      = M('teacher')->find($id);
        $filename  = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 是否为新上传图片
        if(!$_POST['img'] == 0 ){
            // 文件上传判断,获取文件路径
            $pic_adr = $this->uploadImage();
            if($pic_adr == -1){
                echo '图片上传错误';die;
            }
        }else{
            $pic_adr = $data['pic_adr'];
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 构造数据
        $data = array(
            'id'           => $id,
            'name'         => $name,
            'position'     => $position,
            'pic_adr'      => $pic_adr,
            'content'      => $content,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 是否为新上传图片
        if($_POST['img'] == 1)
        {
            // 判断删除文件
            if($this->deleteFile($filename) == 1)
            {
                if(!M('teacher')->data($data)->save()){
                    echo 'teacher表更新数据出错';die;
                }else{
                    $this->success('修改成功',U('Strength/index'));
                }
            }else{
                echo "删除文件错误";
            }
        }else{
            if(!M('teacher')->data($data)->save()){
                echo 'teacher表更新数据出错';die;
            }else{
                $this->success('修改成功',U('Strength/index'));
            }
        }
    }

    /* 删除导师处理 */
    public function delete_teacher_handle(){
        // 获取参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('teacher')->find($id);
        $filename     = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $current_data['pic_adr'];
        // 获取排在当前数据后面的元素
        $data         = M('teacher')->where("sort > %d",$current_data['sort'])->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('teacher')->data($data[$i])->save();
        }
        // 删除文件并修改数据库    
        if($this->deleteFile($filename) == 1)
        {
            M('teacher')->delete($id);
            $this->success('删除成功');
        }else{
            echo "删除文件错误";
        }
    }

    /* 排序导师处理 */
    public function sort_teacher_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('teacher')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort );
        $c2_data = M('teacher')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('teacher')->data($c1_data)->save();
        M('teacher')->data($c2_data)->save();
        $this->success('排序成功');
    }

    /* 修改导师附加说明处理 */
    public function alter_teacher_text_handle(){
        // 获取id
        $id      = $_POST['id'];
        // 获取内容
        $content = $_POST['teacher_text'];
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
            $this->success('添加成功',U('Strength/index'));
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 添加历届成绩界面 */
    public function add_achievement(){
        // 显示模板
        $this->display();
    }

    /* 添加历届成绩处理 */
    public function add_achievement_handle(){
        // 获取年份
        $year   = $_POST['year']; 
        // 获取录入学校
        $school = $_POST['school'];
        // 获取录入人数
        $number = $_POST['number'];
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        if($year == ""){
            $this->error('请输入年份');
        }
        // 读取所有数据，为了排序
        $dataRead  = M('achievement')->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'achievement');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'year'         => $year,
            'sort'         => $sort,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!$id = M('achievement')->add($data))
        {
            echo 'achievement表插入数据出错';die;
        }
        // 遍历插入数据
        for($i=0;$i<COUNT($school);$i++)
        {
            if($school[$i]=="" || $number[$i]=="" || $number[$i]=="0") 
                continue;
            // 构造数据
            $data = array(
                'school'       => $school[$i],
                'number'       => $number[$i],
                'achievement_id' => $id
            );
            // 数据插入
            if(!M('achievement_status')->add($data)){
                echo 'achievement_status表插入数据出错';die;
            }
        }
        $this->success('添加成功',U('Strength/index'));
    }

    /* 修改历届成绩界面 */
    public function alter_achievement(){
        // 获取参数
        $id   = $_GET['id'];
        // 获取历届成绩主表数据
        $this->achievement         = M('achievement')->find($id);
        // 获取历届成绩副表数据
        $this->achievement_status = M('achievement_status')->where(array('achievement_id' => $id))->select();
        $this->display();
    }

    /* 修改历届成绩处理 */
    public function alter_achievement_handle(){
        // 获取参数
        $id   = $_POST['id'];
        // 获取录入学校
        $school = $_POST['school'];
        // 获取录入人数
        $number = $_POST['number'];
        // 获取修改前的属性
        M('achievement_status')->where(array('achievement_id' => $id))->delete();
        // 循环遍历
        for($i=0;$i<COUNT($school);$i++)
        {
            if($school[$i]=="" || $number[$i]=="" || $number[$i]=="0") 
                continue;
            // 构造数据
            $data = array(
                'school'         => $school[$i],
                'number'         => $number[$i],
                'achievement_id' => $id
            );
            // 数据插入
            if(!M('achievement_status')->add($data)){
                echo 'achievement_status表插入数据出错';die;
            }
        }
        $this->success('添加成功',U('Strength/index'));
    }

    /* 删除历届成绩处理 */
    public function delete_achievement_handle(){
        // 获取参数
        $id = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('achievement')->find($id);
        // 获取排在当前数据后面的元素
        $data         = M('achievement')->where("sort > %d",$current_data['sort'])->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('achievement')->data($data[$i])->save();
        }
        // 数据删除
        if(!M('achievement')->where(array('id' => $id))->delete()){
            echo 'achievement表插入数据出错';die;
        }
        // 数据删除
        if(!M('achievement_status')->where(array('achievement_id' => $id))->delete()){
            echo 'achievement_status表插入数据出错';die;
        }
        $this->success('删除成功');
    }

    /* 排序历届成绩处理 */
    public function sort_achievement_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('achievement')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort );
        $c2_data = M('achievement')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('achievement')->data($c1_data)->save();
        M('achievement')->data($c2_data)->save();
        $this->success('排序成功');
    }

    /* 修改历届成绩附加图片界面 */
    public function alter_achievement_pic(){
        // 历届成绩
        $where = array('type' => C('历届成绩'));
        $this->achievement_picture  = M('picture')->where($where)->find();
        $this->display();
    }

    /* 修改历届成绩附加图片处理 */
    public function alter_achievement_picture_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('历届成绩'));
        $data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            echo "文件删除错误";
        }  
    }

    // json返回历届成绩情况
    public function get_achievement_status(){
        // 获取参数
        $id = $_GET['id'];
        $data = M('achievement_status')->where(array('achievement_id' => $id))->select();
        $returnData = "";
        for($i=0;$i<COUNT($data);$i++){
            $returnData = $returnData . $data[$i]['school'] . $data[$i]['number'] . "人;"; 
        }
        $this->ajaxReturn($returnData);
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改作品展示界面 */
    public function alter_works_pic(){
        // 数据读取
        $where = array('type' => C('作品展示'));
        $this->works_picture  = M('picture')->where($where)->find();
        // 显示模板
        $this->display();
    }

    /* 修改作品展示处理 */
    public function alter_works_picture_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('作品展示'));
        $data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        // 图片上传
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            echo "文件删除错误";
        }  
    }

    ///////////////////////////////////////////////////////////////////////////
    ///////////////////////////////    分割线     //////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    /* 修改教学环境界面 */
    public function alter_environment_pic(){
        // 作品展示
        $where = array('type' => C('教学环境'));
        $this->environment_picture  = M('picture')->where($where)->find();
        $this->display();
    }

    /* 修改教学环境处理 */
    public function alter_environment_picture_handle(){
        // 输入限制
        if($_POST['img'] == 0 ){
            $this->error("请选择图片上传");
        }
        // 获取参数
        $id       = $_POST['id'];
        // 获取当前处理的数据
        $where    = array('type' => C('教学环境'));
        $data     = M('picture')->where($where)->find();
        $filename = $_SERVER['DOCUMENT_ROOT']. __ROOT__ . $data['pic_adr'];
        $pic_adr  = $this->uploadImage();
        if($pic_adr == -1){
            echo '图片上传错误';die;
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
            echo "文件删除错误";
        }  
    }

}