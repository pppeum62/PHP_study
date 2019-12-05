<?php
    $id = $_GET['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from message_box where name="'.$id.'" and receive=0';
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    echo '<table>';
    echo '<tr>';
    echo '<td>보낸 사람</td>';
    echo '<td>내용</td>';
    echo '<td>보낸 시간</td>';
    echo '<td>읽음으로 표시</td>';
    echo '</tr>';

    while($row = mysqli_fetch_array($result)) {
        $num = $row['num'];
        echo '<tr>';
        echo '<td>'. $row['w_name'] .'</td>';
        echo '<td>'. $row['contents'] .'</td>';
        echo '<td>'. $row['date'] .'</td>';
        echo "<td><a href='receive-check.php?num=$num'>확인</a></td>";
        echo '</tr>';
    }
    echo '</table>';
?>

<style>
    table { text-align: center; }
    td { width : 150px; }
</style>