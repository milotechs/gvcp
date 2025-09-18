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
    width : 0%;
    height : 100%;
    left: 0;
    z-index : 5;
    background-color: white;
    overflow: hidden;
  }

  #menu, #menu div
  {
     transition : 0.5s;
  }

  #menu_header
  {
    padding : 5mm 8mm;
    display : flex;
    justify-content : space-between
  }

  #menu_header div:nth-child(2) span
  {
    color : red;
  }

  #menu span
  {
    font-size : 6mm;
    font-weight: 900; 
  }

  #menu_links
  {
    padding : 2mm 8mm;
  }

  #link  
  {
    border-top: rgb(0,0,0,0.1) solid 0.2mm;
    padding : 3mm 0mm
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

  #menu_bottom_logo
  {
    width : 80px;
    transform: translate(-50%,-50%);
    position: absolute;
    bottom : 5%;
    left : 50%;
    transition : 0.5s
  }

</style>