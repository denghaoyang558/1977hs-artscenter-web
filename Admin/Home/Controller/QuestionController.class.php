<?php
/**
 *  AUTHOR:CMB
 *  DATE:2015/6/17
 *  FUNCTION: 招生问答（后台）
 */
namespace Home\Controller;
use Think\Controller;
class QuestionController extends CommonController {
	
    /* 主页显示 */
    public function index(){
        // 读取数据
        $this->question = M('question')->order('sort')->select();
        // 计算总数
        $this->count    = COUNT($this->question); 
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
        // 读取参数
        $title  = $_POST['title'];
        $answer = $_POST['answer'];
        // 输入判断
        if($title == ""){
            $this->error('请输入问题');
        }
        if($answer == ""){
            $this->error('请输入问答');
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 读取所有数据，为了排序
        $dataRead  = M('question')->select();
        if($_POST['optionsRadios'] == C('TOP')){
            // 置顶
            $sort = $this->sortGetTop($dataRead,'question');
        }else{
            // 非置顶
            $sort = $this->sortGetBottom($dataRead);
        }
        // 构造数据
        $data = array(
            'title'        => $title,
            'answer'       => $answer,
            'sort'         => $sort,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据插入
        if(!M('question')->add($data))
        {
            echo 'question表插入数据出错';die;
        }else{
            $this->success('添加成功',U('Question/index'));
        }
    }

    /* 修改界面 */
    public function alter(){
        // 获得参数
        $id = $_GET['id'];
        // 读取数据
        $this->data = M('question')->find($id);
        // 显示模板
    	$this->display();
    }

    /* 修改处理 */
    public function alter_handle(){
        // 获取参数
        $id = $_POST['id'];
        $title = $_POST['title'];
        $answer = $_POST['answer'];
        // 输入判断
        if($title == ""){
            $this->error('请输入问题');
        }
        if($answer == ""){
            $this->error('请输入问答');
        }
        // 获取操作者
        $loginname = $_SESSION['loginname'];
        // 数据构造
        $data = array(
            'id'           => $id,
            'title'        => $title,
            'answer'       => $answer,
            'controller'   => $loginname,
            'created_time' => Date('Y-m-d H:i:s')
        );
        // 数据修改
        if(!M('question')->data($data)->save())
        {
            echo 'question表修改数据出错';die;
        }else{
            $this->success('修改成功',U('Question/index'));
        }
    }

    /* 删除处理 */
    public function delete_handle(){
        // 获得参数
        $id           = $_GET['id'];
        // 获取当前处理的数据
        $current_data = M('question')->find($id);
        // 获取排在当前数据后面的元素
        $data         = M('question')->where("sort > %d",$current_data['sort'])->select();
        for($i=0;$i<COUNT($data);$i++){
            $data[$i]['sort']-=1;
            M('question')->data($data[$i])->save();
        }
        // 数据删除
        if(!M('question')->delete($id))
        {
            echo 'question表删除数据出错';die;
        }else{
            $this->success('删除成功',U('Question/index'));
        }
    }

    /* 排序处理 */
    public function sort_handle(){
        // 获取参数
        $id   = $_GET['id'];
        $type = $_GET['type'];
        // 获取当前处理的数据
        $c1_data = M('question')->find($id);
        $c1_sort = $c1_data['sort'];
        // 获取要对换的数据
        if($type == 'up'){
            $c2_sort = $c1_sort-1;
        }else{
            $c2_sort = $c1_sort+1;
        }
        $where   = array('sort' => $c2_sort );
        $c2_data = M('question')->where($where)->find();
        // 排序对换
        $c1_data['sort'] = $c2_sort;
        $c2_data['sort'] = $c1_sort;
        M('question')->data($c1_data)->save();
        M('question')->data($c2_data)->save();
        $this->success('排序成功');
    }

    /* JSON获得答案 */
    public function get_answer(){
        // 获取参数
        $id   = $_GET['id'];
        // 查找数据
        $data = M('question')->find($id);
        // 转义
        $jsonReturn = $this->replaceLineAndSpace($data['answer']);
        // 数据返回
        $this->ajaxReturn($jsonReturn);
    }

}