<?php
    $name = $_GET["myName"];
    $grade = $_GET["grade"];
    $sbj = $_GET["sbj"];

    echo "이름 : {$name}<br>";
    echo "학년 : {$grade}<br>";
    echo "과목 : ";

    $num = count($_GET["sbj"]);
    for($i = 0; $i < $num; $i++){
        echo $_GET["sbj"][$i];
        if($i != $num - 1)
            echo ", ";
    }
?>