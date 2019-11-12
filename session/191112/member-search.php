<?php
    echo '<h3>검색된 회원 리스트</h3>';
    echo '<hr>';

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');

    $choose = $_POST['choose'];
    $search = $_POST['search'];

    if ($choose == "이름") {
        $sql = 'select * from members where name="' .$search. '"';
    } else if ($choose == "아이디") {
        $sql = 'select * from members where id="' .$search. '"';
    } else if ($choose == "성별") {
        $sql = 'select * from members where gender="' .$search. '"';
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "(id : ".$row['id'].") - (name : ".$row['name'].") - (birthday : ".$row['birth'].") - (tel : ".$row['tel'].")<br>";
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
?>