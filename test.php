<?php
$dir = '_posts/';
$posts = scandir($dir);
arsort($posts);
print_r($posts);
$index = count($posts)-1;
$post1 = $posts[$index];
$post2 = $posts[$index-1];
$post3 = $posts[$index-2];
$post4 = $posts[$index-3];

echo $post1 . $post2 . $post3 . $post4;
?>
