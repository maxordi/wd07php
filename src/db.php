<?php


$connection = mysqli_connect('wd07_db','root', 'root', 'wd07');
$res = mysqli_query($connection, "SELECT * FROM wd07.posts;");
