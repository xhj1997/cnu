function Load(){
    var loadmore=document.querySelector(".loadMore");
    var load=document.querySelector(".load");
    loadmore.onclick=function(){
    load.style.display="block";
}
}
window.onload=function(){
    Load();
}
