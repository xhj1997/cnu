<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my2.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas1 = json_decode($strs,true);
    // var_dump($datas1);
  }
?>

<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my3.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas2 = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my4.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas3 = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my5.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas4 = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  //1.读取data.json文件数据
  $strs = file_get_contents("../html/data_my6.json");
  if (!empty($strs)) {
    //将$data转换为关联数组
    $datas5 = json_decode($strs,true);
    /*var_dump($datas);*/
  }
?>
<?php
header("Content-type:text/html;charset=utf-8");
  $strs = file_get_contents("data.json");
  if (!empty($strs)) {
    $datas7 = json_decode($strs,true);
    // var_dump($datas7);
  }

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/mymain.css">
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
<div class="jumbotron isMobile">
 <?php foreach ($datas7 as $key=>$value) :?>
    <div class="shadow"></div>
    <img class="h_bg" src="">
    <div class="author_info">
        <img class="avatar" src="<?php echo $value['source']; ?>">
        <div class="author_follow">
             <span class="author_name">cxd</span>
                            <span class="female"></span>
                    <div class="form-group status-post-submit">
                    <a href="person_setting.php?id=<?php echo $key?>" class="btn btn-default btn-sm">个人设置</a>
                </div>
                    </div>
        <div class="count">
            <a class="" href="#"><span class="count_label">关注</span><span class="following_count">4</span></a>
            <a class="fansBtn" href="#"><span class="count_label">粉丝</span><span>0</span></a>
             <span class="count_label">获推荐</span><span>0</span>
         </div>
        <span class="about">简介:<?php echo $value['about']; ?></span>
       
    </div>
 <?php endforeach ?>
</div>  
    <div class="page-header second-nav">

        <ul class="container nav nav-pills" id="second_nav">
            <li class="current"><a href="#">关于</a></li>
            <li><a href="#">作品<span>(10)</span></a></li>
            <li><a href="#">推荐<span>(14)</span></a></li>
            <li><a href="#">收藏<span>(12)</span></a></li>
            <li><a href="#">灵感<span>(14)</span></a></li>
         </ul>
      

    
     <div class="divs">
             <div class="con current">
                 <div class="next">
                    <h3 class="h3">职业：摄影师</h3>
                    <br>
                    <p>拍照</p>
                 </div>
                 <div class="second">
                     <h3 class="h3">Ta的关注</h3>
                     <div class="tuji">
                         <?php foreach ($datas as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
                 </div>
                 <div class="third">
                     <h3 class="h3">Ta的粉丝</h3>
                     <div class="tuji">
                         <?php foreach ($datas1 as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
                 </div>
             </div> 
             <div class="con">
                 <div class="tuji2">
                         <?php foreach ($datas2 as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
             </div> 
             <div class="con">
                  <div class="tuji3">
                         <?php foreach ($datas as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
             </div>
             <div class="con">
                 <div class="tuji4">
                         <?php foreach ($datas4 as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
             </div>
             <div class="con">
                <div class="tuji5">
                         <?php foreach ($datas5 as $key=>$value) :?>
                        <a href="#" class="workCover thumbnail" id="workCover" target="_self">
                              <img src="<?php echo $value['img']; ?>">
                        </a>
                         <?php endforeach ?>
                     </div>
             </div>
         </div>
</div>
</body>

<script>
    my$("slidetoggle").onclick=function () {
        if(this.value=="隐藏"){
            this.value="显示";
//            my$("dv").style.display="none";
            my$("box").style.display="block";
            my$("content").style.top="422px";

        }
        else{
            this.value="隐藏";
//            my$("dv").style.display="block";
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
<!--tab转换-->
<script>
    var allspan=document.querySelectorAll("#second_nav li");
    var alcon=document.querySelectorAll(".divs .con");
    for(var i=0;i<allspan.length;i++){
        allspan[i].index=i;
        allspan[i].onclick=doClick;
    }

    function  doClick() {
        for(var j=0;j<allspan.length;j++){
            allspan[j].className="";
            console.log(j);
        }
        this.className="current";
        var index=this.index;
        for (var j=0;j<alcon.length;j++){
            alcon[j].className="con";
        }
        alcon[index].className="con current";
    }
</script>
</html>