<?php 
header("Content-type:text/html;charset=utf-8");
$strs=file_get_contents("../html/lingan.json");
if(!empty($strs)){
	$datas=json_decode($strs,true);
}
// var_dump($datas);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="../css/lingan.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/swiper.css">
    <script src="../js/common.js"></script>
    <script src="../js/jquery-1.8.2.js"></script>
    <script src="../js/lingan.js"></script>
    <script src="../js/swiper.js"></script>
 </head>
 <body>
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





<div class="container pc">
	<form>
	<div class="grid" style="position:absolute;height:3495.63px">
		<div class="grid-item" style="position:absolute;left:0px;top:0px;">
			<div class="menu">
				<a href="#" class="orderType">
					<h3>最新</h3>
				</a>
				<a href="#" class="orderType selected">
				     <h3>热门</h3>
				</a>
				<hr>
				<div class="all">
                        <a class="category" category_id="0" href="#">
                        <h4>
                        <span class="badge">全部</span>
                        </h4>
                        </a>
                    </div>
                <div class="group">
                    <a class="category " category_id="220" href="#"><span>时尚大片</span></a>
                    <a class="category" category_id="222" href="#"><span>时装发布</span></a>
                    <a class="category" category_id="9" href="#"><span>潮流趋势</span></a>
                    </div>

                    <div class="group">
                    <a class="category" category_id="118" href="#"><span>时尚摄影</span></a>
                    <a class="category" category_id="8" href="#"><span>婚纱摄影</span></a>
                        <a class="category" category_id="120" href="#"><span>广告摄影</span></a>
                </div>

                <div class="group">
                    <a class="category" category_id="111" href="#"><span>人像摄影</span></a>
                    <a class="category" category_id="110" href="#"><span>人文摄影</span></a>
                        <a class="category" category_id="226" href="#"><span>风光摄影</span></a>
                        <a class="category" category_id="242" href="#"><span>生态摄影</span></a>
                        <a class="category" category_id="243" href="#"><span>观念摄影</span></a>
                    </div>

                    <div class="group">
                        <a class="category" category_id="6" href="#"><span>当代艺术</span></a>
                        <a class="category" category_id="14" href="#"><span>插画设计</span></a>
                        <a class="category" category_id="12" href="#"><span>平面设计</span></a>
                    </div>
			</div>

		</div>
		<!-- 轮播图 -->
			<div class="grid-item grid-item--width3 slide " style="position:absolute;left:285px;top:0px;">
            <div class="swiper-container">
                 <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="javascript:;">
                         <img src="../images/mVXgb15oQhFHps6SaFvz.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:;">
                         <img src="../images/yXFPbSZEo5DO0Z3zDSPh.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:;">
                        <img src="../images/UOG9VDuEKAIsjHQllOE0.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:;">
                        <img src="../images/1Ejtlh20XCnfA4GZz1Og.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:;">
                        <img src="../images/LzVLVB9aXuPME8ch0QSu.jpg" alt="">
                    </a>
                </div>
            </div>
            </div>
			    <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
        </div>


<div class="imgs">
 <?php foreach ($datas as $key=>$value): ?>
        <div class="grid-item1 work-thumbnail">
                    <a href="#" class="thumbnail" target="_blank">
                     <img src=" <?php echo $value['src']; ?>">
                    </a>
        </div>  
<?php endforeach ?>
</div>


</div>
	</form>


<div class="pager_box">
<ul class="paginationa">
			<li class="disabled">
			<span><<</span>
			</li>
			<li class="active"><span>1</span></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li class="disabled"><span>...</span></li>
			<li><a href="#">222</a></li>
			<li><a href="#">223</a></li>
			<li><a href="#">>></a></li>	
</ul>
</div>

</div>


<div class="pageFooter footer1">
    <span>@ CNU视觉联盟（www.cnu.cc）</span>
    <span>
        <a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">
            粤ICP备10023979号-3</a>
    </span>

</div>
<div class="" id="scrollUp"></div>


 </body>



 <script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 垂直切换选项
        loop: true, // 循环模式选项
        autoplay: {
            delay: 1000,
            disableOnInteraction: false
        },
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        }
    })
</script>
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
<!--分组-->
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
 </html>