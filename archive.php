<?php


foreach ($posts as $index => $value) {
  $filename = $value;
  include "_posts/{$filename}";
  $index -= 1;
  // <a class="readmorebtn" href="post.php?postno=<?php echo $postno;?>">Read More</a>
}

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
<ul class="list">
  <!-- for loop here  -->
  <li class="archive"><?php echo $postdate;?><a href="href="post.php?postno=<?php echo $postno;?>"><?php echo $posttitle;?></li>
</ul>




// <div class="mycontenthome">
//     <?php
//     include "_posts/{$posts[$index]}";
//     // $currentpost = $_GET['currentpost'];
//     include "_includes/shortpost.inc";
//     ?>
// </div>
//   <div class="mycontenthome">
//         <?php
//         include "_posts/{$posts[$index-1]}";
//         include "_includes/shortpost.inc"; ?>
//   </div>
//   <div class="mycontenthome">
//       <?php
//       include "_posts/{$posts[$index-2]}";
//       include "_includes/shortpost.inc"; ?>
//   </div>
//   <div class="mycontenthome">
//       <?php
//       include "_posts/{$posts[$index-3]}";
//       include "_includes/shortpost.inc"; ?>
//   </div>
