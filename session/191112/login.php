<?php
    $id = "";
    if(isset($_COOKIE{'saveid'})) {
        $id = $_COOKIE{'saveid'};
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쿠키 생성하기</title>
        <style>
            a:link { text-decoration: none; color: black; }
        </style>
    </head>
    <body>
        <form method="POST" action="login-ck.php">
            <input type="text" name="userid" id="userid" placeholder="id" value=<?=$id?>>
            <input type="checkbox" name="idSave" id="idSave"/><label for="idSave">ID 저장</label><br/>
            <input type="password" name="userpw" placeholder="password"/>
            <input type="submit" value="확인"/>
        </form>
        <br>
        <a href="../191024/sign-up.html">회원가입</a>
    </body>
</html>