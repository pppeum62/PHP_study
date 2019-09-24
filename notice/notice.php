<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="result.php">
            <!--작성자 : <input type="text" name="writer"><br>-->
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <select name="option">
                <option value="질문">질문</option>
                <option value="정보">정보</option>
                <option value="후기">후기</option>
            </select>&nbsp;
            <input type="text" name="title" placeholder="제목을 입력하세요"><br>
            <textarea name="contents" rows="10" cols="28"></textarea><br>
            <input type="submit" value="게시">
        </form>
    </body>
</html>