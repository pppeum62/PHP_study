<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];                 // 현재 비밀번호
    $updatepw = $_POST['updatepw'];     // 변경할 비밀번호
    $name = $_POST['name'];             // 회원 이름
    $birth = $_POST['birth'];           // 생년월일
    $tel_first = $_POST{'tel-first'};   // 전화번호 첫번째 세자리
    $tel_mid = $_POST{'tel-mid'};       // 전화번호 중간 네자리
    $tel_last = $_POST{'tel-last'};     // 전화번호 마지막 네자리
    $tel = "$tel_first"."-"."$tel_mid"."-"."$tel_last"; // 전화번호 전체

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($updatepw) {     // 변경할 비밀번호가 입력되어 있는지 체크
                if ($row['password'] == $pw) {       // 현재 비밀번호를 맞게 입력했는지 체크
                    $sql = 'update members set password="' .$updatepw. '" where id="' .$id. '"';
                    mysqli_query($conn, $sql);
                    echo '<script>alert("비밀번호가 변경되었습니다! 다시 로그인 해주세요"); document.location.href="login.php";</script>';
                } else {    // 현재 비밀번호를 잘못 입력했을 때
                    echo '<script>alert("비밀번호를 확인해주세요"); history.go(-1);</script>';
                }
            } else {    // 변경할 비밀번호를 입력하지 않고 비밀번호 변경 버튼 클릭
                echo '<script>alert("변경할 비밀번호를 입력해주세요"); history.go(-1);</script>';
            }

            if ($name) {     // 변경할 이름이 입력되었는지 체크
                $sql = 'update members set password="' .$name. '" where id="' .$id. '"';
                mysqli_query($conn, $sql);
                echo '<script>alert("회원정보가 변경되었습니다!"); document.location.href="login-ck.php";</script>';
            }

            if ($birth) {        // 변경할 생년월일이 입력되었는지 체크
                $sql = 'update members set password="' .$birth. '" where id="' .$id. '"';
                mysqli_query($conn, $sql);
                echo '<script>alert("회원정보가 변경되었습니다!"); document.location.href="login-ck.php";</script>';
            }

            if ($tel) {     // 변경할 전화번호가 입력되었는지 체크
                $sql = 'update members set password="' .$tel. '" where id="' .$id. '"';
                mysqli_query($conn, $sql);
                echo '<script>alert("회원정보가 변경되었습니다!"); document.location.href="login-ck.php";</script>';
            }
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
?>