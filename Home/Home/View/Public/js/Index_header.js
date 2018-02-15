
//如用户已登录,再次点击提示
$(".login").click(function(){

    var l = $(this).html();
    if(l!="请登录"){
        alert("如需更换用户,请先退出");
        return false;
    }
});

//如用户未登录,提示先登录;如用户已登录,提示确认后退出
$(".logout").click(function(){
    var l = $(".login").html();
    if(l=="请登录"){
        alert("请先登录");
        return false;
    }else{
        var r = confirm("您确认退出吗?");
        if(!r){
            return false;
        }
    }
});