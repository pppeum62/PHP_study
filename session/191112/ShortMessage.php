<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST" action="Message.php">
            <input type="hidden" value="<?=$_GET['id']?>" name="w_name">
            <table>
                <tr>
                    <td>Receive</td>
                    <td>
                        <input type="text" style="width: 160px;" name="name">
                    </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>
                        <textarea style="height: 150px; width: 160px;" name="contents"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Send">
                        <input type="reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>