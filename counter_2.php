<?php 

if(!file_exists('counter_2.txt')){
    file_put_contents('counter_2.txt', '0');
}
file_put_contents('counter_2.txt', ((int) file_get_contents('counter_2.txt')) + 1);
header('Location: ' . $_GET['href']);

?>