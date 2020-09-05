<?php

include ('template/header.php');

$conn = mysqli_connect('localhost', 'zikky', 'test1234', 'php_blog');

if(!$conn){
echo 'connection error: ' . mysqli_connect_error();
}

//wite query for all blog
$sql = 'SELECT title, description, img FROM blog';

// make query $ get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$blog = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($blog);


?>