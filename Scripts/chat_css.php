<style>
   #chat
   {
      position : fixed;
      bottom : 5mm;
      left : 10mm;
      background-color : white;
      padding : 10mm 5mm 10mm;
      border-radius : 2mm;
      transition : 0.5s;
      z-index : 3;
      background-color: transparent;
   }

   #chat-link-container div:nth-child(1):hover
   {
      background-color: rgba(30, 173, 205, 1);
   }
   
   #chat-link-container div:nth-child(2):hover
   {
      background-color: rgb(37, 211, 102);
   }

   #chat-link-container div
   {
      cursor : pointer;
      transition : 0.5s;
      background-color: white;
   }

   #chat-link-container 
   {
     display : none;
   }

   #chat-btn img
   {
      width : 40px;
      height : 40px;
      margin-right: 20mm;
   }

   #chat-link img
   {
      width : 20px;
      height : 20px;
      margin-top: 1mm;
   }

   #chat-link
   {
      padding : 3mm 2mm;
      width : 100%;
      display : flex;
      border-radius: 1mm;
      justify-content: space-between;
      border : 0.2mm rgb(0,0,0,0.2) solid;
      margin-bottom : 2mm;
   }

   #chat-btn
   {
      padding : 2mm 3mm;
      cursor : pointer;
      border-radius : 2mm;
      padding-right : 4mm;
      display: flex;
      justify-content: space-between;
      background-color : white;
      box-shadow: 2px 6px 10px 2px rgb(0,0,0,0.2);
      border: lightgray solid 0.5mm;
      margin-top : 5mm;
   }

    #chat-btn div
    {
      padding-top : 1.9mm;
    }

   @media only screen and (max-width : 991px) 
   {
      #chat
      {
         left : 5mm;
         bottom : 2mm; 
         padding : 2mm 2mm;
      }

      #chat-btn img
      {
         margin-right: 5mm;
      }

      #chat-btn 
      {
        margin-top : 10mm
      }
   }

</style>