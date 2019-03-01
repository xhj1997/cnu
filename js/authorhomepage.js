/**
 * Created by student on 2018/11/17.
 */
function getGuanzhu(){
    var index = true;
    var count=my$("following_count");
    var count_label=my$("count_label");
    my$("guanzhu").onclick = function () {
        if(index == true){
            index = false;
            my$("guanzhu").value = "取消关注";
            my$("count_label").innerText ="2";
            my$("workCover1").style.display="inline";
        }
        else {
            index = true;
            my$("guanzhu").value = "+ 关注";
            my$("count_label").innerText ="1";
            my$("workCover1").style.display="none";
        }
    }
}
window.onload=function(){
    getGuanzhu();
}