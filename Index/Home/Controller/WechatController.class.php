<?php
namespace Home\Controller;
use Think\Controller;

class WechatController extends CommonController {
    public function index(){
        // 基础信息
        $phone              = M('webinfo')->where(array('type' => C('电话')))->field('content')->find();
        $this->phone        = $phone['content'];
        // 二维码
        $qrcode             = M('picture')->where(array('type' => C('微信二维码')))->find();
        $this->qrcode       = $qrcode['pic_adr'];
        // 微信号
        $wechatName         = M('contact')->where(array('title' => '微信公众平台名'))->find(); 
        $this->wechatName   = $wechatName['content'];
        $wechatNumber       = M('contact')->where(array('title' => '微信公众平台号'))->find(); 
        $this->wechatNumber = $wechatNumber['content'];
        // 显示模板
        $this->display();
    }
}