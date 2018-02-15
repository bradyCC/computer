
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

//添加提交
$(".submit").click(function(){
    $(".r_form").submit();
});

$(".submit").hover(function(){
    $(this).css({"color":"#f30213","background":"#fff"});
},function(){
    $(this).css({"color":"#272822","background":"#0ff"});
})

//清空重置
$(".reset").click(function(){
    $("input").val("");
});

$(".reset").hover(function(){
    $(this).css({"color":"#f30213","background":"#fff"});
},function(){
    $(this).css({"color":"#272822","background":"#0ff"});
})

//左边栏点击分页特效
// $(".left ul li").click(function(){
//     index = $(this).index(".left ul li");
//
//     //左边栏鼠标点击样式
//     $(this).css({"color":"#f30213","background":"#fff"});
//     $(".left ul li").not($(this)).css({"color":"#fff","background":"#f30213"});
//
//     $(".welcome").hide();
//     $(".indent").hide();
//     $(".right .right_item").eq(index).show();
//     $(".right .right_item").not($(".right .right_item").eq(index)).hide();
// });
