<style>
  header
  {
    position : fixed;
    z-index: 2;
    width : 100%;
    padding : 3mm 5mm;
    box-shadow : 2px 5px 7px 2px rgb(0,0,0,0.05);
  }

  #header-container
  {
    display : flex;
      justify-content: space-between;
  } 

  #navi a
  {
    text-decoration : none;
    padding : 2mm 5mm;
  }

  #navi
  {
    padding-top : 7mm;
  }

  #logo img
  {
    width: 80px;
    height : auto;
    object-fit: contain;
  }

  @media only screen and (max-width : 991px) 
  {
    #header
    {
      display : none;
    }
  }

</style>