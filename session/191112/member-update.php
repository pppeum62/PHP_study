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
            echo '</tr>';

            echo '<tr>';
            echo '<td>id</td>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td></td>';
            echo '</tr>';

            /* password-change-area start */
            echo '<tr id="pw-info">';
            echo '<td>password</td>';
            echo '<td>******</td>';
            // echo '<td><input type="password" placeholder="변경할 비밀번호" name="updatepw"></td>';
            echo '<td class="right"><input type="button" class="btn cg-btn" value="비밀번호 변경" name="pwchange" onclick="pwchageview()"></td>';
            echo '</tr>';

            echo '<tr id="pw-change-area" style="display:none">';
            echo '<td>password</td>';
            echo '
            <td colspan="2">
                <div class="view"><input type="password" placeholder="현재 비밀번호" name="pw"></div>
                <div class="view"><input type="password" placeholder="변경할 비밀번호" name="pwchange"></div>
                <div class="view">
                    <input type="button" value="취소" class="btn" onclick="pwview()">
                    <input type="submit" value="확인" class="btn">
                </div>
            </td>';
            echo '</tr>';
            /* password-change-area end */

            /* name-change-area start */
            echo '<tr id="name-info">';
            echo '<td>name</td>';
            echo '<td>'.$row['name'].'</td>';
            // echo '<td><input type="text" placeholder="회원 이름" name="name"></td>';
            echo '<td class="right"><input type="button" class="btn cg-btn" value="이름변경" onclick="namechangeview()"></td>';
            echo '</tr>';

            echo '<tr id="name-change-area" style="display:none">';
            echo '<td>name</td>';
            echo '
            <td colspan="2">
                <div class="view"><input type="text" placeholder="변경할 이름"></div>
                <div class="view">
                    <input type="button" value="취소" class="btn" onclick="nameview()">
                    <input type="submit" value="확인" class="btn">
                </div>
            </td>';
            echo '</tr>';
            /* name-change-area end */

            /* birth-change-area start */
            echo '<tr id="birth-info">';
            echo '<td>birth</td>';
            echo '<td>'.$row['birth'].'</td>';
            // echo '<td><input type="text" placeholder="생년월일(YYMMDD)" name="birth"></td>';
            echo '<td class="right"><input type="button" class="btn cg-btn" value="생년월일 변경" onclick="birthchangeview()"></td>';
            echo '</tr>';

            echo '<tr id="birth-change-area" style="display:none">';
            echo '<td>birth</td>';
            echo '
            <td colspan="2">
                <div class="view"><input type="text" placeholder="생년월일(YYMMDD)"></div>
                <div class="view">
                    <input type="button" value="취소" class="btn" onclick="birthview()">
                    <input type="submit" value="확인" class="btn">
                </div>
            </td>';
            echo '</tr>';
            /* birth-change-area end */

            /* tel-change-area start */
            echo '<tr id="tel-info">';
            echo '<td>tel</td>';
            echo '<td>'.$row['tel'].'</td>';
            /*echo '
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
            </td>';*/
            echo '<td class="right"><input type="button" class="btn cg-btn" value="전화번호 변경" onclick="telchangeview()"></td>';
            echo '</tr>';

            echo '<tr id="tel-change-area" style="display:none">';
            echo '<td>tel</td>';
            echo '
            <td colspan="2">
                <div class="view">
                    <select name="tel-first">
                        <option>010</option>
                        <option>011</option>
                        <option>016</option>
                        <option>018</option>
                        <option>019</option>
                    </select>&nbsp;-&nbsp;
                    <input type="tel" class="tel" name="tel-mid">&nbsp;-&nbsp;
                    <input type="tel" class="tel" name="tel-last">
                </div>
                <div class="view">
                    <input type="button" value="취소" class="btn" onclick="telview()">
                    <input type="submit" value="확인" class="btn">
                </div>
            </td>';
            echo '</tr>';

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
    #top { border-top: 3px solid black; }
    
    .btn { background: white; border: 1px solid #ccc; }
    .cg-btn { width: 100px; }
    .tel { width : 50px; }
    .update { width: 210px; text-align: center; }
    .view { margin: 3px 0; }
    .right { text-align: center; }
</style>

<script>
    function pwchageview() {
        var pw = document.getElementById('pw-info');
        var pwchange = document.getElementById('pw-change-area');

        pw.style.display = "none";
        pwchange.style.display = "";
    }

    function pwview() {
        var pw = document.getElementById('pw-info');
        var pwchange = document.getElementById('pw-change-area');

        pw.style.display = "";
        pwchange.style.display = "none";
    }

    function namechangeview() {
        var name = document.getElementById('name-info');
        var namechange = document.getElementById('name-change-area');

        name.style.display = "none";
        namechange.style.display = "";
    }

    function nameview() {
        var name = document.getElementById('name-info');
        var namechange = document.getElementById('name-change-area');

        name.style.display = "";
        namechange.style.display = "none";
    }

    function birthchangeview() {
        var birth = document.getElementById('birth-info');
        var birthchange = document.getElementById('birth-change-area');

        birth.style.display = "none";
        birthchange.style.display = "";
    }

    function birthview() {
        var birth = document.getElementById('birth-info');
        var birthchange = document.getElementById('birth-change-area');

        birth.style.display = "";
        birthchange.style.display = "none";
    }

    function telchangeview() {
        var tel = document.getElementById('tel-info');
        var telchange = document.getElementById('tel-change-area');

        tel.style.display = "none";
        telchange.style.display = "";
    }

    function telview() {
        var tel = document.getElementById('tel-info');
        var telchange = document.getElementById('tel-change-area');

        tel.style.display = "";
        telchange.style.display = "none";
    }
</script>