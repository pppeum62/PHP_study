<?php
    $id = $_COOKIE{"userid"};
    $name = $_COOKIE{"username"};

    echo "쿠키에 저장된 id값 : " . $id . "<br>";
    echo "쿠키에 저장된 name값 : " . $name;
?>