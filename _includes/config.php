<?php
if ($pagecontent == "home"){
  $mytitle = "Welcome to Marta's Blog
  <p>Thoughts and notes of a Mayden Academy Trainee</p>";
  $titleclassname = "";
}
if ($pagecontent == "about"){
  $mytitle = "A little something about me...";
  $titleclassname = "abouttitle";
}
if ($pagecontent == "usefullinks"){
  $mytitle = "Here are links to resources used during the training and some other intering materials I have came across...";
  $titleclassname = "linkstitle";
}
if ($pagecontent == "contact"){
  $mytitle = "If you would like to contact me, please fill the form below";
  $titleclassname = "contacttitle";
}
if ($pagecontent == "archives"){
  $mytitle = "";
  $titleclassname = "abouttitle";
}
if ($pagecontent == "post"){
  $mytitlediv = "";
}
else {
  $mytitlediv = "<div class='mytitle " . $titleclassname . "'>" . $mytitle . "</div>";
}
$dir = '_posts/';
$posts = scandir($dir);
arsort($posts);
$index = count($posts)-1;
?>
