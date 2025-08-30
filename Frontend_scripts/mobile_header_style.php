<style>
   #mobile_header
   {
      box-shadow : 2px 4px 10px 2px rgb(0,0,0,0.2);
      background-color: white;
      padding : 1mm 3mm;
      position: fixed;
      width : 100%;
      top : 0mm;
      left : 0;
      z-index : 3;
      display : none;
   }

   #menu_bottom_logo
   {
     width : 130px;
     height : auto;
     position: absolute;
     bottom : 20mm;
     margin : auto;
     left : 0;
     right : 0;
   }

   #menu,#blur
   {
     width : 0px;
     position : fixed;
     height : 100%;
     top : 0;
     left : 0;
     background-color: white;
     z-index : 5;
     overflow: hidden;
     transition: 0.3s;

   }
   

   #mobile_logo, #mobile_navi
   {
     width : 50%; 
   }

   #mobile_logo img
   {
     width : 70px; 
     height : auto;
     margin : 1mm 0mm; 
   }

   #mobile_navi img
   {
    width : 40px; 
    height : auto;
    margin : 3.5mm 0mm 3mm; 

   }

   #menu_header
   {
     display: flex;
     padding : 5mm 5mm;
     font-weight: 900;
     font-size : 7mm;
   }

   #menu_header div:nth-child(1)
   {
     width : 70%;
     font-family: "Lobster Two", sans-serif;
   }

   #menu_header div:nth-child(2)
   {
     width : 30%;
     color : red;
   }

   #menu_links
   {
     padding : 1mm 5mm;
   }

   #menu_container #line
   {
     background-color : orange;
     width : 50%;
   }

   #link
   {
     border-bottom : lightgray 0.2mm solid;
     padding : 3mm 0mm;
   }

   @media screen and (max-width : 991px) 
   {
     #mobile_header
     {
       display : block;
     }

   }


</style>