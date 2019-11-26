<?php
    $name = $_POST['name'];
    $contents = $_POST['contents'];
    $w_name = $_POST['w_name'];
    $date =

    $conn = mysqli_connect('10.96.120.50', 'php', '0000', 'php');
    $data_stream = " '$name', '$contents', '$w_name' ";
    $sql = "insert into members (name, contents, date, w_name) values(".$data_stream.")";
    $result = mysqli_query($conn, $sql);
?>