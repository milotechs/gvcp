<style>
  #mobile-header
  {
    position : fixed;
    padding : 3mm 3mm ;
    z-index: 2;
    width : 100%;
    box-shadow : 2px 5px 7px 2px rgb(0,0,0,0.05);
    background-color: white;
  }

  #mobile-logo img
  {
    width: 50px;
    height : auto;
    object-fit: contain;
  }

  #menu
  {
    position : fixed;
    width : 100%;
    height : 100%;
    z-index : 5;
    background-color: white;
  }

  #menu_header
  {
    padding : 2mm 5mm;
    display : flex;
    justify-content : space-between
  }

  #menu_links
  {
    padding : 2mm 5mm;
  }

   #mobile-navi img
  {
    width: 45px;
    height : auto;
    margin-top : 1mm;
    object-fit: contain;
  }

  #mobile-header-container
  {
    display : flex;
    justify-content: space-between;
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