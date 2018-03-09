<?php
    /* 
        This PHP program contains the $message and $title variable 
        in which it will be passed on to HTML title tag and
        HTML body tag.
    */
    $message = "Hello World"; 
    $title = "HTML Sample";
?>

<!DOCTYPE html>
<html>
    <head><title>PHP Fundamentals - <?=$title?></title></head> #prints PHP Fundamentals - Hello World
    <body><h1><?php echo $message?></h1></body> #prints HTML Sample
</html>

