<div class="mycontent">
  <div class="mypostcontent">
    <ul class="list">

      <?php
      unset($posts[0]);
      unset($posts[1]);
      foreach ($posts as $value) {
        include "_posts/{$value}";
        ?>
        <li class="archive"><?php echo $mypostdate;?><a href="href="post.php?postno=<?php echo $postno;?>"><?php echo $myposttitle;?></li>
      <?php
      }
      ?>

    </ul>
  </div>
</div>
