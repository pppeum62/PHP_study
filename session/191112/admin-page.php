<?php
    echo '<h3>관리자 페이지</h3>';
    echo '<hr>';

    echo '<a href="member-list.php">회원 리스트 보기</a><br>';
    echo '<a href="member-delete.php">회원 정보 삭제</a>';
    echo '<br><hr>';
    
    echo '검색&nbsp;';
    
    echo '<form method="POST" action="member-search.php">';
    echo '<select name="choose">';
    echo '<option value="이름">이름</option>';
    echo '<option value="아이디">아이디</option>';
    echo '<option value="성별">성별</option>';
    echo '</select>';
    echo '&nbsp;';

    echo '<input type="text" name="search">';
    echo '&nbsp;';
    echo '<input type="submit" value="검색">';
    echo '</form>';
?>