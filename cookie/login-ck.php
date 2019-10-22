<?php
    $id = $_POST{ 'userid' };
    $password = $_POST{ 'userpw' };

    $ck = isset($_POST{ 'idSave' });

    if($id == "kim"){
        if($password == "1234"){
            echo '로그인 성공!';
            if($ck == true){
                setcookie('saveid', $id);
            }
        }
        else {
            echo '비밀번호를 확인해주세요';
        }
    }
    else {
        echo '아이디를 확인해주세요';
    }
?>