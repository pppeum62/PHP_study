<?php
    $id = $_GET['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'delete from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "해당 회원 정보 삭제 완료";
    } else {
        echo "데이터 삭제 실패";
    }

    mysqli_close($conn);
?>