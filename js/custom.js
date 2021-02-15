$(function(){
        // subPortfolio bar animation
        for(let i=0; i<$(".subPfBar").length; i++){
            let rateNum=$(".subPfBar").eq(i).find(".rateNum").val();
            $(".subPfBar").eq(i).find(".pfBar").animate({width:rateNum + "%"}, 1200);
    }

    // fix footer bottom of browser

    let fixedFooter = function(){
        let vh = $(window).height();
        let gWh = $(".gridWrap").outerHeight();

        if(vh < gWh){
            $("footer").css({position:'relative'});

        }else{
            $("footer").css({position:'fixed'});

        }
    }
 
    
});