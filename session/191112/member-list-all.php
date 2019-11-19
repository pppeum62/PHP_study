<?php
    echo '<h3>회원 정보 보기</h3>';
    echo '<hr>';

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members';

    $result = mysqli_query($conn, $sql);
?>