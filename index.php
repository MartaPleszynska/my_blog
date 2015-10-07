<?php
$pagecontent = $_GET['pagetitle'];

if($pagecontent == NULL){
  $pagecontent = "home";
}
include "_layouts/default.inc" ?>
<!-- /*
This to put in in div with class="mytitle" in header
"Welcome to Marta's Blog
<p>Thoughts and notes of a Mayden Academy Trainee</p>"

layout: default */ -->
