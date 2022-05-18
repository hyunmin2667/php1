<!DOCTYPE>
<html lang="ko">
<head>
    <title>게시물 작성</title>
    <meta charset = 'utf-8'>
    <link href="./css/write.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form method = "post" action = "write_action.php">
        <table style="padding-top:50px" align="center" width="800" border="0" cellpadding="2">
            <tr>
                <td height="20" align="center" bgcolor=#ccc><font color="white">게시물 작성</font></td>
            </tr>
            <tr>
                <td bgcolor="white">
                    <table class = "table2">
                        <tr>
                            <td align="center">작성자</td>
                            <td><input type="text" name="name" size="20"></td>
                        </tr>

                        <tr>
                            <td align="center">제목</td>
                            <td><input type="text" name = "title" size="60"></td>
                        </tr>

                        <tr>
                            <td align="center">내용</td>
                            <td><textarea name="content" cols="85" rows="15"></textarea></td>
                        </tr>

                        <tr>
                            <td align="center">비밀번호</td>
                            <td><input type="password" name="pw" size="10" maxlength="10"></td>
                        </tr>
                    </table>

                    <center>
                        <input type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

 