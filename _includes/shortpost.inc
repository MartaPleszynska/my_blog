<div class="shortpost">
  <div class="mypostheader">
    <h1 class="myposttitle titleexcerpt myposttitlesmaller"><?php echo $myposttitle ?></h1>
    <div class="mypostinfo">
      <p class="mypostauthor mypostauthorsmall"><?php echo $mypostauthor ?></b>
      <p class="mypostdate mypostdatesmaller"><?php echo $mypostdate ?></b>
    </div>
  </div>
  <article class="mypostcontent ">
    <div class="excerpt" ><?php echo $mypostcontent ?></div>
  </article>
  <span>...</span>
  <!-- use get to pass post no in variable -->
<!-- $currentpost = $_GET['currentpost'] -->
  <a class="readmorebtn" href="post.php?postno=<?php echo $postno;?>">Read More</a>
</div>
