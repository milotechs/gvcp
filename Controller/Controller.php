<?php

// each page will have its own router function
// database object ($db = )

 include './Database/Database.php';
 class Router
 {

   const BASE_URL = '/new/';

   function Home()
   {
     require('./View/home.php');
   } 

   function Music()
   {
     require('./View/about.php');
   }

   function videos()
   {
     require('./View/videos.php');
   }

   function error404()
   {
     require('./View/404.php');
   }

  
 }

 class Constants
 {
   function Header()
   {
     require('./Page_sections/header.php');
   } 

   function footer()
   {
     require('./Page_sections/footer.php');
   }

   function mobileHeader()
   {
     require('./Page_sections/mobileHeader.php');
   } 
 }

?>