<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />--> 
        <title>远方的家-做最好的地方特产网站</title> 
        <meta name="keywords" content="关键词,5个左右,单个8汉字以内"> 
        <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！"> 
        <link rel="Bookmark" href="favicon.ico" > 
        <link rel="Shortcut Icon" href="favicon.ico" /> 
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/yfdj/Public/H-ui/lib/html5.js"></script>
        <script type="text/javascript" src="/yfdj/Public/H-ui/lib/respond.min.js"></script>
        <script type="text/javascript" src="/yfdj/Public/H-ui/lib/PIE_IE678.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/yfdj/Public/H-ui/static/h-ui/css/h-ui.min.css" />
        <link href="/yfdj/Public/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
        <link href="/yfdj/Public/H-ui/static/h-ui/css/style.css" rel="stylesheet" type="text/css" /><!--自己的样式-->
        <!--[if IE 6]>
        <script type="text/javascript" src="/yfdj/Public/H-ui/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('.pngfix,.icon');</script>
        <![endif]--> 
    </head> 
    <body>
        <div class="header">
            <div class="header_m middle">
                <div class="f-l">
                    <div class="logo">
                        <a href="/yfdj/"><img src="/yfdj/Public/public/logo.png" alt="远方的家logo" /></a>
                    </div>
                </div>
                <div class="f-l nav lh-64">                
                    <a href="/yfdj/">首页</a>  
                    <a href="/yfdj/Index/zhuanti">专题</a>  
                    <a href="/yfdj/Index/place">地方馆</a>  
                    <a href="/yfdj/Index/xiaochi">小吃街</a> 
                    <a href="/yfdj/">发现</a>                    
                </div>
                <div class="search f-l lh-64 ml-40">
                    <form method="get" action="/yfdj/Search/Index">
                        <input placeholder="请输入内容" class="input-text ac_input" name="search_text" value="" id="search_text" autocomplete="on" type="text">
                        <button type="submit" class="btn" id="search_button">
                            <i class="Hui-iconfont">&#xe665;</i>
                        </button>
                    </form>
                </div>
                <div class="f-r">
                    <a data-toggle="modal" href="#myModal" class="login">登录/注册</a>                 
                </div>
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <h3 id="myModalLabel" class="text-c themcolor">登录</h3>
                        <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
                    </div>
                    <div class="modal-body text-c">
                        <ul>
                            <li>
                                <i class="login-icon-weibo"></i>
                                <span class="f-18">微博账号登录</span>
                            </li>
                            <li>
                                <i class="login-icon-qq"></i>
                                <span class="f-18">QQ账号登录</span>
                            </li>
                        </ul>
                    </div>                       
                </div>              
            </div>
            <div class="header_b">                
            </div>
        </div>  
<!--banner图-->
<div class="blank20"></div>

