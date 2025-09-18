<style>
  header
  {
    position : sticky;
    z-index: 2;
    top : 0;
    width : 100%;
    box-shadow : 2px 5px 7px 2px rgb(0,0,0,0.05);
    background-color: white;
  }

  #line
  {
    background-color: orange;
    height : 0.5mm;
    width : 0%;
    transition : 0.5s;
  }

  #header-container
  {
    display : flex;
    justify-content: space-between;
    padding : 2mm 10mm;
  } 

   a:hover #line
   {
      width : 100%;
   }

  #navi a
  {
    text-decoration : none;
    padding : 2mm 5mm;
    display : inline-block;
    border-radius: 10mm;
    font-weight: 300;
    color : black;
    transition: 0.5s;
    margin-left: 2mm;
    cursor : pointer;
  }

  #navi a[onclick= "serviceDropdown()"]:hover
  {
     color : lightgray
  }

  #navi
  {
    padding-top : 5mm;
  }

  #logo img
  {
    width: 70px;
    height : auto;
    object-fit: contain;
  }

  /*-------- drop down ------------ */
  #dp
  {
    background-color: white;
    position : fixed;
    right : 10mm;
    width : 50%;
    border-radius : 1mm;
    top : 50mm;
    opacity: 0;
    display : none;
    padding : 5mm;
    box-shadow : 2px 7px 7px 2px rgb(0,0,0,0.1);
    transition: 0.5s;
  }

  #dp hr
  {
     background-color: lightgray;
     height : 0.2mm;
     border-radius: 10mm;
     border : none;
  }

  #dp img
  {
     width : 100%;
     height : 60px;
     object-fit: cover;
     border-radius : 1mm;
     display: block;
  }

  #dp-icon
  {
    width : 18px;
    height : 18px;
    transition: 0.5s;
  }

  #dp span
  {
    font-size: 4mm;
  }

  #dp-service-container
  {
    padding : 4mm;
    border-radius : 1mm;
    border : solid 0.2mm transparent;
    transition : 0.5s;
    cursor : pointer;
  }

  #dp-service-container:hover
  {
    text-decoration : none;
    color : rgb(150,150,150)
  }



  @media only screen and (max-width : 991px) 
  {
    header
    {
      display : none;
    }

    #mobile-header
    {
      display : block;
    }
  }

</style>