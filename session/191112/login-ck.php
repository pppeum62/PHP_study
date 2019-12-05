<?php
    $id = $_POST{ 'userid' };
    $password = $_POST{ 'userpw' };

    $ck = isset($_POST{ 'idSave' });

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($password == $row['password']) {
                echo '로그인 성공!<br><br>';

                $sql = 'select * from message_box where name="'.$id.'" and receive=0';
                mysqli_query($conn, $sql);
                $message_num = mysqli_num_rows(mysqli_query($conn, $sql));

                if($id == "admin") {
                    echo '<a href="./admin-page.php">관리자 페이지</a><br>';
                }
                echo "<a href='member-update.php?id=$id'>회원정보수정</a><br>";
                echo "<a href='ShortMessage.php?id=$id'>쪽지 보내기</a><br>";
                echo "새로운 쪽지 <a href='checkMessage.php?id=$id'>" . $message_num . '</a>';

                if($ck == true){
                    setcookie('saveid', $id);
                }
            } else {
                echo '<script>alert("비밀번호를 확인해주세요"); history.go(-1);</script>';
            }
        }
    } else {
        echo '<script>alert("아이디를 확인해주세요"); history.go(-1);</script>';
    }

    mysqli_close($conn);
?>