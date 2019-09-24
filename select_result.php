<?php
    $writer = $_POST["writer"];
    $title = $_POST["title"];
    $content = $_POST["contents"];
    $option = $_POST["option"];

    echo "작성자 : {$writer}<br>";
    echo "{$option} : {$title}<br>";
    echo "{$content}";
?>