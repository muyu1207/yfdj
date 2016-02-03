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
<style>
    .footer{
        background-color: #fff !important;
    }
</style>    
<div class="blank20"></div>
<div class="contents middle">
    <div class="zhuanti">
        <div class="blank20"></div>
        <div class="blank20"></div>
        <div class="blank20"></div>
        <div class="blank20"></div>
        <div class="zhuanti_list">
            <ul class="reco-list" id="reco-list"></ul>
            <div class="cl"></div>
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
  <!-- 专题页下拉加载js -->
     <script type="text/javascript">
            i = 1; //设置当前页数 
            $(function() {
                var totalpage = 10; //总页数，防止超过总页数继续滚动
                var winH = $(window).height(); //页面可视区域高度 
                $(window).scroll(function() {
                    if (i < totalpage) { // 当滚动的页数小于总页数的时候，继续加载
                        var pageH = $(document.body).height();
                        var scrollT = $(window).scrollTop(); //滚动条top 
                        var aa = (pageH - winH - scrollT) / winH;
                        if (aa < 0.01) {
                           getJson(i)
                        }
                    } else { //否则显示无数据
                        showEmpty();
                    }
                });
                getJson(0); //加载第一页
            });
            function getJson(page) {
                
                $.getJSON("/yfdj/Ajax/index", {page: i}, function(json) {
                    if (json) {
                        var str = "";
                        $.each(json, function(index, array) {
                         var str = "<li class = 'post-item'><a href='/yfdj/Index/post/id/ " + array['id'] +"' class='pitem'><div class='pitem-cover' style='background:url(" + array['img'] + ");background-size:cover;background-position:50% 50%;'></div><div class='pitem-title text-overflow'>" + array['title'] + "</div><div class='pitem-content text-overflow' style='height:70px;white-space: pre-wrap'>" +array['description']+ "</div><ul class='pitem-info'><li class='info-item'><i class='info-icon icon-like'></i><span>收藏（" + array['collect'] + ")</span></li></ul></a></li>";

                            $("#reco-list").append(str);
                        });
                        mar_z();
                    } else {
                      mar_z();
                    }
                });
                i++;
            }
            
            function mar_z(){
                var len = $(".post-item").length;        
                var cols = Math.ceil(len/3);
                if(cols){
                    for(var i=1; i<=cols; i++){
                        $(".post-item").eq(3*i-3).css("margin-left", "0px");
                    }
            } 
            }
        </script>