<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['files'])) {
        for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
            $name = $_FILES['files']['name'][$i];
            $pathBefore = $_FILES['files']['tmp_name'][$i];
            $pathNew = BASE_DIR . "/upload/" . $name;
            while (file_exists($pathNew) && is_file($pathNew)) {
                $newName = rand(100000, 500000) . ".jpg";
                $pathNew = BASE_DIR . "/upload/" . $newName;
            }
            move_uploaded_file($pathBefore, $pathNew);
        }
    }
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title">
    <br>
    <br>
    <input type="file" multiple="multiple" name="files[]">
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>