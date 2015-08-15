<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize() {
        // utf-8编码
        header('Content-Type: text/html; charset=utf-8');
        if(!isset($_COOKIE['visitor']) || empty($_COOKIE['visitor'])){
            //设置cookie
            cookie('visitor','value',7200);
            $this->addVisitor();
        }
    }

    public function addVisitor(){
        // 获取数据
        $ip         = get_client_ip();
        $ipLocation = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示Ip地址库文件
        $area       = $ipLocation->getlocation($ip); // 获取某个Ip地址所在的位置
        // 构造数据
        $data = array(
            'ip'           => $ip,
            'country'      => $area['country'],
            'area'         => $area['area'],
            'created_time' => Date('Y-m-d H:i:s')
        );  
        M('visitor')->add($data);
    }
}