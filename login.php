<?php
    $id = $_GET["myId"];
    $pw = $_GET["myPw"];

    if($pw == "1234"){
        echo ("{$id}님 환영합니다!");
    }
    else
        echo("비밀번호를 확인해주세요");
?>