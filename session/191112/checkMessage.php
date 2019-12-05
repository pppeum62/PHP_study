<?php
    $id = $_GET['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from message_box where name="'.$id.'" and receive=0';
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num <= 0) {
        echo '쪽지함이 비어있습니다.';
    } else {
        echo '<table>';
        echo '<tr>';
        echo '<td id="td1">보낸 사람</td>';
        echo '<td id="td2">내용</td>';
        echo '<td id="td3">보낸 시간</td>';
        echo '<td id="td4">읽음으로 표시</td>';
        echo '</tr>';

        while($row = mysqli_fetch_array($result)) {
            $num = $row['num'];
            echo '<tr>';
            echo '<td>'. $row['w_name'] .'</td>';
            echo '<td id="contents">'. $row['contents'] .'</td>';
            echo '<td>'. $row['date'] .'</td>';
            echo "<td><a href='receive-check.php?num=$num'>확인</a></td>";
            echo '</tr>';
        }
        echo '</table>';
    }

    mysqli_close($conn);
?>

<style>
    table { text-align: center; border: 1px solid black; border-collapse:collapse; }
    td { border: 1px solid black; height: 40px; }
    #td1 { width: 100px; }
    #td2 { width: 300px; }
    #td3 { width: 180px; }
    #td4 { width: 120px; }
    #contents { text-align: left; padding-left: 10px; }
    a:link { text-decoration: none; color: black; font-weight: bold; }
</style>