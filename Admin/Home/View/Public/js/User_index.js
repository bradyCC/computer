

//删除提示框
$(".del").click(function(){
    var con = confirm('您确认删除吗？');
    if(!con){
        return false;
    }
});

//全选
$(".check_all").click(function(){
    $(":checkbox").each(function(){
        this.checked = true;
    });
});

//取消
$(".clear_all").click(function(){
    $(":checkbox").each(function(){
        this.checked = false;
    });
});

//全部删除提示框
$(".del_all").click(function(){
    $(":checkbox").each(function(){
        if(this.checked){
            var con = confirm('您确认全部删除吗？');
            if(!con){
                return false;
            }else{
                $("form").submit();
            }
        }else{
            return false;
        }
    });
});