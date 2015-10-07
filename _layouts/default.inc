<!DOCTYPE html>
<html>
<head>
  <!-- Grab the page title from url or variable -->
  <title>
    <?php echo $pagecontent; ?>
  </title>
  <link rel="stylesheet" type="text/css" href="css/mycss.css">
  <link rel="stylesheet" type="text/css" href="css/mediaq.css">
  <?php include "_includes/config.php"; ?>
</head>
<body>
  <a name="top"></a>
<!-- Here include header.html -->
  <?php include "_includes/header.inc"; ?>
  <main class="mycontainer">
    <!-- Here goes content -->
    <?php include "_includes/{$pagecontent}.inc"; ?>
  </main>

<!-- Here include footer.html -->
<?php include "_includes/footer.inc"; ?>
</body>
</html>
