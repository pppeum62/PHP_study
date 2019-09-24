<?php
    $id = $_GET["myId"];
    $pw = $_GET["myPw"];

    if($pw == "1234"){
        echo ("{$id}님 로그인<br>");
        echo ("<a href='notice.php?id=$id'>게시판</a><br>");
        echo ("<a href='#'>회원정보</a>");
    }
    else
        echo("<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>");
?>