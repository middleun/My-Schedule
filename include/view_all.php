<div class="categoryTabs">
    <a href="/myschedule/pages/sch_view.php?key=view_all" class="active">All</a>
    <a href="/myschedule/pages/sch_view.php?key=view_db"><i class="fa fa-database"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_api"><i class="fa fa-film"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_ren"><i class="fa fa-clone"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_web"><i class="fa fa-chart-bar"></i></a>
</div>
<ul class="boardTable">
    <li class="boardTitle">
        <span class="boNum">번호</span>
        <span class="boCat">종류</span>
        <span class="boTit">제목</span>
        <span class="boReg">작성일</span>
    </li>

    <?php
        include $_SERVER["DOCUMENT_ROOT"]. "/myschedule/include/db_conn.php";
        $sql="select * from sch_txt order by sch_txt_num desc";
    
        $board_result=mysqli_query($dbConn, $sql);

        while($board_row=mysqli_fetch_array($board_result)){
            $bo_num=$board_row['sch_txt_num'];
            $bo_cat=$board_row['sch_txt_cat'];
            $bo_tit=$board_row['sch_txt_tit'];
            $bo_reg=$board_row['sch_txt_reg'];
    ?>                      
                                        
    <li class="boardList">
        <span class="boNum"><?=$bo_num?></span>
        <span class="boCat"><?=$bo_cat?></span>
        <span class="boTit"><a href="/myschedule/pages/detail_view.php?num=<?=$bo_num?>"><?=$bo_tit?></a></span>
        <span class="boReg"><?=$bo_reg?></span>
    </li>

    <?php
        }
    ?>        
</ul>
<div class="loadMore">
    <button type="button">더보기</button>
</div>