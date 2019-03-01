<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data3.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Sweet Pink & Blinking Light -by Rosalun-CNU视觉联盟
    </title>
    <meta name="keywords" content=" CNU,视觉,摄影,视觉联盟,照片,摄影师,摄影作品集,在线摄影作品集,照片精选,网络摄影作品集,
    在线照片展廊,分享图片,专业摄影,社会摄影,上传照片,分享照片,出色的摄影作品集,摄影社区,最新摄影作品,快速创建作品集,
    模特和摄影师,商业摄影,建筑摄影,专业作品集管理,视觉中国图库,视觉中国,视觉联盟,摄影作品,摄影作品欣赏,时尚摄影,时尚摄影作品,艺术,
    艺术作品,艺术摄影作品,人体艺术,时尚杂志,品牌广告,视觉,视觉艺术,视觉作品,视觉作品欣赏,时尚,设计,当代艺术 ">
    <meta name="description" content=" 中国视觉联盟cnu.cc-是一家致力于传播优秀视觉文化,研究视觉艺术、交流视觉理念、开拓大众审美视野的专业性视觉网站。 ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/authoryuanchaung.css">
    <script src="../js/common.js"></script>
	  <script src="../js/jquery-1.8.2.js"></script>
    <script src="../js/authoryuanchuang.js"></script>
    <style type="text/css">
        *{
            font-size: 14px;
            font-family: "lato-regular", "Helvetica Neue", Helvetica, Arial, "Hiragino Sans GB", "Microsoft YaHei", sans-serif;
        }
        header{
            width: 100%;
            height: 50px;
            background-color: black;
            padding: 6px;
            box-sizing: border-box;
            position: relative;
        }
        header .h_right button{
            display: block;
            width: 50px;
            height: 34px;
            background-color: black;
            border: none;
        }
        header .h_right .icon-bar{
            display: block;
            width: 30px;
            height: 2px;
            margin: 4px 3px;
            padding-left: 4px;
            background-color: white;
            border-radius: 1px;
        }
        .f_left{
            float: left;
        }
        .f_right{
            float: right;
        }
        .box{
            position: absolute;
            top:50px;
            left: 0;
            width: 100%;
            background-color: black;
        }
        .box .b_first{
            height: 96px;
        }
        .box .b_first li{
            line-height: 48;
            height: 48px;
            padding: 2px 10px;
            box-sizing: border-box;
        }
        .box .b_first li input{
            display: block;
            width: 100%;
            background-color: black;
            border-radius: 3px;
            border: none;
            color: #ddd;
            height: 30px;
            padding: 4px 12px 4px 36px;
            font-size: 14px;
            line-height: 1.42857143;
        }
        .box .b_first li:first-of-type::before{
            display: inline-block;
            content: "";
            width: 30px;
            height: 30px;
            position: absolute;
            background: url("../images/search.png") 7px 5px no-repeat #333;
        }
        .box .b_first li:nth-of-type(2){
            position: relative;
            width: 100%;
            height: 48px;
        }
        .box .b_first li:nth-of-type(2) a{
            display:block;
            width: 100%;
            height: 30px;
            position: relative;
        }
        .box .b_first li:nth-of-type(2) a .toux{
            display: inline-block;
            margin: -5px 5px;
            border-radius: 2px;
            background-image: url(../images/head30.jpg);
            width: 30px;
            height: 30px;
            position: absolute;
        }
        .box{
            display: none;
            z-index: 999;
        }

        .box .b_second li a{
            padding: 0 13px;
            height: 50px;
            margin: 0;
            position: relative;
            display: block;
            color: #9d9d9d;
        }
        .box .b_second li a .myicon {
            display: inline-block;
            height: 24px;
            width: 24px;
            background-image: url("../images/meinicon@2x.png");
            background-size: 400%;
            margin-top: 11px;
            float: left;
        }
        a i.icon-home {
            background-position: 0 0;
        }
        .box .b_second li a span {
            float: left;
            line-height: 24px;
            padding: 0 4px;
            margin-top: 13px;
        }
        a .icon-inspiration{
            background-position: -48px 0;
        }
        a i.icon-discovery {
            background-position: -24px 0;
        }
        .box .b_third{
            padding: 2px 10px;
            box-sizing: border-box;
        }
        .box .b_third .down .span span:first-of-type{
            display:inline-block;
            line-height: 24px;
            padding: 0 4px;
            margin-top: 13px;
            color: #9d9d9d;
        }
        .box .b_third li ul{
            display: none;
        }
        .box .b_third a{
            display: block;
            padding: 3px 0;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #9d9d9d;
            white-space: nowrap;
        }
        .down .span span:nth-of-type(2){
            display: inline-block;
            width: 0;
            height: 0;
            color:#9d9d9d;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        }
        .down ul li{
            padding: 0 30px;
        }
    </style>

</head>
<body>
<div class="container">
   <header>
    <div class="h_left f_left">
        <img src="../images/cnulogo.png" alt="">
    </div>
    <div class="h_right f_right">
        <button id="slidetoggle" value="隐藏">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="box" id="box">
        <ul class="b_first">
            <li>
                <input type="text" placeholder="搜索">
            </li>
            <li>
                <a href="#">
                    <i class="toux"></i>
                    <span></span>
                </a>
            </li>
        </ul>
        <ul class="b_second">
            <li>
                <a href="shouye.php">
                    <i class="myicon icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="../html/linggan.html"><i class="myicon icon-inspiration"></i>
                    <span>灵感</span>
                </a>
            </li>
            <li>
                <a href="../html/yuanchuang.html">
                    <i class="myicon icon-discovery"></i>
                    <span>原创</span>
                </a>
            </li>
        </ul>
        <ul class="b_third">
            <li class="down">
                <a href="#" class="span">
                    <span>投稿</span>
                    <span></span>
                </a>

                <ul>
                    <li>
                        <a href="../html/yuanchuangtuji.html">原创图集</a>
                    </li>
                    <li>
                        <a href="../html/yuanchuangjiaochen.html">原创教程</a>
                    </li>

                </ul>
            </li>
            <li class="down">
                <a href="#" class="span">
                    <span>消息</span>
                    <span></span>
                </a>

                <ul>
                    <li><a href="../html/information.html">评论</a></li>
                    <li><a href="../html/information.html">回复</a></li>
                    <li><a href="../html/information.html">推荐</a></li>
                    <li><a href="../html/information.html">粉丝</a></li>
                </ul>

            </li>
            <li class="down">
                <a href="#" class="span">
                    <span>通知</span>
                </a>

            </li>
            <li class="down">
                <a href="#" class="span">
                    <span>设置</span>
                    <span></span>
                </a>


                <ul>
                    <li><a href="">English</a></li>
                    <li><a href="person_setting.php">个人设置</a></li>
                    <li><a href="../html/login.html">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
    <div class="header">
        <div class="mohu"></div>
        <h2 >Sweet Pink & Blinking Light​​​​</h2>
        <span class="bianji">编辑：<a href="authorhomepage.php">Rosalyn</a></span>
        <span class="tuijian">推荐:64</span>
        <input class="yuedu" id="yuedu"  type="button" value="">
    </div>

                                  
<form action="" method="post">
        <div class="main clearfix">
   <?php foreach ($datas as $key=>$value) :?>
            <div class="pic">
                <a href="#">
                    <img src="<?php echo $value['img']; ?>" alt="">
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </form>
    <div class="jieshao">
        <div class="shang">
            <a href="#"></a>
            <span>Rosalyn</span>
            <input type="button" value="+ 关注" class="name" id="guanzhu">
            <input  class="shoucang" id="shoucang" disabled>
            <input  class="dianzan" id="dianzan" disabled>
        </div>
        <div class="xia">
            <span>分类 ： <a href="#">摄影作品集</a></span>
            <span >版权：原创，CC协议共享(署名)</span>
        </div>
    </div>
    <div class="pinglun">
        <h2>评论:</h2>
        <form action="post">
            <span></span>
            <input type="text" class="icon_text" value="" placeholder="好看的话鼓励一下作者吧" id="icon_text">
            <input type="button" value="评论" class="icon_pinglun" id="icon_pinglun">
        </form>
    </div>
    <br>
    <hr>
         <div class="con current">
         <ul id="pn">
            <li class="list0">
                <a class="close" style="margin-right:15px" href="javascript:;">X</a>
                <div class="head"><img src="../images/imgInfo1.jpg" alt=""/></div>
                <div class="content">
                    <p class="text"><span class="name">blank：</span>有谁能比我知道，你的温柔像羽毛</p>

                    <div class="good"><span class="date">02-14 23:01</span><a class="dzan" href="javascript:;">赞</a></div>
                    <div class="people" total="2980">2980人觉得很赞</div>
                    <div class="comment-list">
                        <div class="comment" user="self">
                            <div class="comment-left"><img src="../images/shouye16.JPG" alt=""/></div>
                            <br/>
                            <div class="comment-right">
                                <div class="comment-text"><span class="user">假酒少女：</span>粉红色的少女梦&迷幻灯光</div>
                                <div class="comment-date">02-14 22:00
                                    <a class="comment-zan" href="javascript:;" total="23" my="1">23 取消赞</a>
                                    <a class="comment-dele" href="javascript:;">回复</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment" user="self">
                            <div class="comment-left"><img src="../images/6.jpg" alt=""/></div>
                            <div class="comment-right">
                                <div class="comment-text"><span class="user">我：</span>粉色系列的网红点&迷幻的灯光</div>
                                <div class="comment-date">02-14 24:00
                                    <a class="comment-zan" href="javascript:;" total="0" my="0">赞</a>
                                    <a class="comment-dele" href="javascript:;">删除</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hf">
                        <textarea type="text" class="hf-text" autocomplete="off" maxlength="100">评论…</textarea>
                        <button class="hf-btn">回复</button>
                        <span class="hf-nub">0/100</span>
                    </div>
                </div>
            </li>
            <li class="list0">
                <a class="close" href="javascript:;">X</a>
                <div class="head"><img src="../images/5.jpg" alt=""/></div>
                <div class="content">
                    <p class="text"><span class="name">小云朵酱：</span>色彩很是鲜艳呐</p>
                    <div class="good"><span class="date">02-14 23:01</span><a class="dzan" href="javascript:;">赞</a></div>
                    <div class="people" total="0" style="display: none;"></div>
                    <div class="comment-list">
                        <div class="comment" user="self">
                            <div class="comment-left"><img src="../images/6.jpg" alt=""/></div>
                            <div class="comment-right">
                                <div class="comment-text"><span class="user">我：</span>亮堂堂，明晃晃</div>
                                <div class="comment-date">02-14 24:00
                                    <a class="comment-zan" href="javascript:;" total="286" my="1">286 取消赞</a>
                                    <a class="comment-dele" href="javascript:;">删除</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hf">
                        <textarea type="text" class="hf-text" autocomplete="off" maxlength="100">&nbsp;评论…</textarea>
                        <button class="hf-btn">回复</button>
                        <span class="hf-nub">0/100</span>
                    </div>
                </div>
            </li>
        </ul>
        </div>
<div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
    <div class="footer">
        <span>@ CNU视觉联盟（www.cnu.cc）</span>
            <span>
                <a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">粤ICP备10023979号-3
                </a>
            </span>
    </div>
</div>
</body>
<script>
 my$("slidetoggle").onclick=function () {
        if(this.value=="隐藏"){
            this.value="显示";
            my$("box").style.display="block";
            my$("content").style.top="422px";
        }
        else{
            this.value="隐藏";
            my$("box").style.display="none";
            my$("content").style.top="0";
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".down .span").click(function () {
            var $x=$(this).nextAll();
            if($x.is(":hidden")){
                $x.show();
                $(this).parent().siblings().children(":first").nextAll().hide();
            }
            else {
                $x.hide();
            }
        })
    });
