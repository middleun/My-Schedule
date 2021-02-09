$(function() {
<<<<<<< HEAD

    let pieSize=250;
    let liWidth=$(window).width();
    // 브라우저 resize할 때도 변수 읽어줘야
    let clear;

    if(liWidth>400){
      pieSize=250;
    }else{
      pieSize=180;
    }

    // console.log(pieSize);
    
    $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
=======
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
    $('.circle-graph').easyPieChart({
      scaleColor: false,
      lineWidth: 45,
      lineCap: 'butt',
      barColor: '#5F75DF',
<<<<<<< HEAD
      trackColor: '#DDE4F7' ,
      size: pieSize,
      animate: 1200
    });

    $(window).resize(function(){
      let liWidth=$(window).width();

      if(liWidth>401){
        pieSize=250;
      }else{
        pieSize=180;
      }
      
      clearTimeout(clear);

      // timeout - 브라우저 과부하때문에
      clear=setTimeout(function(){
        $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
        $('.circle-graph').easyPieChart({
          scaleColor: false,
          lineWidth: 45,
          lineCap: 'butt',
          barColor: '#5F75DF',
          trackColor: '#DDE4F7' ,
          size: pieSize,
          animate: 2
        });
        console.log(1);

      }, 100);

    });
  });
=======
      trackColor: '#F3F6FB' ,
      size: 250,
      animate: 800
    });
  });
>>>>>>> 6e6de96b8206d7df20eb4416a82fffd8561adbba
