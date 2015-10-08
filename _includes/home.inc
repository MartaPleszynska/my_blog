<?php

$minimum = $index - 3;
for ($index; $index >= $minimum; $index--) {
  ?>
  <div class="mycontenthome">
      <?php include "_posts/{$posts[$index]}";
           include "_includes/shortpost.inc"; ?>
  </div>
  <?php
}
?>
