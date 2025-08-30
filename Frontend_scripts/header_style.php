<style>
  #header
  {
    position : fixed;
    z-index: 2;
    width : 100%;
    padding : 3mm 5mm;
    background-image: linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0));
  }

  #main_header
  {
    background-color: white;
    border-radius: 10mm;
    padding : 4mm 5mm;
  }

  #red
  {
    color : red;
    font-size : 1cm;
  }

  #bottom_line
  {
    background : black;
    height : 0.5mm;
    border-radius : 10mm;
    margin-top : 2mm;
    width : 0%;
    transition : 0.6s;
  }

  #navi
  {
    width : 70%;
    margin-right : 10mm;
  }
  
  #logo
  {
    width : 30%;
    padding-top : 1mm;
    padding-left : 5mm;
  }

  #logo img
  {
    width : 100px;
    height : auto;
    object-fit: contain;
  }

  #navi a
  {
    font-weight : 600;
    display : inline-block;
    cursor: pointer;
    text-decoration : none;
    color : black;
    width : 3cm;
    text-align : center;
    padding : 1mm 0mm;
    font-size : 4.5mm;
    border-bottom : 0.5mm transparent double;
    transition : 0.5s;
    border: solid 0.5 transparent;
    border-radius : 10mm;
  }

  #navi a:hover
  {
     background-color : lightblue
  }

  #statments img
  {
    width : 100%;
  }


  @media only screen and (max-width : 991px) 
  {
    #header
    {
      display : none;
    }
  }

</style>