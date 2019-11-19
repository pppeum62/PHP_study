<?php
    echo '<h3>회원 리스트</h3>';
    echo '회원 정보를 모두 보려면 회원 이름을 클릭하세요';
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
            echo "(id : ".$row['id'].") - (name : <a href='./member-list-all.php?id=$id'>".$row['name']."</a>)<br>";
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
?>