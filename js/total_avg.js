$(function(){

    $.ajax({
        url:'/myschedule/pages/read_json.php',
        success:function(result){

            let obj=JSON.parse(result);

            // console.log(obj);

            let dbRate = Number(obj[0].db_rate);
            let apiRate = Number(obj[0].api_rate);
            let renRate = Number(obj[0].ren_rate);
            let plaRate = Number(obj[0].pla_rate);

            // console.log(apiRate + typeof(apiRate));

            let schAvg = (dbRate * 0.4) + (apiRate * 0.2) + (renRate * 0.1) + (plaRate * 0.3) ;

            

            $(".circle-graph-container").html(`
            <div class="circle-graph easyPieChart" data-percent="${schAvg}" >
             <p>${schAvg}%</p>      
            </div>`);

            // piechart 플러그인이 ajax데이터가 다 complete 되었을 때 실행 되도록 -> piechart.js에 함수 넣어줌
            
        }
        
    });


});

