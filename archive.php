<ul class="list">
<?php
include "_includes/config.php";
foreach ($index; $index > 1; $index--) {
  include "_posts/{$posts[$index]}";
  ?>
  <li class="archive"><?php echo $postdate;?><a href="href="post.php?postno=<?php echo $postno;?>"><?php echo $posttitle;?></li>
<?php
}
?>
</ul>
