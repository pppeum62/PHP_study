<?php
    $num = $_GET['num'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'update message_box set receive=1 where num='.$num;

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "쪽지가 읽음으로 처리되었습니다";
    } else {
        echo "쪽지 읽음으로 처리 실패". mysqli_error($conn);
    }

    mysqli_close($conn);
?>