</script>

<script type="text/javascript">
    //在页面加载完后立即执行多个函数。
    function addloadEvent(func){
        var oldonload=window.onload;
        if(typeof window.onload !="function"){
            window.onload=func;
        }
        else{
            window.onload=function(){
                if(oldonload){
                    oldonload();
                }
                func();
            }
        }
    }
    addloadEvent(b);
    function b(){
        var pn=document.getElementById("pn");
        var lists=pn.children;
        //删除当前节点
        function remove(node){
            node.parentNode.removeChild(node);
        }
        //上面的点赞
        function praisebox(box,el){
            //获取赞数量容器
            var praise=box.getElementsByClassName("people")[0];
            //获取容器当前total值
            var total=parseInt(praise.getAttribute("total"));
            //获取点击的innerHTML
            var txt=el.innerHTML;
            //创建一个新的total存储用
            var newtotal;
            //判断点击的文字内容
            if(txt=="赞"){
                //total值+1 因为我还没点击赞，所以要点击的时候就多了一个人 total+1
                newtotal=total+1;
                //判断赞数量 把相应文字放到赞容器里
                praise.innerHTML=newtotal==1 ? "我觉得很赞" : "我和" + total +"个人觉得很赞";
                el.innerHTML="取消赞";
            }
            else{
                //反之total值-1
                newtotal=total-1;
                praise.innerHTML=newtotal==0 ? "" : newtotal +"个人觉得很赞";
                el.innerHTML="赞";
            }
            //更新total值
            praise.setAttribute("total",newtotal);
            //如果没有人点赞容器隐藏
            praise.style.display=(newtotal==0) ? "none" : "block";
        }
        //回复评论
        function reply(box){
            //获取评论框
            var textarea=box.getElementsByTagName("textarea")[0];
            //获取包含所有评论的容器
            var comment=box.getElementsByClassName("comment-list")[0];
            //创建新的评论div
            var div=document.createElement("div");
            //赋类名
            div.className="comment";
            //设置属性
            div.setAttribute("user","self");
            //获取每条评论的innerHTML结构，每次只替换textarea的输入内容和 当前发送时间
            var html='<div class="comment-left">'+'<img src="../images/12.jpg" alt=""/>'+'</div>'+
                    '<div class="comment-right">'+
                    '<div class="comment-text"><span>我：</span>'+textarea.value+'</div>'+
                    '<div class="comment-date">'+
                    getTime()+
                    '<a class="comment-zan" href="javascript:;" total="0" my="0">赞</a>'+
                    '<a class="comment-dele" href="javascript:;">删除</a>'+
                    '</div>'+
                    '</div>';
            //插入到新建的评论div
            div.innerHTML=html;
            //把新评论插入到评论列表
            comment.appendChild(div);
            //评论后初始化textarea输入框
            textarea.value="评论…";
            textarea.parentNode.className="hf";
        }
        //获取当前时间回复评论时调用
        function getTime(){
            var t=new Date();
            var y=t.getFullYear();
            var m=t.getMonth()+1;
            var d=t.getDate();
            var h=t.getHours();
            var mi=t.getMinutes();
            m=m<10?"0"+m:m;
            d=d<10?"0"+d:d;
            h=h<10?"0"+h:h;
            mi=mi<10?"0"+mi:mi;
            return y+"-"+m+"-"+d+""+h+":"+mi;
        }
        //回复里点赞
        function praiseReply(el){
            //获取当前total值 也就是所有点赞数量
            var total=parseInt(el.getAttribute("total"));
            //获取当前my值 我的点赞
            var my=parseInt(el.getAttribute("my"));
            //创建新的total
            var newtotal;
            //判断my=0就是我准备要点赞
            if(my==0){
                //我点了赞总数量就要+1
                newtotal=total+1;
                //更新total值
                el.setAttribute("total",newtotal);
                //更新my值
                el.setAttribute("my",1);
                //更新文字 就是我点了后 文字就是取消赞了
                el.innerHTML=newtotal+" 取消赞";
            }else{
                //反之-1
                newtotal=total-1;
                el.setAttribute("total",newtotal);
                el.setAttribute("my",0);
                el.innerHTML=(newtotal==0)?" 赞":newtotal+" 赞";
            }
        }
        //操作回复
        function operateReply(el){
            //每条评论
            var comment=el.parentNode.parentNode.parentNode;
            //整个状态
            var box=comment.parentNode.parentNode.parentNode;
            //评论框
            var textarea=box.getElementsByTagName("textarea")[0];
            //名字
            var user=comment.getElementsByClassName("user")[0];
            //点击的innerHTML
            var txt=el.innerHTML;
            //判断当前点击的是否为回复
            if(txt=="回复"){
                //评论框触发焦点事件 也就是变高
                textarea.onfocus();
                //内容变为回复+当前人的名字
                textarea.value="回复 "+user.innerHTML;
                //调用键盘事件
                textarea.onkeyup();
            }else{
                //否则就是删除节点
                remove(comment);
            }
        }
        //遍历所有状态消息
        for(var i=0;i<lists.length;i++){
            //全部事件代理
            lists[i].onclick=function(e){
                //获取当前点击事件
                var e=e||window.event;
                var el=e.srcElement;
                if(!el){
                    el=e.target;//兼容火狐
                }
                //判断点击的类名
                switch(el.className){
                        //关闭整个状态
                    case "close":
                        remove(el.parentNode);
                        break;
                        //上面的点赞
                    case "dzan":
                        praisebox(el.parentNode.parentNode.parentNode,el);
                        break;
                        //回复评论
                    case "hf-btn hf-btn-on":
                        reply(el.parentNode.parentNode.parentNode);
                        break;
                        //每条评论中点赞
                    case "comment-zan":
                        praiseReply(el);
                        break;
                    case "comment-dele":
                        operateReply(el);
                        break;
                }
            }
            var textarea=lists[i].getElementsByClassName("hf-text")[0];
            //焦点事件
            textarea.onfocus=function(){
                this.parentNode.className='hf hf-on';
                this.value = this.value == '评论…' ? '' : this.value;
            }
            //失焦事件
            textarea.onblur=function(){
                if(this.value==''){
                    this.parentNode.className='hf';
                    this.value ='评论…';
                }
            }
            //键盘事件
            textarea.onkeyup=function(){
                var len=this.value.length;
                var textParentNode=this.parentNode;
                var textBtn=textParentNode.children[1];
                var textNub=textParentNode.children[2];
                if(len==0 /*|| len>100*/){
                    textBtn.className="hf-btn";
                }else{
                    textBtn.className="hf-btn hf-btn-on";
                    /*this.style.color="#333"; */
                }
                textNub.innerHTML=len+"/100";
            }
        }
        //遍历结束
    }
</script>
<script type="text/javascript">
        var v=false;
        $(".btn").click( function() {
            if(v) {
                $(this).html("关注");
                v=false;
            }
            else{
                $(this).html("取消关注");
                v=true;
            }
});
</script>
<script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
                
                /* Gallery Two pop up
                -----------------------------------------*/
                $('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                           
            });

           

        </script> 
</html>