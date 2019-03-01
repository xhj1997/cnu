<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data2.json");
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
    <title>Rosalyn的作品 - CNU视觉联盟</title>
    <meta name="keyword" content=" CNU,视觉,摄影,视觉联盟,照片,摄影师,摄影作品集,在线摄影作品集,照片精选,网络摄影作品集,在线照片展廊,分享图片,专业摄影,社会摄影,
    上传照片,分享照片,出色的摄影作品集,摄影社区,最新摄影作品,快速创建作品集,模特和摄影师,商业摄影,建筑摄影,专业作品集管理,视觉中国图库,视觉中国,视觉联盟,摄影作品,
    摄影作品欣赏,时尚摄影,时尚摄影作品,艺术,艺术作品,艺术摄影作品,人体艺术,时尚杂志,品牌广告,视觉,视觉艺术,视觉作品,视觉作品欣赏,时尚,设计,当代艺术 ">
    <meta name="description" content=" 中国视觉联盟cnu.cc-是一家致力于传播优秀视觉文化,研究视觉艺术、交流视觉理念、开拓大众审美视野的专业性视觉网站。">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/authorhomepage.css">
    <link rel="stylesheet" href="../css/public.css">
    <script src="../js/common.js"></script>
    <script src="../js/authorhomepage.js"></script>
    <script src="../js/jquery-1.8.2.js"></script>
    
</head>
<body>


 



<div class="back">
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
    <div class="box1" id="box1">
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

    <div class="jumbotron">
        <img class="h_bg" src="../images/yuanchuang19.png">
        <div class="author_info">
            <img class="avatar" src="../images/shouye16.JPG">
            <div class="author_follow">
                <span class="authorname">Rosalyn</span>
                <form method="POST">
                    <input name="_token" type="button" id="guanzhu" value="+ 关注">
                </form>
            </div>
        </div>
        <div class="count">
            <a href="#" class="followingsBtn">
                <span class="count_label">关注</span>
                <span class="following_count" id="following_count">9</span>
            </a>&nbsp;
            <a href="#" class="followingsBtn">
                <span class="count_label">粉丝</span>
                <span id="count_label">1</span>
            </a>&nbsp;
            <span class="count_label">获推荐</span>
            <span>213</span>
        </div>
        <span class="about">简介:微博：@Rosalin-ying</span>
    </div>
    <div class="box" id="box">
        <div class="hd">
            <span class="current">关于</span>
            <span>作品（2)</span>
            <span>推荐（0）</span>
            <span>灵感（0）</span>
        </div>
        <div class="bd">
            <ul>
                <li class="current">
                    <div class="job">&nbsp;职业：
                    <span class="authorjob">摄影师</span>
                    </div>
                    <div class="careabout">
                        <div class="careaboutTitle">&nbsp;Ta的关注</div><br>
                        <div class="careaboutInfo" id="careaboutInfo">
                        <?php foreach ($datas as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                        </div>
                    </div>
                    <div class="fans">
                        <div class="fansTitle">&nbsp;Ta的粉丝</div><br>
                        <div class="fansInfo" id="fansInfo">

                            <a href="#" class="workCover thumbnail" target="_self">
                                 <img src="../images/author1.jpg">
                            </a>
                           <a href="#" class="workCover1" target="_self" id="workCover1">
                                 <img src="../images/shouye16.JPG" width="14%" weight="14%">
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="page-title">共发表了2幅作品：</div>
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                <img src="../images/yuanchuang1.png">
                                <div class="coltitle">
                                    <span class="title">《Sweet Pink》</span><br>
                                    <span class="time">2018-10-4</span><br>
                                    <span class="time">9张</span>
                                </div>
                                <div class="count"></div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#">
                                <img src="../images/yuanchuang13.png">
                                <div class="coltitle">
                                    <span class="title">《Blingking Light》</span><br>
                                    <span class="time">2018-10-6</span>
                                    <br>
                                    <span class="time">10张</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="page-title">共推荐0件作品：</div>
                    <div class="content">没有内容！</div>
                </li>
                <li>
                    <div class="page-title">共发表了0篇灵感：</div>
                    <div class="content">没有内容！</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <span>@ CNU视觉联盟（www.cnu.cc）</span>
            <span>
                <a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">粤ICP备10023979号-3
                </a>
            </span>
    </div>
</div>
</body>

<!--tab转换栏-->
<script>
    my$("box").onclick=function(){
    }
</script>
<script>
    var allspan=document.querySelectorAll(".hd span");
    var alli=document.querySelectorAll(".bd li");
    for(var i=0;i<allspan.length;i++){
        allspan[i].index=i;
        allspan[i].onclick=doClick;
    }

    function  doClick() {
        //首先让其他的span移除高亮
        for(var j=0;j<allspan.length;j++){
            allspan[j].className="";
        }
        //让当前的span高亮
        this.className="current";

        //让bd下面对应的内容块显示
        //获取所点击的span的下标信息
//            var index=this.getAttribute("index");
        var index=this.index;
        //让bd下面其余的内容块隐藏
        for (var j=0;j<alli.length;j++){
            alli[j].className="";
        }
        //让当前下标的内容块显示
        alli[index].className="current";
    }
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