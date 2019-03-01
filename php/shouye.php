<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data1.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas1 = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 首页 - CNU视觉联盟</title>
    <meta name="keywords" content=" CNU,视觉,摄影,视觉联盟,照片,摄影师,摄影作品集,在线摄影作品集,照片精选,网络摄影作品集,
        在线照片展廊,分享图片,专业摄影,社会摄影,上传照片,分享照片,出色的摄影作品集,摄影社区,最新摄影作品,快速创建作品集,
        模特和摄影师,商业摄影,建筑摄影,专业作品集管理,视觉中国图库,视觉中国,视觉联盟,摄影作品,摄影作品欣赏,时尚摄影,时尚摄影作品,艺术,
        艺术作品,艺术摄影作品,人体艺术,时尚杂志,品牌广告,视觉,视觉艺术,视觉作品,视觉作品欣赏,时尚,设计,当代艺术 ">
    <meta name="description" content=" 中国视觉联盟cnu.cc-是一家致力于传播优秀视觉文化,研究视觉艺术、交流视觉理念、开拓大众审美视野的专业性视觉网站。 ">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="http://img.cnu.cc/assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://img.cnu.cc/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/shouye.css">
    <link rel="stylesheet" href="../css/public.css">
    <link rel="stylesheet" href="../css/swiper.css">
    <script src="../js/swiper.js"></script>
    <script src="../js/shouye.js"></script>
    <script src="../js/common.js"></script>
	<script src="../js/jquery-1.8.2.js"></script>
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
                <a href="#">
                    <i class="myicon icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
            <li>
                <a href="lingan.php"><i class="myicon icon-inspiration"></i>
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


<div class="blackBG container pc">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="javascript:;">
                    <div class="title_content">
                        <p>孤独的超现实主义 | Kyle Thompson</p>
                    </div>
                    <img src="../images/1.jpg">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="javascript:;">
                    <div class="title_content">
                        <p>夕阳 | Juan Manuel Casir</p>
                    </div>
                    <img src="../images/2.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="javascript:;">
                    <div class="title_content">
                        <p>情绪人像｜Marat Safin ​​​​</p>
                    </div>
                    <img src="../images/3.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="javascript:;">
                    <img src="../images/4.jpg" alt="">
                </a>
            </div>

        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="row container mobile">
            <h2 class="ulTitle">每日精选</h2>
            <?php foreach ($datas as $key=>$value) :?>
            <ul class="selectedUL mobile" id="selevted">
                <div class="date">- CNU -</div>
                <hr>
                <li class="bannerLi" width="100%">
                    <a href="#" class="workCover thumbnail" target="_self">
                        <img src="<?php echo $value['img']; ?>" alt="长乐林场记">
                    </a>
                    <div class="workContent">
                        <span class="workType"><?php echo $value['workType']; ?></span>
                        <a href="authoryuanchuang.php" target="_self">
                            <h3 class="workTitle"><?php echo $value['workTitle']; ?></h3>
                        </a>
                        <div class="workBody">
                            <p><?php echo $value['workBody']; ?></p>
                        </div>
                        <div class="authorInfo">
                            <a href="authorhomepage.php" target="_blank" class="author">
                                <img src="<?php echo $value['imgInfo']; ?>">&nbsp;
                                <p><?php echo $value['authorname']; ?></p>
                            </a>
                        </div>
                    </div>
                </li>
                <br>
            </ul>
            <?php endforeach ?>

                <div class="load">
                    <?php foreach ($datas1 as $key=>$value) :?>
                    <ul class="selectedUL mobile" id="selevted">
                        <div class="date">- CNU -</div>
                        <hr>
                        <li class="bannerLi" width="100%">
                            <a href="#" class="workCover thumbnail" target="_self">
                                <img src="<?php echo $value['img']; ?>" alt="长乐林场记">
                            </a>
                            <div class="workContent">
                                <span class="workType"><?php echo $value['workType']; ?></span>
                                <a href="#" target="_self">
                                    <h3 class="workTitle"><?php echo $value['workTitle']; ?></h3>
                                </a>
                                <div class="workBody">
                                    <p><?php echo $value['workBody']; ?></p>
                                </div>
                                <div class="authorInfo">
                                    <a href="#" target="_blank" class="author">
                                        <img src="<?php echo $value['imgInfo']; ?>">&nbsp;
                                        <p><?php echo $value['authorname']; ?></p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <br>
                    </ul>  
                    <?php endforeach ?>
                </div>  
                <a id="loadMore" class="loadMore button" href="javascript:;void(0)">加载更多</a>
        </div>
        
    <hr>
    <div class="tubiao">
        <div>欢迎加入视觉联盟，这里有很多原创作品</div>
        <img src="../images/yllogo.jpg">
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

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 垂直切换选项
        loop: true, // 循环模式选项
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        }
    })
</script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 垂直切换选项
        loop: true, // 循环模式选项
        autoplay: {
            delay: 2000,
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