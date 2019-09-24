<?php
    $id = $_GET["id"];
    $title = $_GET["title"];
    $content = $_GET["contents"];
    $option = $_GET["option"];

    echo "작성자 : {$id}<br>";
    echo "{$option} : {$title}<br>";
    echo "{$content}";
?>