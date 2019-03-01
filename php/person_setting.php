<?php
header("Content-type:text/html;charset=utf-8");
  function doadd(){
    $d['about']=$_POST['about'];
    $d['phone']=$_POST['phone'];
    $d['description']=$_POST['description'];
    $d['province']=$_POST['province'];
    $d['city']=$_POST['city'];
    $d['area']=$_POST['area'];

     $source = $_FILES['filedata'];
     if($source['error'] !== UPLOAD_ERR_OK){
        $GLOBALS['message'] = "图片文件出错";
        return ;
     }
     $sourcefile = $source['tmp_name'];
     $sourcename = $source['name'];
     $dest1 = "../uploads/" . iconv('UTF-8', 'GBK', $sourcename);
     if(move_uploaded_file($sourcefile, $dest1)){
        $GLOBALS['message'] = "上传图片文件成功";
        $d['source'] =  iconv('GBK', 'UTF-8', $dest1);
     };
        var_dump($d);

        $str = file_get_contents("data.json");
        $arr = json_decode($str,true);
        $arr[] = $d;
        $str = json_encode($arr);
        file_put_contents("data.json", $str);
         header("Location: mymain.php");
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        doadd();
        }
        ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/person_setting.css">
    <link rel="stylesheet" href="../css/common.css">
    <script src="../js/common.js"></script>
    <script src="../js/jquery-1.8.2.js"></script>
    <script src="../js/person_setting.js"></script>
    <style type="text/css">
    #pic{
         width:100px;
        height:100px;
        position:absolute;
    }
    #photo{
       right: -192px;
    top: 74px;
    position: relative;
    }
    
 </style>
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
<div class="content" id="content">
    <div class="tab">
        <span class="current">基本资料</span>
        <span>社交绑定</span>
        <span>修改密码</span>
    </div>
    <div class="container">
        <div class="con current">
         



            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" accept-charset="UTF-8" class="form-horizontal">
                <input name="_method" type="hidden" value="PATCH">
                <input name="_token" type="hidden" value="ki7D3vtxjtliZCGV9sQ5tIUVTg0c729JlTYPSCGy">
                <input name="avatar" id="avatar" type="hidden"/>
                <div class="form-group control-group">
                    <span class="tips">
                        <i class="info"> </i>
                        完善基本资料，可以获得更高人气！</span>

                    <hr>
                    <!-- userpic -->
                    <label>头像</label>
                    <div class="controls">
                        <div  style="background-image: url();width:100px;">
                            <div id="userpic" class="userpic">
                            <img class="userpic" id="pic">
                                        <input type="file" value="上传头像" name="filedata" id="photo" accept="image/*" onchange="getContent()">
                                        
                            <div class="js-preview userpic__preview"></div>
                    <div class="btn btn-default btn-xs js-fileapi-wrapper">
                                    <div class="js-browse">
                                    

                                    </div>
                                    <div class="js-upload" style="display: none;">
                                        <div class="progress progress-success">
                                            <div class="js-progress bar"></div>
                                        </div>
                                        <span class="btn-txt">Uploading</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="popup" class="popup" style="display: none;">
                        <div class="popup__body">
                            <div class="js-img"></div>
                        </div>
                        <div style="margin: 0 0 5px; text-align: center;">
                            <div class="js-upload btn btn_browse btn_browse_small">Upload</div>
                        </div>
                    </div>

                    <hr>

                    <label class="control-label" for="input01">显示名字</label>
                    <div class="controls">
                        <input class="form-control" placeholder="填写你的显示名字" name="username" type="text" value="cxd">
                    </div>


                    <label for="email">邮箱</label>
                    <div class="controls">
                        <input class="form-control" placeholder="填写你的邮箱（不公开）" name="email" type="text" value="123456789@qq.com">
                    </div>

                    <hr>
                    <label for="gender">性别</label>
                    <div class="controls">
                        <span class="radio"> <input name="gender" type="radio" value="1">男</span>
                        <span class="radio"><input name="gender" type="radio" value="2">女</span>
                    </div>
                    <label for="location">所在地</label>
                    <div class="controls">
                        <select name="province" id="province">
                            </select>
                        <select name="city" id="city">
                            <option value="">请选择市</option>
                        </select>
                        <select name="area" id="area">
                            <option value="">请选择区</option>
                        </select>
                </div>

                    <label for="introduction">简介</label>
                    <div class="controls introduction">
                    <textarea class="form-control" style="height: 54px" placeholder="一句话介绍一下自己吧，让别人更了解你" rows="2" name="about" cols="50"></textarea>

                </div>
                    <hr>
                    <div class="tips controls" >完善以下资料，也许可以为您带来业务上的帮助！</div>
                    <label for="job">职业</label>
                    <div class="controls" style="position: relative;padding-top: 10px">
                        <span class="radio"><input name="job" type="radio" value="1">摄影师</span>
                        <span class="radio"><input name="job" type="radio" value="2">模特</span>
                        <span class="radio"><input name="job" type="radio" value="20">其他</span>
                    </div>
                    <label for="phone">手机</label>
                    <div class="controls">
                        <input class="form-control" placeholder="留下手机，方便CNU可以联系你（不公开）" name="phone" type="text">
                    </div>

                    <label for="description">主页描述</label>
                    <div class="controls introduction" style="max-width:600px;">
                        <textarea style="height: 108px;" id="editor" class="form-control" placeholder="写下任何你希望对读者表达的内容，不排除广告：）" rows="4" name="description" cols="50"></textarea>

                    </div>
                </div>
                <hr>
                <div class="operation">
                    <button tabindex="3" type="submit" class="btn btn-danger "
                            onclick="return checkAddress();">更新</button>
                </div>
            </form>
            <div class="pageFooter">
                <span>@ CNU视觉联盟（www.cnu.cc）</span><span><a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">粤ICP备10023979号-3</a></span>

            </div>
            <div class="totop" style="display: none;">

            </div>
        </div>
        <div class="con">
            <div class="binding-header">
                <span class="title">微信账号绑定</span>
                <img src="../images/wechat.png">
                <div class="right">
                    <a class="btn btn-danger" href="https://open.weixin.qq.com/connect/qrconnect?appid=wxd52bd10dea941537&amp;redirect_uri=http://www.cnu.cc/auth/addWechatBinding&amp;response_type=code&amp;scope=snsapi_login&amp;state=533613#wechat_redirect">立即绑定</a>
                    <span class="description">绑定后，可以使用微信账号登陆</span>
                </div>
            </div>
            <div class="binding-header">
                <span class="title">新浪微博绑定</span>
                <img src="../images/sina.png">
                <div class="right">
                    <a class="btn btn-danger" href="https://api.weibo.com/oauth2/authorize?client_id=1300966061&amp;response_type=code&amp;redirect_uri=http://www.cnu.cc/auth/sinaBinding">立即绑定</a>
                    <span class="description">绑定后，可以使用微博账号登陆</span>
                </div>

            </div>
            <div class="pageFooter">
                <span>@ CNU视觉联盟（www.cnu.cc）</span><span><a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">粤ICP备10023979号-3</a></span>

            </div>
        </div>
        <div class="con">

            <div class="col-md-6 col-md-offset-3">
                <form id="modifyform" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="old_password">旧密码</label>
                        <input class="form-control" placeholder="旧密码" type="password" name="old_password" id="old_password">
                    </div>

                    <div class="form-group">
                        <label for="password">新密码</label>
                        <input class="form-control" placeholder="新密码" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">确认密码</label>
                        <input class="form-control" placeholder="确认密码" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                    <?php if (isset($message)): ?>
                    <div style="background-color: pink;width: 100%;height: 50px;line-height: 50px;font-size: 18px;padding-left:30px;">
                        <?php echo $message; ?>
                    </div>
                    <?php endif ?>

                    <div class="form-actions form-group">
                        <button type="button" class="btn btn-primary" id="btn">提交</button>
                    </div>
                </form>
            </div>
            <div class="pageFooter">
                <span>@ CNU视觉联盟（www.cnu.cc）</span><span><a target="_blank" href="http://www.miitbeian.gov.cn/" style="color:#666666">粤ICP备10023979号-3</a></span>

            </div>
    </div>
    </div>

