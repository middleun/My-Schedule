$(function(){
    // subPortfolio bar animation
    for(let i=0; i<$(".subPfBar").length; i++){
        let rateNum=$(".subPfBar").eq(i).find(".rateNum").val();
        $(".subPfBar").eq(i).find(".pfBar").animate({width:rateNum + "%"}, 1200);
    }

    // header icon control
    $(".mIcon").click(function(){
        $(this).toggleClass("on");
        $(".depth-1").slideToggle();    
    });

    // when click anywhere except mIcon
    $(document).click(function(e){
        if(!$(e.target).hasClass("mIcon")){
            $(".mIcon").removeClass("on");
            $(".depth-1").hide();
        }
    })

    // schedule board page hidden input show and hide
    $(".updateConBtn").click(function(){
        $(this).toggleClass("on");

        if($(this).hasClass("on")){
            $(this).text("수정 취소");
            $(this).css({"color":"#5F75DF", "background":"#fff"})
            $(".detailTit h2, .boCon em").hide();
            $(".hiddenTit, .hiddenCon, .subBtn").show();

        }else{
            $(this).text("진행상황 수정");
            $(this).css({"color":"#fff", "background":"#5f75df"})
            $(".detailTit h2, .boCon em").show();
            $(".hiddenTit, .hiddenCon, .subBtn").hide();
                   

        }
    }); 
    
});