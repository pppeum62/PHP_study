<?php
    echo '<h3>회원정보 수정</h3>';
    echo '<hr>';

    $id = $_GET['id'];

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'php');
    $sql = 'select * from members where id="' .$id. '"';

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo '<form method="POST" action="member-update-result.php">';
            echo '<input type="hidden" name="id" value="' .$id. '">';
            echo '<table>';

            echo '<tr id="top">';
            echo '<td></td>';
            echo '<td>현재 정보</td>';
            echo '<td class="update">변경할 정보</td>';
            echo '<td></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>id</td>';
            echo '<td colspan="2">'.$row['id'].'</td>';
            echo '<td></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>password</td>';
            echo '<td><input type="password" placeholder="현재 비밀번호" name="pw"></td>';
            echo '<td><input type="password" placeholder="변경할 비밀번호" name="updatepw"></td>';
            echo '<td><input type="submit" id="btn" value="비밀번호 변경" name="pwchange"></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>name</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td><input type="text" placeholder="회원 이름" name="name"></td>';
            echo '<td><input type="submit" id="btn" value="이름변경"></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>birth</td>';
            echo '<td>'.$row['birth'].'</td>';
            echo '<td><input type="text" placeholder="생년월일(YYMMDD)" name="birth"></td>';
            echo '<td><input type="submit" id="btn" value="생년월일 변경"></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td>tel</td>';
            echo '<td>'.$row['tel'].'</td>';
            echo '
            <td>
                <select name="tel-first">
                    <option>010</option>
                    <option>011</option>
                    <option>016</option>
                    <option>018</option>
                    <option>019</option>
                </select>&nbsp;-&nbsp;
            <input type="tel" class="tel" name="tel-mid">&nbsp;-&nbsp;
            <input type="tel" class="tel" name="tel-last">
            </td>';
            echo '<td><input type="submit" id="btn" value="전화번호 변경"></td>';
            echo '</tr>';

            /*
            echo '<tr>';
            echo '<td colspan="3" id="right"><input type="submit" value="수정" id="btn"></td>';
            echo '</tr>';
            */

            echo '</table>';
            echo '</form>';
        }
    } else {
        echo "저장된 데이터가 없습니다.";
    }

    mysqli_close($conn);
?>

<style>
    table { border-collapse: collapse; }
    td { border-bottom: 1px solid #ccc; width: 150px; height: 35px; }
    #right { text-align: right; }
    #btn { background: white; border: 1px solid #ccc; }
    #top { border-top: 3px solid black; }
    .tel { width : 50px; }
    .update { width: 210px; text-align: center; }
</style>