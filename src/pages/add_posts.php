<?php
if ($_SERVER['REQUEST_METHOD'] == ['POST']){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "insert into posts ( `title`, `content`) 
        values ('$title', '$content');";
    mysqli_query($connection, $sql);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="title">
    <br>
    <br>
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>
