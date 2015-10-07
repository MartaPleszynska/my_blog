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

include "_posts/2015-09-29.php";
// $posts1 = array_reverse(glob('../_posts/*.inc');
// $dir    = '../_posts';
// $posts = scandir($dir);
//
//
// print_r($posts);
// echo $posts;
// print_r($posts1);
// echo $posts1;
// echo "1) ".basename("../_posts/", ".inc").PHP_EOL;
?>
