<?php
    $connect = new mysqli("localhost", "root", "", "webserver");
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    
    $id = $_POST["name"];                      //Writer
    $pw = $_POST["pw"];                        //Password
    $title = $_POST["title"];                  //Title
    $content = $_POST["content"];              //Content
    $date = date('Y-m-d h:i:s');            //Date

    $URL = './index.php';                   //return URL


    $query = "INSERT INTO board (number, title, content, id, password, date, hit)
    VALUES (null, '$title', '$content', '$id', '$pw', '$date', 0)";

    $result = $connect->query($query);
    if($result) {
?>

<script>
    alert("<?php echo "글이 등록되었습니다."?>");
    location.replace("<?php echo $URL?>");
</script>

<?php
    } else {
        echo "FAIL";
    }

    $connect->close();
?>
