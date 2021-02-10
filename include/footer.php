        <footer>
            <p>Designed by MyDesign : mydeign@no-site.com</p>
        </footer>

        <!-- <script>
            const rateNum = document.querySelectorAll('.rateNum');
            console.log(rateNum);
            
            for(let i=0; i<rateNum.length; i++){
               
                
            }
        </script> -->
        <script>

            const pathname=window.location.pathname;
            const changeTit=document.querySelector('#title');
            const rateNum =document.querySelectorAll(".rateNum");


            if(pathname.includes('input_form')){
                changeTit.innerHTML="Schedule Input";

                for(let i =0; i<rateNum.length; i++){
                    rateNum[i].readOnly = true;

                }
            
            }



        </script>