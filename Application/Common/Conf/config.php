<?php

//终端判断---------------------------------
    if(!isMobile()){
        $xxx = "View";
    }else{
        $xxx = "View";
    }
//终端判断---------------------------------

//系统配置
return array(   
    //1.设置默认的模块-----------------------------------------------------------
    //定义可访问的分组
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',
    
    //2.数据库的配置-------------------------------------------------------------
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_yfdj',  // 数据库名
    'DB_USER'               =>  'root',    // 用户名
    'DB_PWD'                =>  'root',    // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'yfdj_',    // 数据库表前缀
    
    //3.通过手机检测，自定义分配视图层--------------------------------------------
    'DEFAULT_V_LAYER'       =>  "$xxx", // 默认的视图层名称

    //4.开发阶段的使用，上线时候记得注释------------------------------------------
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
    'SHOW_PAGE_TRACE'       =>   true,

    //5.SESSION的时间设置--------------------------------------------------------
    'SESSION_OPTIONS'=> array(
       //'expire'=>'36000'
    ), // session 配置数组 支持type name id path expire domain 等参数

    //6.关于模板引擎的，设置正确错误的跳转页面-------------------------------------
    'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',
    'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',

    //7.对路由的设置，这样可以去掉index.php---------------------------------------
    'URL_MODEL' =>  2,// URL访问模式,可选参数0、1、2、3,代表以下四种模式：
);