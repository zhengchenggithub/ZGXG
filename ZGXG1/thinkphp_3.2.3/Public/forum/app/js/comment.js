//点击"回复"按钮显示或隐藏回复输入框
$("body").delegate(".comment-reply","click",function(){
    if($(this).next().length>0){//判断出回复div已经存在,去除掉
        $(this).next().remove();
    }else{//添加回复div
        $(".comment-reply").next().remove();//删除已存在的所有回复div
//添加当前回复div
        var parent_id = $(this).attr("comment_id");//要回复的评论id

        var divhtml = "";
        if('off'==$(this).attr("replyswitch")){//二级评论回复后三级评论不再提供回复功能,将关闭属性附加到"提交回复"按钮"
            divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);' replyswitch='off' >提交回复</a></div></div>";
        }else{
            divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);'>提交回复</a></div></div>";
        }
        $(this).after(divhtml);
    }
});