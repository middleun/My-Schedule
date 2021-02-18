$(function(){

    $.ajax({
        url:'/myschedule/data/sch_rate.json',
        success:function(result){
            let dbRate = Number(result[0].db_rate);
            let apiRate = Number(result[0].api_rate);
            let renRate = Number(result[0].ren_rate);
            let plaRate = Number(result[0].pla_rate);

            // console.log(apiRate + typeof(apiRate));

            let schAvg = (dbRate * 0.4) + (apiRate * 0.2) + (renRate * 0.1) + (plaRate * 0.3) ;

            // console.log(result);

            $(".circle-graph-container").html(`
            <div class="circle-graph easyPieChart" data-percent="${schAvg}" >
             <p>${schAvg}%</p>      
            </div>`);

            // piechart 플러그인이 ajax데이터가 다 complete 되었을 때 실행 되도록 -> piechart.js에 함수 넣어줌
            
        }
        
    });


});

