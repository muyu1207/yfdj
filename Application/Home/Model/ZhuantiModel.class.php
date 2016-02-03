<?php
namespace Home\Model;
use Think\Model;
//专题模型
class ZhuantiModel extends Model {
//    获取全部信息
    public function get_info(){
        $info = $this->order("time desc")->select();
        return $info;
    }

}