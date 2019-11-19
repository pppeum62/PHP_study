<?php
    $id = $_POST{ 'userid' };
    $password = $_POST{ 'userpw' };

    $ck = isset($_POST{ 'idSave' });

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if($row['password'] == $password) {
                echo '로그인 성공!<br><br>';
                if($id == "admin") {
                    echo '<a href="./admin-page.php">관리자 페이지</a><br>';
                }
                echo '<a href="./member-update.php">회원정보수정</a><br>';
                echo '<a href="#">게시판</a>';

                if($ck == true){
                    setcookie('saveid', $id);
                }
            } else {
                echo '비밀번호를 확인해주세요.';
            }
        }
    } else {
        echo "아이디를 확인해주세요.";
    }

    mysqli_close($conn);
?>