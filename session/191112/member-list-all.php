<?php
    echo '<h3>회원 정보 보기</h3>';
    echo '<hr>';

    $id = $_GET['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "(id : ".$row['id'].") - (name : ".$row['name'].") - (birthday : ".$row['birth'].") -
            (tel : ".$row['tel'].") - (age : ".$row['age'].")<br>";
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
    
?>