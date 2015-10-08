<?php

$postno = $_GET['postno'];
if($postno == NULL){
  $postno = "2015-09-26";
}
include "_posts/{$postno}.php";

$pagecontent = "post";

include "_layouts/default.inc" ?>
<!-- /*
This to put in in div with class="mytitle" in header
"Welcome to Marta's Blog
<p>Thoughts and notes of a Mayden Academy Trainee</p>"

layout: default */ -->
