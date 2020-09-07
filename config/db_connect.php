<?php

$conn = mysqli_connect('localhost', 'zikky', 'test1234', 'php_blog');

if(!$conn){
echo 'connection error: ' . mysqli_connect_error();
}

?>