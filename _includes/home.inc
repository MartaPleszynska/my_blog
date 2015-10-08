<div class="mycontenthome">
    <?php
    include "_posts/{$posts[$index]}";
    // $currentpost = $_GET['currentpost'];
    include "_includes/shortpost.inc";
    ?>
</div>
  <div class="mycontenthome">
        <?php
        include "_posts/{$posts[$index-1]}";
        include "_includes/shortpost.inc"; ?>
  </div>
  <div class="mycontenthome">
      <?php
      include "_posts/{$posts[$index-2]}";
      include "_includes/shortpost.inc"; ?>
  </div>
  <div class="mycontenthome">
      <?php
      include "_posts/{$posts[$index-3]}";
      include "_includes/shortpost.inc"; ?>
  </div>
