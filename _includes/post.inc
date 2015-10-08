<!-- Must not display div with class="mytitle" in header div -->
<?php
// check current value posts

// $currentpost = $_GET['currentpost'];
// if($currentpost == NULL){
//   $currentpost = $postno;
// }
include "_posts/2015-10-03.php";?>
  <div class="mycontent">
    <div class="mypostheader">
      <h1 class="myposttitle"><?php echo $myposttitle ?></h1>
      <div class="mypostinfo">
        <p class="mypostauthor"><?php echo $mypostauthor ?></b>
        <p class="mypostdate"><?php echo $mypostdate ?></b>
      </div>
    </div>

    <article class="mypostcontent">
      <?php echo nl2br($mypostcontent); ?>
    </article>
  </div>
