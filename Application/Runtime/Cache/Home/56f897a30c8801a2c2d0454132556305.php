<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE HTML>
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
            background-color: #fff;
        }
    </style>
        <div class="blank20"></div>
        <div class="contents middle">
            <div class="zhuanti">
                <div class="blank20"></div>
                <div class="blank20"></div>
                <div class="blank20"></div>
                <div style="background-color:#fff;position: relative;">
                    <img class="f-l" src="<?php echo ($zhuanti_detail['img']); ?>" alt="<?php echo ($zhuanti_detail['title']); ?>" />
                    <div class="f-l pl-10 pr-10" style="width:284px;height:329px;" >
                        <h1 class="f-18 "><?php echo ($zhuanti_detail['title']); ?></h1>
                        <p class="f-14" style="color:#666;text-indent:2em;line-height:24px;text-align:justify;">又过了一年，每。有时候也会怀念小时候浓浓的年味。盼了好久的新衣服，怎么看都看不够的烟花，还有家里摆放的满满的瓜果。朋友家人的问候与关怀犹在耳边，那样的年，长大以后仿佛渐渐走远了。今年我们就来拯救年味吧！放下手机，抬头看看父母，看看身边的家人，再看看处处都是年味的家，有时候幸福越是朴实越是幸福。</p>
                        
                    </div>
                   
                    <div class="cl"></div>
                </div>
                
                <div class="blank20"></div>
                <div>
                    <div class="f-l">
                        <a class="Hui-iconfont f-30 l-24 likes">&#xe649;</a>
                        <span class="l-14"><?php echo ($zhuanti_detail['collect']); ?></span>
                    </div>
                    <div class="jiathis_style_24x24 Hui-share cl f-r">
                        <a class="jiathis_button_weixin Hui-iconfont">&#xe694;</a>
                        <a class="jiathis_button_cqq Hui-iconfont">&#xe67b;</a>
                        <a class="jiathis_button_tsina Hui-iconfont">&#xe6da;</a>
                        <a class="jiathis_button_qzone Hui-iconfont">&#xe6c8;</a>    	
                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis Hui-iconfont" target="_blank">&#xe715;</a>
                        <a class="jiathis_counter_style"></a>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    
                </div>
                <div class="cl blank20"></div>
                <div class="zhuanti_list ">
                  
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
                        
                    <div class="cl"></div>
                </div>




            </div>
        </div>

        <div class="blank20"></div>

              
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
       <script type="text/javascript">
            $(function() {
                $(".likes").click(function() {
                    $(this).html("&#xe680;");
                    var obj = $(this).next();
                    obj.fadeOut(300);
                    //以下通过ajax成功返回
                    var num = parseInt(obj.text());
                    obj.text(num + 1).fadeIn(300);
                });
            });
        </script>