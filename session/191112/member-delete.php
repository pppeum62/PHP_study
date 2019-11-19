<?php
    echo '<h3>회원 정보 삭제 페이지</h3>';
    echo '삭제할 회원을 선택해주세요';
    echo '<hr>';

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['id'] == "admin"){
                continue;
            }
            $id = $row['id'];
            echo "(id : ".$row['id'].") - (name : ".$row['name']."</a>) - (<a href='member-delete-result.php?id=$id'>회원 정보 삭제</a>)<br>";
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
?>