
//1F电脑整机 中间分页导航特效
$(".complete .nav_list .nav_item").eq(0).addClass("curr");
$(".complete .nav_list .nav_item").hover(function(){
    index = $(this).index(".complete .nav_list .nav_item");
    $(this).addClass("curr");
    $(".complete .nav_list .nav_item").not($(this)).removeClass("curr");

    $(".complete .cont_item").eq(index).show();
    $(".complete .cont_item").not($(".complete .cont_item").eq(index)).hide();
});

//1F电脑整机 幻灯片特效实现
//第一个指示灯默认被选中
$(".complete .nav_li:first").addClass("curr");

complete = function(){
    //定时器
    C_center = setInterval(function(){
        //获取当前被选中指示灯的下标+1 便于判断是第几张幻灯片
        index = $(".complete .nav_li.curr").index(".complete .nav_li")+1;

        //循环显示指示灯
        $complete = $(".complete .nav_li.curr").next().addClass("curr");
        $(".complete .nav_li").not($complete).removeClass("curr");
        //当前指示灯的长度等于0时，说明没有下一个指示灯，需把第一个指示灯赋给对象
        if($complete.length==0){
            $complete = $(".complete .nav_li:first").addClass("curr");
        }

        //根据第几张幻灯片，来给父容器定义左移距离
        $(".complete .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        //获取父容器左移的距离
        left = parseInt($(".complete .banner_list").css("margin-left"));
        //如果等于3张幻灯片的长度
        if(left + 2174 <= 0){
            //左移距离清零
            $(".complete .banner_list").stop().css({"margin-left":"0px"});
            //同时下标赋值为1，从第一张幻灯片开始执行左移，配合鼠标移入移出效果
            index=1;
            $(".complete .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        }

    },2001);
}

//调用函数，开始动画
complete();

//nav_li 指示灯鼠标点击特效
$(".complete .nav_li").click(function(){
    //清除定时器
    clearInterval(C_center);
    //清除所有指示灯选中样式
    $(".complete .nav_li").removeClass("curr");
    //给点击指示灯添加选中样式
    $(this).addClass("curr");
    //获取点击指示灯下标+1 便于判断是第几张幻灯片
    index = $(this).index(".complete .nav_li")+1;
    //如果当前是第二张或第三张幻灯片，左移还原
    if(index==1){
        $(".complete .banner_list").animate({"margin-left":"0px"},500);
        //如果当前是第一张幻灯片，左移-725px
    }else if(index==2){
        $(".complete .banner_list").animate({"margin-left":"-725px"},500);
        //如果当前是第二张幻灯片，左移-1450px;
    }else{
        $(".complete .banner_list").animate({"margin-left":"-1450px"},500);
    }
    //阻止默认行为 - 超链接自动跳转
    return false;
});

//鼠标移入时，清除定时器；鼠标移出时，添加定时器
$(".complete .banner_list").hover(function(){
    clearInterval(C_center);
},function(){
    complete();
});

//1F电脑整机 右侧分页导航特效
$(".complete .rank_nav .rank_item").eq(0).addClass("curr");
$(".complete .rank_nav .rank_item").hover(function(){
    index = $(this).index(".complete .rank_nav .rank_item");
    $(this).addClass("curr");
    $(".complete .rank_nav .rank_item").not($(this)).removeClass("curr");

    $(".complete .rank_cont").eq(index).show();
    $(".complete .rank_cont").not($(".complete .rank_cont").eq(index)).hide();
});

//2F电脑配件 中间分页导航特效
$(".parts .nav_list .nav_item").eq(0).addClass("curr");
$(".parts .nav_list .nav_item").hover(function(){
    index = $(this).index(".parts .nav_list .nav_item");
    $(this).addClass("curr");
    $(".parts .nav_list .nav_item").not($(this)).removeClass("curr");

    $(".parts .cont_item").eq(index).show();
    $(".parts .cont_item").not($(".parts .cont_item").eq(index)).hide();
});


//2F电脑配件 幻灯片特效实现
//第一个指示灯默认被选中
$(".parts .nav_li:first").addClass("curr");

parts = function(){
    //定时器
    P_center = setInterval(function(){
        //获取当前被选中指示灯的下标+1 便于判断是第几张幻灯片
        index = $(".parts .nav_li.curr").index(".parts .nav_li")+1;

        //循环显示指示灯
        $parts = $(".parts .nav_li.curr").next().addClass("curr");
        $(".parts .nav_li").not($parts).removeClass("curr");
        //当前指示灯的长度等于0时，说明没有下一个指示灯，需把第一个指示灯赋给对象
        if($parts.length==0){
            $parts = $(".parts .nav_li:first").addClass("curr");
        }

        //根据第几张幻灯片，来给父容器定义左移距离
        $(".parts .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        //获取父容器左移的距离
        left = parseInt($(".parts .banner_list").css("margin-left"));
        //如果等于3张幻灯片的长度
        if(left + 2174 <= 0){
            //左移距离清零
            $(".parts .banner_list").stop().css({"margin-left":"0px"});
            //同时下标赋值为1，从第一张幻灯片开始执行左移，配合鼠标移入移出效果
            index=1;
            $(".parts .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        }

    },3001);
}

//调用函数，开始动画
parts();

//nav_li 指示灯鼠标点击特效
$(".parts .nav_li").click(function(){
    //清除定时器
    clearInterval(P_center);
    //清除所有指示灯选中样式
    $(".parts .nav_li").removeClass("curr");
    //给点击指示灯添加选中样式
    $(this).addClass("curr");
    //获取点击指示灯下标+1 便于判断是第几张幻灯片
    index = $(this).index(".parts .nav_li")+1;
    //如果当前是第二张或第三张幻灯片，左移还原
    if(index==1){
        $(".parts .banner_list").animate({"margin-left":"0px"},500);
        //如果当前是第一张幻灯片，左移-725px
    }else if(index==2){
        $(".parts .banner_list").animate({"margin-left":"-725px"},500);
        //如果当前是第二张幻灯片，左移-1450px;
    }else{
        $(".parts .banner_list").animate({"margin-left":"-1450px"},500);
    }
    //阻止默认行为 - 超链接自动跳转
    return false;
});

//鼠标移入时，清除定时器；鼠标移出时，添加定时器
$(".parts .banner_list").hover(function(){
    clearInterval(P_center);
},function(){
    parts();
});

//2F电脑配件 右侧分页导航特效
$(".parts .rank_nav .rank_item").eq(0).addClass("curr");
$(".parts .rank_nav .rank_item").hover(function(){
    index = $(this).index(".parts .rank_nav .rank_item");
    $(this).addClass("curr");
    $(".parts .rank_nav .rank_item").not($(this)).removeClass("curr");

    $(".parts .rank_cont").eq(index).show();
    $(".parts .rank_cont").not($(".parts .rank_cont").eq(index)).hide();
});

//3F外设装备 中间分页导航特效
$(".usb .nav_list .nav_item").eq(0).addClass("curr");
$(".usb .nav_list .nav_item").hover(function(){
    index = $(this).index(".usb .nav_list .nav_item");
    $(this).addClass("curr");
    $(".usb .nav_list .nav_item").not($(this)).removeClass("curr");

    $(".usb .cont_item").eq(index).show();
    $(".usb .cont_item").not($(".usb .cont_item").eq(index)).hide();
});

//3F外设装备 幻灯片特效实现
//第一个指示灯默认被选中
$(".usb .nav_li:first").addClass("curr");

usb = function(){
    //定时器
    U_center = setInterval(function(){
        //获取当前被选中指示灯的下标+1 便于判断是第几张幻灯片
        index = $(".usb .nav_li.curr").index(".usb .nav_li")+1;

        //循环显示指示灯
        $usb = $(".usb .nav_li.curr").next().addClass("curr");
        $(".usb .nav_li").not($usb).removeClass("curr");
        //当前指示灯的长度等于0时，说明没有下一个指示灯，需把第一个指示灯赋给对象
        if($usb.length==0){
            $usb = $(".usb .nav_li:first").addClass("curr");
        }

        //根据第几张幻灯片，来给父容器定义左移距离
        $(".usb .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        //获取父容器左移的距离
        left = parseInt($(".usb .banner_list").css("margin-left"));
        //如果等于3张幻灯片的长度
        if(left + 2174 <= 0){
            //左移距离清零
            $(".usb .banner_list").stop().css({"margin-left":"0px"});
            //同时下标赋值为1，从第一张幻灯片开始执行左移，配合鼠标移入移出效果
            index=1;
            $(".usb .banner_list").animate({"margin-left":(-725*index)+"px"},500);
        }

    },3001);
}

//调用函数，开始动画
usb();

//.nav_li 指示灯鼠标点击特效
$(".usb .nav_li").click(function(){
    //清除定时器
    clearInterval(U_center);
    //清除所有指示灯选中样式
    $(".usb .nav_li").removeClass("curr");
    //给点击指示灯添加选中样式
    $(this).addClass("curr");
    //获取点击指示灯下标+1 便于判断是第几张幻灯片
    index = $(this).index(".usb .nav_li")+1;
    //如果当前是第二张或第三张幻灯片，左移还原
    if(index==1){
        $(".usb .banner_list").animate({"margin-left":"0px"},500);
        //如果当前是第一张幻灯片，左移-725px
    }else if(index==2){
        $(".usb .banner_list").animate({"margin-left":"-725px"},500);
        //如果当前是第二张幻灯片，左移-1450px;
    }else{
        $(".usb .banner_list").animate({"margin-left":"-1450px"},500);
    }
    //阻止默认行为 - 超链接自动跳转
    return false;
});

//鼠标移入时，清除定时器；鼠标移出时，添加定时器
$(".usb .banner_list").hover(function(){
    clearInterval(U_center);
},function(){
    usb();
});

//3F外设装备 右侧分页导航特效
$(".usb .rank_nav .rank_item").eq(0).addClass("curr");
$(".usb .rank_nav .rank_item").hover(function(){
    index = $(this).index(".usb .rank_nav .rank_item");
    $(this).addClass("curr");
    $(".usb .rank_nav .rank_item").not($(this)).removeClass("curr");

    $(".usb .rank_cont").eq(index).show();
    $(".usb .rank_cont").not($(".usb .rank_cont").eq(index)).hide();
});
