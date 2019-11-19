<?php
    echo '<h3>회원정보 수정</h3>';
    echo '<hr>';

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'update members set dept=? where id=?';
?>