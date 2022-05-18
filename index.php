<!DOCTYPE html>
 
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/index.css" rel="stylesheet" type="text/css" />
    <title>게시판</title>
</head>

<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'webserver') or die ("connect fail");
        $query ="select * from board order by number desc";
        $result = $connect->query($query);
        $total = mysqli_num_rows($result);
    ?>

    <h2 align="center">게시판</h2>
    <table align = "center">
        <thead align = "center">
            <tr>
                <td width = "50" align= "center">번호</td>
                <td width = "500" align = "center">제목</td>
                <td width = "100" align = "center">작성자</td>
                <td width = "200" align = "center">날짜</td>
                <td width = "50" align = "center">조회수</td>
            </tr>
        </thead>

        <tbody>
            <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                    if($total%2==0){
            ?>
                        <tr class = "even">
                        <?php
                    } else{
                        ?>
                    <tr>
                        <?php } ?>
                        <td width = "50" align = "center"><?php echo $total?></td>
                        <td width = "500" align = "center">
                            <a href = "view.php?number=<?php echo $rows['number']?>">
                            <?php echo $rows['title']?>
                        </td>
                        <td width = "100" align = "center"><?php echo $rows['id']?></td>
                        <td width = "200" align = "center"><?php echo $rows['date']?></td>
                        <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                    </tr>
                <?php
                    $total--;
                }
                ?>
        </tbody>
    </table>

    <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
    </div>


</body>
</html>