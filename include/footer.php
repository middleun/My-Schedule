        <footer>
            <p>Designed by MyDesign : mydeign@no-site.com</p>
        </footer>

        <script>

            const pathname=window.location.pathname;
            const changeTit=document.querySelector('#title');
            const rateNum =document.querySelectorAll(".rateNum");

            // 페이지 게시판 별 헤더 바꿔주기(header.php 공통으로 뺐기 때문에 따로 지정)
            if(pathname.includes('input_form')){
                changeTit.innerHTML="Schedule Input";
                

                for(let i =0; i<rateNum.length; i++){
                    rateNum[i].readOnly = true;

                }
            
            }else if(pathname.includes('sch_view')){
                changeTit.innerHTML="Schedule Board";

                
            }else if(pathname.includes('detail_view')){
                changeTit.innerHTML="Detail Schedule";
            }    
            



        </script>