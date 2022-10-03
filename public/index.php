<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица умножения в php</title>
    <style>
        .center {
            width: 250px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: 125px;
            margin-left: -125px;
        }
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #030303;
        }
    </style>
</head>
<body>
<?php

echo "Задача №1";
echo "<br>";
echo "Изменить регистр строки на противоположный изначальная строка должна быть в верхнем или нижнем регистре";
echo "<br>";
echo "<br>";

$str = "hello world php";
echo $str;
echo "<br>";
if ($str == strtolower($str)) {
    echo strtoupper($str);
} else {
    echo strtolower($str);
}

echo "<hr>";
echo "Задача №2";
echo "<br>";
echo "Посчитать количество слов в строке";
echo "<br>";
echo "<br>";
echo $str;
echo "<br>";

print_r(str_word_count($str),1);
echo "Ответ:";
echo str_word_count($str);
echo "<hr>";

echo "Задача №3";
echo "<br>";
echo "Получите первое слово каждого предложения в тексте.";
echo "<br>";

$text = 'Hello world. I love php! My php homework.';
echo $text;
echo "<br>";
echo "<br>";
$line = str_replace(["!","?"],[".",".","."],$text);
$line = explode(".",$line,-1);
foreach ($line as $first_word) {
    echo 'Первое слово предложения:'.strtok($first_word," ")."<br>";
}
echo "<hr>";

echo "Задача №4";
echo "<br>";
echo "Переведите строку в транслит";
echo "<br>";
echo "<br>";
$fraza = "Стремитесь не к успеху, а к ценностям, которые он дает";
echo $fraza;
echo "<br>";
echo "<br>";

$russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');

$translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');

echo str_ireplace($russian, $translit, $fraza);
echo "<hr>";

echo "Задача №5";
echo "<br>";
echo "Вывести таблицу умножения";
echo "<br>";
echo "<br>";


?>
<div class="center">
    <table>
        <?
        $rows = 10;
        $cols = 10;
        for ($i=1; $i <= $rows; $i++) {
            echo "\t\t<tr>\n";
            if ($i == 1) {
                $b = '<b>';
                $b_end = '</b>';
            }
            for ($q = 1; $q < $cols; $q++) {
                if (($q == 1) && ($i != 1)) {
                    $b = '<b>';
                    $b_end = '</b>';
                }
                echo "\t\t\t<td>$b" . $i * $q . "$b_end</td>\n";
                if (($q == 1) && ($i != 1)) {
                    $b = '';
                    $b_end = '';
                }
            }
            echo "\t\t</tr>\n";
            $b = '';
            $b_end = '';
        }
        ?>
    </table>



</div>
</body>
</html>