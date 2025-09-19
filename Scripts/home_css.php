<style>
  #home #hero
  {
    background-position: center;
    background-size: cover;
    transition: 0.5s ease;
    background-repeat: no-repeat;
    background-image: url('/gvcp/bg/construction-home-bg.jpg');
  }

  #home #dark-bg
  {
    padding : 5cm 0mm 3cm; 
  }

  #num-bg
  {
    display : none;
  }

  #dark-bg hr
  {
    background-color : orange;
    transition: 0.5s;
    height : 0.25mm;
  }

  #hero-header-title
  {
    overflow : hidden;
    height : 40px;
  }

  #hero p
  {
    transition: 0.3s;
  }

  #hero h1
  {
    font-size: 7mm;
    font-weight: 500;
    transition: 0.3s;
  }

  

   /* --------- why choose us/ core values---------*/
 
   #core-values
   {
      margin-top: 2cm; 
   }

   #why-choose-us img, 
   #core-values img
   {
      width: 50px;
      height : auto;
      margin-bottom : 3mm;
   }

   #why-choose-us .col-md-4,
   #core-values .col-md-4
   {
      padding-bottom : 10mm;
   }

   #why-choose-us .row,
   #core-values .row
   {
      padding-top: 5mm;
   }

/* --------- services---------*/
  #services
  {
    background-image: url('/gvcp/bg/services.jpg');
    background-position: center;
    background-size: cover;
    color : white;
    background-attachment: fixed;
  }

  #services button
  {
    border: none;
    background-color : orange;
    font-size : 4mm;
    padding : 2mm 6mm;
    border-radius: 1mm;
  }

  
  
  #services h5{
    color: white;
    font-size: 5mm;
  }

  #services .col-md-6
  {
    padding-bottom : 10mm;
  }

  #services p
  {
    font-weight: 200;
  }

  #services a{
    color: white;
    text-decoration: none;
    backgroud-color:#000;
  }

  #services-dark-bg
  {
    background-color: rgb(0,0,0,0.5);
    padding : 3cm 0mm;
  }

   #services hr
   {
     background-color: orange;
   }

   
   #services img
   {
     width : 100%;
     height : 200px;
     object-fit : cover;
     border-radius: 2mm;
     margin-bottom : 3mm
   }
.explore-btn {
    background-color: #E7863CFF;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
    transition: all 0.3s ease;
}

.explore-btn:hover {
    background-color: #C45907FF;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
   /* --------- why choose us ---------*/
    #why-choose-img img
    {
      width: 100%;
      height: auto;
      object-fit: contain;
      border-radius: 2mm;
    }

    
   /* --------- Cathy-text ---------*/
 
   #catchy-section 
   {
      background-color: rgb(250,250,250);
      padding : 2cm 0mm;
      color : black;
      font-weight: 200;
      border: 0.2mm solid lightgray
   }

   #catchy-section hr 
   {
     background-color: orange;
     height : 0.2mm;
     border-radius: 10mm;
   }

   #catchy-section img
   {
      width : 100%;
      height : 200px;
      object-fit: cover;
      box-shadow : 2px 6px 10px 2px rgb(255,255,255,0.1);
      margin-bottom: 5mm;
      border-radius : 2mm;
   }

  #catchy-section h1
  {
     font-size : 1cm;
     font-weight: 300;
  }
   
   /*----------contact us -----------------------*/
   
   #contact-us-pic img
   {
    width : 100%;
    height : auto;
   }

   #detail img
   {
    width : 25px;
    height: 25px;
   }

   #contact-details
   {
     padding-top : 2.5cm 
   }

   #detail 
   {
     border : solid 0.2mm rgb(0,0,0,0.1);
     border-radius: 1mm;
     padding: 3mm 2mm;
     box-shadow : 2px 5px 8px 2px rgb(0,0,0,0.1);
     display : flex;
     margin-bottom : 3mm;
     justify-content: space-between;
     transition: 0.5s;
   }

   #detail:hover 
   {
     background-color: rgb(255,165,0,0.5);
   }

    #contact-details a
   {
     text-decoration : none;
     color : black;
   }

   @media only screen and (max-width : 991px) 
   {
      #title
      {
        position : static;
        width : 100%;
      }

      #why-choose-us
      {
        text-align: center;
      }

      footer 
      {
        text-align : center;
      }

      footer hr
      {
         width : 70%;
      }
   }


</style>