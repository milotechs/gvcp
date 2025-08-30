<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
   <?php 
       include '../../Assets/css.php';
       $subscriptionDetails = explode("/",$_POST['subscriptionDetails']);
    ?>
   <style>
     img
     {
       width : 200px;
     }
     button
     {
      width : 50%;
      color: rgb(30,30,200);
      background-color: rgb(30,30,200,0.2);
      border : rgb(30,30,200,0.2) solid 0.2mm;
      padding : 2mm;
      margin-top: 3mm;
      box-shadow: 2px 5px 10px rgb(0,0,0,0.2);
     }

     #activation-code
     {
      background-color: rgb(230,230,230);
      width : fit-content;
      padding : 5mm 20mm;
      font-weight: 700;
     }
   </style>

 <head>
 <body>
    <!--
      array keys
      1 - email
      2 - firstname
      3 - lastname
      4 - property category
      5 - area of interest
    -->
    <br>
     <div class = 'container'>
       <img src = '../../Icons/logo.png'> 
       <hr>
       Hello <b><?php echo $subscriptionDetails[2]; ?></b>
       <br><br>
       area of interest : <b><?php echo $subscriptionDetails[4]; ?></b> <br>
       Property category : <b><?php echo $subscriptionDetails[3]; ?></b> <br>
       <br>
       <div id = 'activation-code'>
         Activation code 
         <hr>
        <?php //echo $subscriptionDetails[5]; ?>234524234</b>
      </div>
     <div>
 </body>
</html>