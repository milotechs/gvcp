<style>
  header
  {
    position : fixed;
    z-index: 2;
    width : 100%;
    box-shadow : 2px 5px 7px 2px rgb(0,0,0,0.05);
    background-color: white;
  }

  #contacts_haeder
  {
    background-color: orangered;
    margin-bottom: 3mm;
    color : white;
  }

  #contacts_haeder
  {
    padding : 1mm 10mm;
  }

  #header-socials img
  {
    width : 30px;
    height : auto;
    margin-left: 1mm;
  }

  #header-socials 
  {
    padding-top : 5mm;
  }

  #header-container
  {
    display : flex;
    justify-content: space-between;
    padding : 2mm 10mm;
  } 

  #navi a
  {
    text-decoration : none;
    padding : 2mm 5mm;
  }

  #navi
  {
    padding-top : 6mm;
  }

  #logo img
  {
    width: 70px;
    height : auto;
    object-fit: contain;
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