</div>

</body>


<script>
    // 返回顶部

    var totop=document.querySelectorAll(".totop")[0];
    window.onscroll=function (e) {
        var oev=e||window.event;
        var scrollTop=getScroll().scrollTop;
        if(scrollTop>10){
            totop.style.display="block";
        }
        else{
            totop.style.display="none";
        }
    }
    totop.onclick=function () {
        //document.scrolltop
        var timer=setInterval(function () {
            var currentScrollTop=getScroll().scrollTop;
            var targetScrollTop=0;
            var step=-10;
            if(Math.abs(currentScrollTop-targetScrollTop)<Math.abs(step)){
                document.body.scrollTop=targetScrollTop;
                document.documentElement.scrollTop=targetScrollTop;
                clearInterval(timer);
                return
            }
            currentScrollTop+=step;
            document.body.scrollTop=currentScrollTop;
            document.documentElement.scrollTop=currentScrollTop;


        },20)
    }


</script>
<script>
    //tab转换

    var allspan=document.querySelectorAll(".tab span");
    var alcon=document.querySelectorAll(".container .con");
    for(var i=0;i<allspan.length;i++){
        allspan[i].index=i;
        allspan[i].onclick=doClick;
    }
    function  doClick() {
        for(var j=0;j<allspan.length;j++){
            allspan[j].className="";
        }
        this.className="current";
        var index=this.index;
        for (var j=0;j<alcon.length;j++){
            alcon[j].className="con";
        }
        alcon[index].className="con current";
    }

