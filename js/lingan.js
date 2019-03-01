window.onload=function () {
    //1.拿到页面元素
//    注意点：这边在命名变量的时候，不要使用top
    var totop=document.getElementById("scrollUp");
//    2.页面滚动的事件
    window.onscroll=function (e) {
        var oev=e||window.event;
        var scrollTop=getScroll().scrollTop;
        if(scrollTop>10){
            totop.style.display="block"
        }
        else{
            totop.style.display="none"
        }
    }
//    3.给totop绑定事件
    totop.onclick=function () {
        var timer=setInterval(function () {
//    拿到当前滚动的值
            var currentScrollTop=getScroll().scrollTop;
//     目标滚动距离
            var targetScrollTop=0;
//     确定一个布进
            var step=-20;
//     终止定时器
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
}