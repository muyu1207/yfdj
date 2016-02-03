<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
    public function index() {
        $host = "localhost";
        $db_user = "root";//用户名
        $db_pass = "root";//密码
        $db_name = "db_yfdj";//数据库名
        $link = mysql_connect($host, $db_user, $db_pass);
        mysql_select_db($db_name, $link);
        mysql_query("SET names UTF8");
        header("Content-Type: text/html; charset=utf-8");
        
        $page = intval($_GET['page']);  //获取请求的页数 
        $pagenum = 9; //每页数量
        $start = ($page - 1) * $pagenum;
        $query = mysql_query("SELECT * FROM yfdj_zhuanti ORDER BY time ASC LIMIT $start," . $pagenum . "");
        $arr = array();
        while ($row = mysql_fetch_array($query)) {
            $arr[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'img' => $row['img'],
                'collect' => $row['collect'],
                'description' => $row['description'],
               
            );
        }
        if ($arr) {
            echo json_encode($arr);  //转换为json数据输出 
        }
    }
}
