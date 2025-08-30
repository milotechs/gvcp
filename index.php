<?php 
  include 'Database/Database.php';
  $url = explode("/",$_SERVER['QUERY_STRING']);
  $BASE_URL = "/gvcp";
  $db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GVCP | <?php echo $url[0] ?></title>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="logo.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="query-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'Scripts/main_css.php'?>
  <?php include 'Scripts/header_css.php'?>
  <?php include 'Scripts/error_404_css.php'?>
  <script src = '<?php echo $BASE_URL;?>Scripts/query-3.4.1.min.js'></script>
</head>
  <body>
    <?php
         if(file_exists("View/".$url[0].".php"))
         {
            include "Components/header.php";
            include 'View/'.$url[0].".php";
            include "Components/footer.php";
         }
         else
         {
           include "404/error_404.php";
         }
         include 'Scripts/main_js.php';
    ?> 
  </body>

</html> 