<div style="background-image: url(/yfdj/Public/public/banner.jpg); background-color:#FF6633; opacity: 1;" class="slider-banner">
</div>
<div class="blank20"></div>
<div class="contents middle">
    <div class="zhuanti">
        <div class="title">
            <div class="f-20">
                精选专题
            </div>                    
        </div>
        <div class="blank20"></div>
        <div class="zhuanti_list">
            <ul class="reco-list" id="reco-list">
               <?php if(is_array($zhuanti_inf)): $i = 0; $__LIST__ = array_slice($zhuanti_inf,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="post-item">
                    <a href="/yfdj/Index/post/id/<?php echo ($vo["id"]); ?>" class="pitem" target="_blank">
                        <div class="pitem-cover" style="background: url(<?php echo ($vo["img"]); ?>);background-size:cover;background-position:50% 50%;"></div>
                        <!--下面这个是NEW-->
                        <!--<div class="new-flag flag-1030611"></div>-->
                        <div class="pitem-title text-overflow">
                            <?php echo ($vo["title"]); ?>
                        </div>
                        <div class="pitem-content text-overflow" style="height:70px;white-space: pre-wrap"><?php echo ($vo["description"]); ?>
                        </div>
                        <ul class="pitem-info">
                            <li class="info-item">
                                <i class="info-icon icon-like"></i>
                                <span>收藏（<?php echo ($vo["collect"]); ?>）</span>
                            </li>                                   
                        </ul>
                    </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
               <div class="cl"></div>
            </ul>
            <div class="cl"></div>
            <div class="get-more-line">
                <a  href="/yfdj/Index/zhuanti">更多专题</a>
            </div>
        </div>
    </div>
</div>
<div class="blank20"></div>
<div class="blank20"></div>
<div class="content" style="width:100%;background-color:#fff;">
    <div class="blank20"></div>
    <div class="zhuanti middle">
        <div class="title">
            <div class="f-20 f-l">
                好吃推荐
            </div> 
            <div class="f-r mr-5 mt-10">
                <div class="pg-tmentry r pg-gray-link">
                    <span style="color:#666">口味：</span>
                    <a href="#" target="_blank">全部</a>
                    <a href="#" target="_blank">酸</a>
                    <a href="#" target="_blank">甜</a>
                    <a href="#" target="_blank">苦</a>
                    <a href="#" target="_blank">辣</a>
                    <a href="#" target="_blank">咸</a>
                </div>
            </div>
        </div>
        <div class="blank20"></div>
        <div class="zhuanti_list">
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/23/20160123102901_dJHrP.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/24/20160124182438_wE3Rh.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/22/20160122134935_QGP5e.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201512/14/20151214143201_dSRk8.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img5.duitang.com/uploads/item/201601/27/20160127101132_kcHRU.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201601/18/20160118183546_SnVBc.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>

            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/23/20160123102901_dJHrP.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/24/20160124182438_wE3Rh.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/22/20160122134935_QGP5e.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201512/14/20151214143201_dSRk8.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img5.duitang.com/uploads/item/201601/27/20160127101132_kcHRU.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201601/18/20160118183546_SnVBc.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>

            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/23/20160123102901_dJHrP.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/24/20160124182438_wE3Rh.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img4q.duitang.com/uploads/people/201601/22/20160122134935_QGP5e.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201512/14/20151214143201_dSRk8.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img5.duitang.com/uploads/item/201601/27/20160127101132_kcHRU.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201601/18/20160118183546_SnVBc.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>

            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://img5.duitang.com/uploads/item/201601/27/20160127101132_kcHRU.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>
            <div class="album-item f-l">
                <a href="#">
                    <div class="album-img">
                        <img src="http://cdn.duitang.com/uploads/item/201601/18/20160118183546_SnVBc.thumb.224_224_c.jpeg"> 
                    </div>
                    <div class="album-title" style="background-color:#fff;">
                        <div class="text-overflow" style="width:170px;">小型文本，是父容器字体大小大小的85%</div>
                        <div class="themcolor">
                            ￥ 8.00
                        </div>
                    </div>
                </a>
                <div class="album-bg">
                    <div class="album-bg-Fir"></div>
                    <div class="album-bg-Sec"></div>
                </div>
            </div>




        </div>




    </div>
</div>

        
        <div class="footer">
            <div class="blank20"></div>           
              <div class="foot_Mid clearfix">
                    <div class="foot_MC">
                        <ul class="clearfix">
                            <li class="first">
                                <a href="#" target="_blank">关于我们</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">小吃推荐</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">吃货分享</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">我要推荐</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">地方特产</a>
                            </li>               
                            <li>
                                <a href="#" target="_blank">商家合作</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">用户反馈</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="copy mt-10 text-c">
                Copyright @ 2016 <a href="/yfdj">远方的家 </a> All Right Reserved
            </div>
        </div>
        <script type="text/javascript" src="/yfdj/Public/H-ui/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            var len = $(".post-item").length;        
            var cols = Math.ceil(len/3);
            if(cols){
                for(var i=1; i<=cols; i++){
                    $(".post-item").eq(3*i-3).css("margin-left", "0px");
                }
            } 
        });             
    </script>     
    <script type="text/javascript">
        $(function(){
            var len = $(".album-item").length;        
            var cols = Math.ceil(len/5);
            if(cols){
                for(var i=1; i<=cols; i++){
                    $(".album-item").eq(5*i-5).css("margin-left", "0px");
                }
            } 
        });             
    </script>
    <script type="text/javascript" src="/yfdj/Public/H-ui/static/h-ui/js/h-ui.js"></script> 
    <script type="text/javascript" src="/yfdj/Public/H-ui/lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="/yfdj/Public/H-ui/lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>
    <script language="javascript" type="text/javascript" src="/yfdj/Public/H-ui/lib/jQuery.autocomplete/1.1/jquery.autocomplete.js"></script>
    <script language="javascript" type="text/javascript" src="/yfdj/Public/H-ui/lib/jQuery.autocomplete/1.1/demo.js"></script>
    <script type="text/javascript">
        $(function(){$(window).on("scroll",$backToTopFun);$backToTopFun();});
    </script>
  
    
    </body>
</html>