<?php
    $name = $_POST{'name'};
    $id = $_POST{'id'};
    $pw = $_POST{'pw'};
    $email = $_POST{'email'};
    $r1 = $_POST{'birth'};
    $r2 = $_POST{'gender'};
    $birth = $_POST{'birth'};
    $gender = $_POST{'gender'};
    $tel_first = $_POST{'tel-first'};
    $tel_mid = $_POST{'tel-mid'};
    $tel_last = $_POST{'tel-last'};
    $tel = "$tel_first"."-"."$tel_mid"."-"."$tel_last";
    $address = $_POST{'address'};
    $address_details = $_POST{'address_details'};

    $yr = substr($birth, 0, 2);

    if ($r2 == "1" || $r2 == "2") {
        $year = 1900 + $yr;
    } else {
        $year = 2000 + $yr;
    }

    $age = date("Y", time()) - $year + 1;

    if ($r2 == "1" || $r2 == "3") {
        $gender = "남자";
    } else if ($r2 == "2" || $r2 == "4") {
        $gender = "여자";
    }

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');

    $data_stream = " '$id', '$name', '$pw', '$birth', '$address', '$address_details', '$tel', '$email', '$gender', $age ";
    $sql = "insert into members (id, name, password, birth, addr1, addr2, tel, email, gender, age) values(".$data_stream.")";

    if (mysqli_query($conn, $sql)) {
        echo "insert 성공";
    } else {
        echo "실패 : " . mysqli_error($conn);
    }

    echo "<table>";

    echo "<tr>";
    echo "<td>이름</td>";
    echo "<td>"."$name"."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>아이디</td>";
    echo "<td>"."$id"."</td";
    echo "</tr>";

    echo "<tr>";
    echo "<td>이메일</td>";
    echo "<td>".$email."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>나이</td>";
    echo "<td>".$age."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>성별</td>";
    if ($gender == "남자") {
        echo "<td>남자</td>";
    } else {
        echo "<td>여자</td>";
    }

    echo "<tr>";
    echo "<td>전화번호</td>";
    echo "<td>"."$tel"."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>주소</td>";
    echo "<td>"."$address"."</td>";
    echo "</tr>";

    echo "</table>";

?>