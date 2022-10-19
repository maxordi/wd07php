<?php
//
//echo "Задача №1";
//echo "<br>";
//echo "Изменить регистр строки на противоположный изначальная строка должна быть в верхнем или нижнем регистре";
//echo "<br>";
//echo "<br>";
//
//$str = "hello world php";
//echo $str;
//echo "<br>";
//if ($str == strtolower($str)) {
//    echo strtoupper($str);
//} else {
//    echo strtolower($str);
//}
//
//echo "<hr>";
//echo "Задача №2";
//echo "<br>";
//echo "Посчитать количество слов в строке";
//echo "<br>";
//echo "<br>";
//echo $str;
//echo "<br>";
//
//print_r(str_word_count($str),1);
//echo "Ответ:";
//echo str_word_count($str);
//echo "<hr>";
//
//echo "Задача №3";
//echo "<br>";
//echo "Получите первое слово каждого предложения в тексте.";
//echo "<br>";
//
//$text = 'Hello world. I love php! My php homework.';
//echo $text;
//echo "<br>";
//echo "<br>";
//$line = str_replace(["!","?"],[".",".","."],$text);
//$line = explode(".",$line,-1);
//foreach ($line as $first_word) {
//    echo 'Первое слово предложения:'.strtok($first_word," ")."<br>";
//}
//echo "<hr>";
//
//
//echo "Задача №4";
//echo "<br>";
//echo "Переведите строку в транслит";
//echo "<br>";
//echo "<br>";
//$fraza = "Стремитесь не к успеху, а к ценностям, которые он дает";
//echo $fraza;
//echo "<br>";
//echo "<br>";
//
//$russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
//
//$translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
//
//echo str_ireplace($russian, $translit, $fraza);
//echo "<hr>";
//
//echo "Задача №5";
//echo "<br>";
//echo "Вывести таблицу умножения";
//echo "<br>";
//echo "<br>";
//
//for ($i=1; $i <= 10; $i++ ) {
//    for ($k=1; $k <= 10; $k++) {
//        echo "$i x $k = " . $i * $k;
//        echo "</br>";
//    }
//}

//function days_week($day){
  //  $days = ['Monday','Tuesday','Wednsday','Thursday','Friday','Saturday','Sunday'];
   // return $days[$day - 1];
//}
  //$a = days_week(4);
 // echo $a;
//include __DIR__."/../src/db.php";
//$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
//
//
//
//
//
////while ($page = mysqli_fetch_assoc($res)){
////    $pages[] = $page;
////}
//
//echo "<pre>";
//print_r($pages);
//echo "</pre>";
include_once __DIR__. "/../src/functions.php";
include_once __DIR__. "/../src/db.php";
$url = $_SERVER['REQUEST_URI'];

$url = explode('?', $url);
$url = $url[0];

if ($url == '/'){
    include_once __DIR__. "/../src/pages/blog.php";
}elseif ($url == '/add_post_form'){
    include_once __DIR__. "/../src/pages/add_posts.php";
}
elseif ($url == '/edit_post'){
    include_once __DIR__. "/../src/pages/edit_posts.php";
}
elseif ($url == '/delete_page'){
    $id = $_GET['post'];
    $sql = "delete from posts where id = $id";
    mysqli_query($connection, $sql);

}
elseif(strpos($url, '/page/') === 0){
    $tmp = explode('/', $url);
    $pageId = array_pop($tmp);

    include_once __DIR__. "/../src/pages/page.php";
}