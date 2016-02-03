<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
//    首页
    public function index(){
        $zhuanti_inf = D("Zhuanti")->get_info();
        $this->assign('zhuanti_inf', $zhuanti_inf);
        $this->display();
    }
//    专题列表
    public function zhuanti(){
        $zhuanti_inf = D("Zhuanti")->get_info();
        $this->assign('zhuanti_inf', $zhuanti_inf);
        $this->display();
    }
//    专题详情
    public function post(){
        $id = I("id");
        $zhuanti_detail = D("Zhuanti")->get_detail($id);
        $this->assign('zhuanti_detail', $zhuanti_detail);
        $this->display();
    }
//    小吃街列表
    public function xiaochi(){
        $this->display();
    }
    
//    商品详情
    public function product(){
        $this->display();
    }
//    地方馆列表
    public function place(){
        $this->display();
    }
//    地方馆详情
    public function road(){
        $this->display();
    }
}