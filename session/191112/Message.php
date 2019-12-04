<?php
    $name = $_POST['name'];
    $contents = $_POST['contents'];
    $w_name = $_POST['w_name'];
    $time = mktime();
    $date = date("Y-m-d h:i:s", $time);

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $data_stream = " '$name', '$contents', '$date', '$w_name' ";
    $sql = "insert into message_box (name, contents, date, w_name) values(".$data_stream.")";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "쪽지 보내기 성공";
    } else {
        echo "실패 : " . mysqli_error($conn);
    }
?>