<?php
    $id = setcookie("userid", $_GET{'userid'});
    $name = setcookie("username", $_GET{'username'});

    if($id and $name) {
        echo "쿠키 생성 완료!";
        echo "<script> location.href = 'b.php' </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쿠키 생성하기</title>
    </head>
    <body>
        <a href="b.php">b.php로 이동하기</a>
    </body>
</html>