</script>
<script>
    //记住密码
    $("#btn").click(function(){

        console.log($("#modifyform").serialize());

        $.ajax({
            url: 'modifyPwd.php',
            type: 'post',
            data: $("#modifyform").serialize(),
            success: function (res) {
                var s=res.message;
                if(s=="success"){
                  window.location.href="shouye.php";

                }
                else{
                    alert("修改密码失败");
                }

          }
        })
    })
</script>
<script>
    //下拉列表
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
<script>
    //   QQ分组
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
//<!--信息提交-->

</script>
<script>
//    <!--省市联动-->
    //先获取第一个select(province)的数据
    $.ajax({
        url : "province_city.php",
        type : "get",
        data : {"flag":1},
        success:function(res){
            var html = "";
            html += "<option>请选择省</option>";
            for(var i=0;i<res.length;i++){
                var p = res[i];
                html += "<option value='"+p.id+"'>"+p.province+"</option>";
            }
            $("#province").html(html);
        }
    })


    //{"flag":2,"id":$(this).val()},
    //flag 为1 表示获取省份数据
    //flag 为2 表示获取城市数据
    //flag 为3 表示获取区的数据
    $("#province").change(function(){
        //console.log($(this).val());
        $.ajax({
            url : "province_city.php",
            type : "get",
            data : {"flag":2,"id":$(this).val()},
            success:function(res){
                var html = "";
                html += "<option value='-1'>请选择市</option>";
                for(var i=0;i<res.length;i++){
                    var p = res[i];
                    html += "<option value='"+p.id+"'>"+p.city+"</option>";
                }
                $("#city").html(html);
            }
        })
    })


    $("#city").change(function(){
        //console.log($(this).val());
        $.ajax({
            url : "province_city.php",
            type : "get",
            data : {"flag":3,"id":$(this).val()},
            success:function(res){
                var html = "";
                html += "<option value='-1'>请选择区</option>";
                for(var i=0;i<res.length;i++){
                    var p = res[i];
                    html += "<option value='"+p.id+"'>"+p.county+"</option>";
                }
                $("#area").html(html);
            }
        })
    })
</script>
<script>
    //要做用户上传头像预览
    function getContent(){
        //1.新建一个FileReader对象
        var reader = new FileReader();
        /*
        //2.FileReader对象读取文件的三个方法
        * readAsText()   返回普通文本
        * readAsBinaryString()  返回二进制的字符串
        * readAsDataURL()  读二进制数据用的
        * */
        //3.获取上传字段的文件信息
        var files = my$("photo").files;
        //4.读取上传字段的信息
        reader.readAsDataURL(files[0]);
        //5.onload表示读取数据完毕
        reader.onload = function(){
            //6.将读取到的数据赋值给img标签
            my$("pic").src= reader.result;
        }
    }
</script>



<script type="text/javascript">
    // 其实就是Cookies.getCookie 跟 Cookies.SetCookie了
var temp;
if（Cookies.getCookie("num")==null || Cookies.getCookie("num")=="undefined")
{
    temp = 1
    Cookies.SetCookie("num",temp);
}
else
{
    temp = parseInt(Cookies.getCookie("num"))+1;
    Cookies.Setcookie("num",temp)
}
doucment.getElementById("").innerText = temp;
</script>



</html>

